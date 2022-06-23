(function() {
  var CookieKey = 'appsumoBannerHide';
  var ApiUrl = '/api/banners/?format=json';

  var ExcludePaths = [
    // /^\/$/, // homepage
    /^\/account/, // account pages
    /^\/checkout/, // checkout page
    /^\/cart/, // cart page
    /^\/complete/, // complete checkout page
    /^\/black-friday-.*$/, // black friday teaser pages
    /^\/collections\/black-friday-.*$/, // black friday collection
    /^\/partners/, // partners pages
  ];

  var CloseButton = '<svg width="8" height="9" viewBox="0 0 8 9" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M7.89603 0H6.14403L3.96003 2.928L1.78803 0H3.05176e-05L3.06003 4.128L3.05176e-05 8.244H1.76403L3.94803 5.316L6.12003 8.244H7.89603L4.83603 4.116L7.89603 0Z" fill="{{ color }}"/></svg>';

  var user;

  function getLoggedInUser() {
    if (typeof user !== 'undefined') return user;

    function findUser() {
      // Try to find user data in dataLayer first
      if (window.dataLayer && window.dataLayer.length) {
        for (var i = 0; i < window.dataLayer.length; i += 1) {
          var data = window.dataLayer[i];
          if (!data) continue;

          if (data.userId) {
            return {
              id: data.userId,
              has_plus: data.hasPlus === 'True',
              has_briefcase: data.hasBriefcase === 'True',
            };
          }
        }
      }

      // Pull from userSession (from nuxt)
      return window && window.userSession && window.userSession.user;
    }

    user = findUser();
    return user;
  }

  // Return true if current page passes provided rules
  // Will stop checking after first valid page
  function validatePageRules(rules, exclude = false) {
    if (!rules || !rules.length) {
      return exclude;
    }

    var path = window.location.pathname;

    for (let i = 0; i < rules.length; i += 1) {
      var rule = rules[i];

      if (rule.regex) {
        try {
          var r = RegExp(rule.regex)
          if (r.test(path)) {
            return !exclude; // True for include rules, False for exclude rules
          }
        } catch (e) { /* noop */ }

        continue;
      }

      // Special Rules Without Regex
      if (rule.slug === 'pdp-page' && window.isPDPPage) {
        return !exclude;
      }
    }

    // No passing rules.
    // Include == false
    // Exclude == true
    return exclude;
  }

  function validateDisplayRules(banner) {
    var path = window.location.pathname;

    // Is page is provided, staff only wants to show banner on one page, so ignore display rules
    if (banner.page) {
      // Trim slashes to make comparison easier
      const trimmedPath = path.replace(/^\//, '').replace(/\/$/, '');
      const trimmedRule = banner.page.replace(/^\//, '').replace(/\/$/, '');
      return trimmedPath === trimmedRule;
    }

    var include = banner.include_pages;
    var exclude = banner.exclude_pages;

    if (!validatePageRules(include) || !validatePageRules(exclude, true)) {
      return false;
    }

    return true;
  }

  function validateUserGroup(banner) {
    var group = banner.user_group;
    var user = getLoggedInUser();

    switch (group) {
      case 'anonymous_users': {
        return !user;
      }

      case 'logged_in_users': {
        return !!user;
      }

      case 'plus_members': {
        return user && user.has_plus;
      }

      case 'non_plus_members': {
        return user && !user.has_plus;
      }

      case 'briefcase_members': {
        return user && user.has_briefcase;
      }

      default: {
        // All Users
        return true;
      }
    }
  }

  function bindEvent(event, fn, el = window) {
    if (el.addEventListener) {
      el.addEventListener(event, fn);
    } else {
      el['on' + event] = fn;
    }
  }

  function unbindEvent(event, fn, el = window) {
    if (el.removeEventListener) {
      el.removeEventListener(event, fn);
    } else {
      el['on' + event] = null;
    }
  }

  function fetchBanners(callback) {
    var excludeIds = getHiddenBanners();

    var url = ApiUrl;
    if (excludeIds.length) {
      url += '&exclude=' + excludeIds.filter(Boolean).join(',');
    }

    if (typeof window.bannersJs !== 'undefined') {
      var banners = window.bannersJs.filter(function(banner) {
        return excludeIds.includes(banner.id) === false;
      });
      callback(banners);
      return;
    }

    if (fetch) {
      // If fetch is supported, then promises are too
      fetch(url, {
        method: 'GET',
      }).then(function(resp) {
        return resp.json();
      }).then(function(json) {
        callback(json && json.results);
      });
    } else if ($ && $.ajax) {
      $.ajax(url, {
        complete: function(jqXHR) {
          jqXHR.done(function(data) {
            callback(data && data.results);
          })
        },
      })
    } else {
      console.log('Unable to fetch banners for user...');
      callback([]);
    }
  }

  var cookies = null;

  function getCookies() {
    if (cookies) return cookies;

    cookies = document.cookie.split(';').reduce(function(memo, cookie) {
      var [key, val] = cookie.split('=');
      if (!key || !val) return memo;
      memo[key.trim()] = val.trim();
      return memo;
    }, {});

    return cookies;
  }

  function getCookieKey(bannerId) {
    return CookieKey + ':' + bannerId;
  }

  function getCookie(bannerId) {
    var cookies = getCookies();
    var cookieKey = getCookieKey(bannerId);
    return cookies[cookieKey] || '';
  }

  function setCookie(bannerId) {
    var unix = new Date().getTime();
    var expires = unix + (1e3 * 60 * 60 * 24 * 365); // effectively stop showing banner forever
    var key = getCookieKey(bannerId);
    document.cookie = key + '=true; path=/; expires=' + new Date(expires).toUTCString();
  }

  /**
   * Get a list of banners (ids) that the user has opted out of
   */
  function getHiddenBanners() {
    var cookies = getCookies();
    var bannerIds = [];

    Object.keys(cookies).forEach(function(key) {
      if (key.indexOf(CookieKey) === 0) {
        var [, id] = key.split(':');
        bannerIds.push(id);
      }
    });

    return bannerIds;
  }

  var styleBufferEventBound = false;

  function styleBufferTop() { // Throwback
    var el = document.querySelector('.appsumo-banner');

    if (el) {
      // Reposition nav, add top padding, add necessary events
      var offsetHeight = el.offsetHeight;
      if (offsetHeight) {
        document.body.style.paddingTop = offsetHeight + 'px';
      }

      // This class disables fixed navbar, so if it exists don't touch nav
      var disableFixAndScroll = document.querySelector('.disable-fix-and-scroll');

      var navbar = document.querySelector('.navbar');
      if (!disableFixAndScroll && navbar) {
        navbar.style.marginTop = offsetHeight + 'px';
      }

      if (!styleBufferEventBound) {
        bindEvent('resize', styleBufferTop);
        styleBufferEventBound = true;
      }
    } else {
      // Remove any buffers and unbind events
      document.body.style.paddingTop = '';

      var navbar = document.querySelector('.navbar');
      if (navbar) {
        navbar.style.marginTop = '';
      }

      unbindEvent('resize', styleBufferTop);
    }
  }

  function onClose(banner) {
    var el = document.querySelector('.appsumo-banner');
    if (!el) return;

    el.parentNode.removeChild(el);
    styleBufferTop();

    setCookie(banner.id);
  }

  function showBanner(banners) {
    if (!banners || !banners.length) return;

    // Filter banners by cookie and by display rules
    var filteredBanners = banners.filter(function(banner) {
      var cookie = getCookie(banner.id);
      if (cookie) return false;
      return validateDisplayRules(banner) && validateUserGroup(banner);
    });

    if (!filteredBanners.length) return;

    var banner = filteredBanners[Math.floor(Math.random() * filteredBanners.length)];

    var el = document.createElement('div');
    el.className = 'appsumo-banner';

    // Add separate element for background styling
    var backgroundEl = document.createElement('div');
    backgroundEl.className = 'appsumo-banner__background';
    backgroundEl.style.background = banner.background_color || '';
    el.appendChild(backgroundEl);

    // Create label element and add to wrapper
    var text = banner.text;

    var labelEl = document.createElement('div');
    labelEl.innerText = text;
    labelEl.style.color = banner.text_color || '';
    labelEl.className = 'appsumo-banner__text';
    el.appendChild(labelEl);

    // Create CTA and add to wrapper
    var cta = banner.cta;
    var href = banner.href;

    if (banner.cta) {
      var buttonEl = document.createElement('button');
      buttonEl.innerText = cta;
      buttonEl.className = 'appsumo-banner__cta';
      buttonEl.style.background = banner.cta_background_color;
      buttonEl.style.color = banner.cta_text_color;

      var anchorEl = document.createElement('a');
      anchorEl.href = href;
      anchorEl.setAttribute('target', '_blank');
      anchorEl.setAttribute('rel', 'noopener noreferrer');

      anchorEl.appendChild(buttonEl);
      el.appendChild(anchorEl);
    }

    // Add close button
    var closeEl = document.createElement('div');
    closeEl.className = 'appsumo-banner__close';
    bindEvent('click', onClose.bind(null, banner), closeEl);
    closeEl.innerHTML = CloseButton.replace('{{ color }}', banner.text_color);
    closeEl.style.border = '1px solid ' + banner.text_color;
    el.appendChild(closeEl);

    // Add Banner to page
    document.body.prepend(el);
    setTimeout(function() {
      // Add animation class
      el.className += ' appsumo-banner--enter';
    });

    // Push navbar down to make room for banner
    styleBufferTop();
  }

  function init() {
    fetchBanners(function(banners) {
      // Trigger once user scrolls down then back up
      var triggered = false;
      var prevScrollTop = 0;
      function onScroll(e) {
        var scrollTop = document.documentElement.scrollTop;

        if (scrollTop < prevScrollTop && !triggered) {
          triggered = true
          unbindEvent('scroll', onScroll);
          showBanner(banners);
        }

        prevScrollTop = scrollTop;
      }

      bindEvent('scroll', onScroll);
    });
  }

  if (document.readyState === 'complete' || document.readyState === 'loaded' || document.readyState === 'interactive') {
    setTimeout(init, 0);
  } else {
    document.addEventListener('DOMContentLoaded', init);
  }
})()
