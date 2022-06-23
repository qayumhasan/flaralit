// Global Y position
var lastPosition = 0;
var lastWidth = 0;

// Set '.navbar-visible'
function navVisible(nav, container) {
  if (!nav.classList.contains("scroll-down")) {
    container.classList.add("navbar-visible");
  } else {
    container.classList.remove("navbar-visible");
  }
}

// Sets classes relating to Sticky Price Bar
function showStickyPriceBar(bar, container) {
  var position = window.pageYOffset;

  if (position >= 800) {
    bar.classList.remove('top');
    container.classList.add('price-bar-visible');
  } else {
    bar.classList.add('top');
    container.classList.remove('price-bar-visible');
  }
}

// Throttle scrolling
function throttle(fn, wait) {
  var time = Date.now();
  return function() {
    if ((time + wait - Date.now()) < 0) {
      fn();
      time = Date.now();
    }
  }
}

function scroller() {
  var body = document.querySelector('body');
  var navbar = document.querySelector('.navbar.fixed-top');
  var stickyBar = document.querySelector('.sticky-price-bar');

  var y = '';
  var currPosition = window.pageYOffset; // Get current position
  var currentWidth = window.innerWidth; // Show scrollbar if user goes from desktop => mobile width

  if(!navbar) {
    return;
  }

  // Update y to reflect current scroll direction
  if (currPosition > lastPosition) {
    y = 'down';
  } else if (currPosition < lastPosition) {
    y = 'up';
  } else {
    y = 'none';
  }

  // Add/Remove 'scrolling' based on scroll position
  if (currPosition >= 30 || currentWidth !== lastWidth) {
    navbar.classList.add('scrolling');
  } else {
    navbar.classList.remove('scrolling');
  }

  // Add/Remove 'scroll-down' based on scroll position
  if (currPosition >= 250) {
    if (y === 'down') {
      navbar.classList.add('scroll-down');
    } else {
      navbar.classList.remove('scroll-down');
    }
  }

  // Fix issue navbar disappearing when going from desktop => mobile width
  if (currPosition === 0 || currentWidth !== lastWidth) {
    navbar.classList.remove('scroll-down');
  }

  if (stickyBar) {
    showStickyPriceBar(stickyBar, body);
  }

  navVisible(navbar, body);
  lastPosition = currPosition;
  lastWidth = currentWidth;
}

var ready = function(callback) {
  if (document.readyState !== "loading") callback();
  else document.addEventListener("DOMContentLoaded", callback);
}

ready(function() {
  // Do not hide on scroll on certain pages
  var stickyBar = document.querySelector('.search-sticky-header');
  if (stickyBar) return;

  // Attach throttled scroller to scroll event listener
  window.addEventListener('scroll', throttle(function() { scroller() }, 25));

  // Set '.navbar-visible' on page load
  var body = document.querySelector('body');
  var navbar = document.querySelector('.navbar.fixed-top');

  if (!navbar) {
      return;
  }

  navVisible(navbar, body);
});
