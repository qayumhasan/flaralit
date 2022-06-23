/* Project specific Javascript goes here. */

/*
Formatting hack to get around crispy-forms unfortunate hardcoding
in helpers.FormHelper:

    if template_pack == 'bootstrap4':
        grid_colum_matcher = re.compile('\w*col-(xs|sm|md|lg|xl)-\d+\w*')
        using_grid_layout = (grid_colum_matcher.match(self.label_class) or
                             grid_colum_matcher.match(self.field_class))
        if using_grid_layout:
            items['using_grid_layout'] = True

Issues with the above approach:

1. Fragile: Assumes Bootstrap 4's API doesn't change (it does)
2. Unforgiving: Doesn't allow for any variation in template design
3. Really Unforgiving: No way to override this behavior
4. Undocumented: No mention in the documentation, or it's too hard for me to find
*/
$('.form-group').removeClass('row');

// Animations init
new WOW().init();

// init tooltips
$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});


// setup ajax
function getCookie(name) {
    var cookieValues = [];
    if (document.cookie && document.cookie !== '') {
        var cookies = document.cookie.split(';');
        for (var i = 0; i < cookies.length; i++) {
            var cookie = jQuery.trim(cookies[i]);
            // Does this cookie string begin with the name we want?
            if (cookie.substring(0, name.length + 1) === (name + '=')) {
                cookieValues.push(decodeURIComponent(cookie.substring(name.length + 1)));
            }
        }
        var cookieValue = "";
        for (var i = 0; i < cookieValues.length; i++){
            if (cookieValues[i].length > cookieValue.length) {
                cookieValue = cookieValues[i];
            }
        }
    }
    return cookieValue;
}
var csrftoken = getCookie('csrftoken');
function csrfSafeMethod(method) {
    // these HTTP methods do not require CSRF protection
    return (/^(GET|HEAD|OPTIONS|TRACE)$/.test(method));
}
$.ajaxSetup({beforeSend: function(xhr, settings) {
        if (!csrfSafeMethod(settings.type) && !this.crossDomain) {
            xhr.setRequestHeader("X-CSRFToken", csrftoken);
        }
    }
});

// make AJAX call
function makeAjaxCall(type, url, data, callback, error, timeout, timeoutCallback) {
  return $.ajax({
    url: url,
    method: type,
    data: data,
    success: callback,
    error: error,
    timeout: timeout || 10000,
  });
}

$(function () {
    $(document).on('click', '.btn-single-submit', function(e) {
        e.preventDefault();
        var submit = $(this);
        submit.attr('disabled', 'disabled');
        submit.html('<i class="fas fa-spinner mr-2 fa-spin"></i>Processing');
        submit.closest('form').submit();
    })
});

// Switch Between Touch / Mouse Versions of the Navbar Dropdown
function is_touch_enabled() {
    if (( 'ontouchstart' in window ) || ( navigator.maxTouchPoints > 0 ) || ( navigator.msMaxTouchPoints > 0 )) {
        return true;
    } else {
        return false;
    }
}

function initCarousel() {
    // unhide all cells
    [].forEach.call(document.querySelectorAll('.deal-carousel .carousel-cell'), function (el) {
        el.style.display = 'block';
    });

    var el = document.querySelector('.deal-carousel');


    if (el) {
        new Flickity(el, {
            cellAlign: 'center',
            contain: false,
            autoPlay: 7000,
            wrapAround: true,
            dragThreshold: 1,
            friction: 0.8,
            selectedAttraction: .2,
            arrowShape: 'M66.51 0.58C67.35 -0.21 68.66 -0.19 69.45 0.62C70.22 1.44 70.22 2.71 69.45 3.52C66.36 6.61 50.87 22.1 23.01 49.96C50.87 77.84 66.36 93.33 69.45 96.42C70.29 97.22 70.31 98.55 69.49 99.36C68.7 100.2 67.37 100.22 66.56 99.4C66.54 99.38 66.51 99.36 66.51 99.36C61.72 94.57 23.38 56.23 18.59 51.44C17.78 50.63 17.78 49.31 18.59 48.5C28.18 38.92 61.72 5.37 66.51 0.58Z'
        });
    }
}

function initHoverMenu() {
    var dropdownToggle = $("header .navbar .account.dropdown .dropdown-toggle, header .navbar .browse.dropdown .dropdown-toggle:visible");
    if ( is_touch_enabled() ) {
        dropdownToggle.attr( "data-toggle", "dropdown" );
        dropdownToggle.attr( "role", "button" );
        dropdownToggle.attr( "aria-haspopup", true );
        dropdownToggle.attr( "aria-expanded", false );
        dropdownToggle.closest(".dropdown").removeClass("hover-drop");
    } else {
        dropdownToggle.attr( "data-toggle", "" );
        dropdownToggle.attr( "role", "" );
        dropdownToggle.attr( "aria-haspopup", "" );
        dropdownToggle.attr( "aria-expanded", "" );
        dropdownToggle.closest(".dropdown").addClass("hover-drop");
    }
}

function initSearchDropdown() {
    var types = {
        all: 'All',
        software: 'Software',
        courses: 'Courses',
        'creative-assets': 'Creative assets',
        'ebooks-pdfs': 'eBooks & PDFs',
        templates: 'Templates',
        'services-goods': 'Services & goods',
    };

    $('.search-form-container .product-type').click(function () {
        var $el = $(this);
        var open = $el.hasClass('open');
        var $portal = $el.next('.dropdown-portal');
        var $menu = $portal.next('.dropdown-menu');

        var closeMenu = function () {
            $el.removeClass('open');
            $portal.removeClass('open');
            $menu.removeClass('open');
        }

        if (open) {
            closeMenu();
        } else {
            $el.addClass('open');
            $portal.addClass('open');
            $menu.addClass('open');
            $portal.click(closeMenu);
            $menu.on('click', 'a', function () {
                var productType = $(this).data('product-type');

                $el.find('input[name="product_type"]').val(productType === 'all' ? '' : productType);
                $el.find('input[name="product_type"]').prop('disabled', productType === 'all');
                $el.find('input[name="product_type"]').trigger('change');
                $el.find('span').text(types[productType]);
                closeMenu();
            });
        }
    });
}

$(document).ready(function () {
    initHoverMenu();
    initCarousel();
    initSearchDropdown();

    $(window).resize(throttle(initHoverMenu, 500));
});

// polyfill Object.entries
if (!Object.entries) {
  Object.entries = function( obj ){
    var ownProps = Object.keys( obj ),
        i = ownProps.length,
        resArray = new Array(i); // preallocate the Array
    while (i--)
      resArray[i] = [ownProps[i], obj[ownProps[i]]];

    return resArray;
  };
}

function convertBooleanFromPython(variable) {
    return variable === 'True';
}

function setNextParams(form, prevUrl, hiddenInputName) {
    window.history.replaceState(null, null, `?next=${prevUrl}`);

    // Append a hidden input to the form for django to redirect properly
    const hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', hiddenInputName);
    hiddenInput.setAttribute('value', prevUrl);
    form.appendChild(hiddenInput);

    // Update google login button if found
    const google_login_url = `/accounts/google/login?process=signup&next=${prevUrl}`;
    const gl = document.querySelector('#google-login-top');
    if (gl) {
        gl.setAttribute('href', google_login_url)
    }

    // Update google signup button if found
    const gs = document.querySelector('#google-signup-top');
    if (gs) {
        gs.setAttribute('href', google_login_url)
    }

    // Update google one-tap tag if found
    const el = document.querySelector('#g_id_onload');
    if (el) {
      el.setAttribute('data-redirect_uri', prevUrl);
    }
}

// Append the "next" query param to the current query string if it's not there yet,
// "next" is set based on the current document.referrer if any, a hidden input is also
// appended to the passed form for Django to redirect properly (mostly used in login and sign up pages).
function appendNextQueryParam(form, hiddenInputName = 'next') {
    const urlSearchParams = new URLSearchParams(window.location.search);

    if (!urlSearchParams.get('next')) {
        const referrerChunks = document.referrer.split('appsumo.com');
        const prevUrl = referrerChunks[1];
        const prevNextParam = prevUrl ? prevUrl.includes('?next=') : '';

        const omittedUrls = [
            '/',
            '/accounts/login/',
            '/accounts/signup/',
            '/accounts/password/reset/'
        ];
        // User landed to this page via another appsumo.com page other than the ones we want to omit
        if (prevUrl && !omittedUrls.includes(prevUrl) && !prevNextParam) {
            // Add "next" to the current query string
            setNextParams(form, prevUrl, hiddenInputName);
        } else if (prevUrl && prevNextParam
            && (prevUrl.includes('/accounts/login/') || prevUrl.includes('/accounts/signup/'))) {
            // failed login
            prevUrlSearchParams = new URLSearchParams(document.referrer.split('?')[1] || '');
            if (prevUrlSearchParams.get('next')) {
                setNextParams(form, prevUrlSearchParams.get('next'), hiddenInputName);
            }
        }
    }
}

function appendUTMParams() {
    const utm_params = ['utm_source', 'utm_medium', 'utm_campaign']
    const urlSearchParameters = new URLSearchParams(window.location.search);
    var queryString = '?';

    utm_params.forEach(function(param) {
        value = urlSearchParameters.get(param);
        if (value) {
            queryString += `${param}=${value}&`;
        }
    });

    if(urlSearchParameters.get('next')){
        queryString += `next=${urlSearchParameters.get('next')}`;
    }

    window.history.replaceState(null, null, `${queryString}`);

}
