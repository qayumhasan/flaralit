// Constants
var className = 'display-dropdown';
var iconSearchClass = 'fa-search';
var iconTimesClass = 'fa-times';

// Create class to help keep track of dropdown variables
class InputHelperClass {
  constructor() {
    this.currentIndex = -1;
    this.previousIndex = -1;
    this.input = '';
    this.options = [];
    this.categories = [];
    this.productType = null;
  }

  get(type) {
    switch (type) {
      case 'currentIndex':
        return this.currentIndex;
      case 'currentOption':
        if (this.currentIndex === this.get('optionsLength')) {
          return this.input;
        }

        return (this.options && this.options[this.currentIndex] && this.options[this.currentIndex].public_name) || '';
      case 'input':
        return this.input;
      case 'options':
        return this.options;
      case 'categories':
        return this.categories;
      case 'optionsLength':
        return (this.options && this.options.length) || 0;
      case 'previousIndex':
        return this.previousIndex;
      case 'productType':
        return this.productType;
      default:
        return null;
    }
  }

  set(type, value) {
    switch (type) {
      case 'currentIndex':
        this.previousIndex = this.currentIndex;
        this.currentIndex = value;
        break;
      case 'input':
        this.input = value;
        break;
      case 'options':
        this.resetIndex();
        this.options = value;
        break;
      case 'categories':
        this.categories = value;
        break;
      case 'productType':
        this.productType = value;
        break;
      default:
        break;
    }
  }

  showInput() {
    return this.currentIndex === this.get('optionsLength')
  }

  increment() {
    var index = (this.currentIndex < this.get('optionsLength'))
      ? this.currentIndex + 1
      : 0;

    this.set('currentIndex', index);
  }

  decrement() {
    var index = (this.currentIndex < 1)
      ? this.get('optionsLength')
      : this.currentIndex - 1;

    this.set('currentIndex', index);
  }

  resetIndex() {
    this.currentIndex = -1;
    this.previousIndex = -1;
  }
}

var InputHelper = new InputHelperClass();

// Helper functions (legacy support IE/Edge)
function findAncestor (el, sel) {
  while ((el = el.parentElement) && !((el.matches || el.matchesSelector).call(el,sel)));
  return el;
}

// Search based functions
function toggleSearch (e) {
  e.preventDefault();

  var elem = document.querySelector('.search-container-mobile');
  var smMargin = document.querySelector('.sumo-search-alter-margin-sm');
  var lgMargin = document.querySelector('.sumo-search-alter-margin-lg');
  var marginClassElem;
  var marginClass = 'search-toggle-margin';

  if (elem) {
    if (elem.classList.contains("show-search")) {
      elem.classList.remove("show-search");
    } else {
      elem.classList.add('show-search');
    }
  }

  // Add margins for django templates
  if (smMargin) {
    marginClassElem = smMargin;
    marginClass += '-sm';

  } else if (lgMargin) {
    marginClassElem = lgMargin;
    marginClass += '-lg'
  }

  if (marginClassElem) {
    if (marginClassElem.classList.contains(marginClass)) {
      marginClassElem.classList.remove(marginClass);
    } else {
      marginClassElem.classList.add(marginClass);
    }
  }
}

function showSearch(e) {
  var value = (e.target.value || '').trim()
  var parentEl = e.target.parentNode;
  var dropdownEl = parentEl.querySelector('.search-dropdown')
  var buttonIconEl = parentEl.querySelector('i');

  if (!dropdownEl) return;

  if (!value.length && !dropdownEl.classList.contains(className)) {
    dropdownEl.classList.add(className);
    buttonIconEl.classList.add(iconSearchClass);
    buttonIconEl.classList.remove(iconTimesClass);
  } else {
    dropdownEl.classList.remove(className);
    buttonIconEl.classList.remove(iconSearchClass);
    buttonIconEl.classList.add(iconTimesClass);
  }
}

function submitSearch(e) {
  var parentEl = e.currentTarget.parentNode;
  var input = parentEl.querySelector('input[type="text"]');
  var dropdownEl = parentEl.querySelector('.search-dropdown');
  var buttonIconEl = e.currentTarget.querySelector('i');

  if (input && input.value) {
    input.value = '';
    dropdownEl.classList.add(className);
    buttonIconEl.classList.add(iconSearchClass);
    buttonIconEl.classList.remove(iconTimesClass);
  } else {
    // Go to search page if clicking magnifying glass
    var formEl = parentEl.parentNode;
    if (formEl) formEl.submit();
  }
}

// TODO - REMOVE feature flag search_autocomplete (alternate button functionality)
function ldSearchSubmit(e) {
  var parentEl = e.currentTarget.parentNode;
  var formEl = parentEl.parentNode;
  if (formEl) formEl.submit();
}

function onClickSearchItem(e) {
  if (
    e.target === this
    || !this.contains(e.target)
    || e.target.classList.contains('dropdown-title')
  ) {
    return;
  }

  var query = InputHelper.get('input');
  var searchItem = e.target.classList.contains('search-item') ? e.target : e.target.closest('.search-item');
  var el = searchItem.querySelector('span');
  var term = (el.textContent || '').trim();
  var slug = el.getAttribute('data-slug');

  if (slug) {
    window.location = `/products/${slug}?query=${encodeURIComponent(query || term)}`;
    return;
  }

  var formElem = findAncestor(el, 'form');
  var containerElem = formElem.querySelector('.search-form-container');

  // Set input
  containerElem.querySelector('input[type="text"]').value = term;

  // Submit form
  formElem.submit()
}

function createSearchElement(deal) {
  const containerEl = document.createElement('div');
  containerEl.classList.add('search-item');

  const value = deal.public_name;
  const imgEl = document.createElement('img');
  imgEl.src = chartLineSrc; // chartLineSrc should already exist in base.html
  imgEl.width = 18;
  imgEl.height = 18;
  imgEl.classList.add('mr-2');

  var query = InputHelper.get('input');
  var length = query && query.length;
  var optionEl = document.createElement('span');
  optionEl.setAttribute('data-slug', deal.slug);

  if (length) {
    const startIndex = value.toLowerCase().indexOf(query.toLowerCase());

    if (startIndex < 0) {
      optionEl.innerHTML = value;
    } else {
      const highlightEl = document.createElement('span');
      const endIndex = startIndex + length;
      const highlight = value.substring(startIndex, endIndex);
      const prefix = startIndex ? value.substring(0, startIndex) : '';
      const suffix = (length !== value.length) ? value.substring(endIndex, value.length) : '';

      highlightEl.classList.add('highlight-bold');
      highlightEl.innerHTML = highlight;

      optionEl.append(prefix);
      optionEl.append(highlightEl);
      optionEl.append(suffix);
    }
  } else {
    optionEl.innerHTML = value;
  }

  containerEl.appendChild(imgEl);
  containerEl.appendChild(optionEl);
  return containerEl;
}

function onKeyDown(e) {
  if (!InputHelper.get('optionsLength')) return;

  if (e.keyCode === 40) {
    InputHelper.increment();
  } else if (e.keyCode === 38) {
    InputHelper.decrement();
  }

  // Remove highlight from previous option and update to new one
  var formElems = document.querySelectorAll('.search-options-container');
  var prevIndex = InputHelper.get('previousIndex');
  var currentIndex = InputHelper.get('currentIndex');

  formElems.forEach((el) => {
    if (el && el.childNodes && el.childNodes[prevIndex]) {
      el.childNodes[prevIndex].classList.remove('highlight');
    }

    if (el && el.childNodes && el.childNodes[currentIndex]) {
      el.childNodes[currentIndex].classList.add('highlight');
    }
  });

  // Update input fields to match option
  if (e.keyCode === 40 || e.keyCode === 38) {
    var currentOption = InputHelper.get('currentOption');
  
    document.getElementById('search-desktop').value = currentOption;
    document.getElementById('search-mobile').value = currentOption;
  }
}

// Move cursor to end of input when pressing "up"
function onKeyUp(e) {
  if (e.keyCode === 38) {
    document.getElementById('search-desktop').selectionStart = 255;
    document.getElementById('search-mobile').selectionStart = 255;
  }
}

function updateSearchOptions (data = []) {
  var emptyInputTitle = 'Top Searches';
  var inputTitle = 'Suggested Searches';

  InputHelper.set('options', data);
  var dropdownEl = document.querySelector('.search-dropdown');

  if (!dropdownEl) return;

  var isVisible = dropdownEl.classList.contains('display-dropdown');

  if (!data.length && isVisible) {
    if (dropdownEl) {
      dropdownEl.classList.remove(className);
      return;
    }
  } else if (data.length && !isVisible) {
    dropdownEl.classList.add(className);
  }

  // Update title
  const input = InputHelper.get('input');
  var titleElems = document.querySelectorAll('.search-dropdown-title');
  var text = titleElems
    && titleElems.length
    && titleElems[0].textContent.trim();

  if (!(input && input.length) && text === inputTitle) {
    titleElems.forEach((el) => { el.innerHTML = emptyInputTitle });
  } else if (input && input.length && text === emptyInputTitle) {
    titleElems.forEach((el) => { el.innerHTML = inputTitle });
  }

  var formElems = document.querySelectorAll('.search-options-container');

  if (!(formElems && formElems.length)) return;

  var docFrag = document.createDocumentFragment();

  data.forEach((option) => {
    docFrag.appendChild(createSearchElement(option));
  });

  // Add data to dropdowns
  formElems.forEach((el) => {
    // Remove all existing results
    while (el.hasChildNodes()) {
      el.removeChild(el.lastChild);
    }
    // Add new nodes
   el.appendChild(docFrag.cloneNode(true))
  });
}

function fetchCategories () {
  var categories = InputHelper.get('categories');

  if (categories.length) return;

  var apiUrl = '/api/categories/?min_doc_count=3';

  if (fetch) {
    // If fetch is supported, then promises are too
    fetch(apiUrl, {
      method: 'GET',
    })
    .then(response => response.json())
    .then(function(data) {
      InputHelper.set('categories', data);
    })
    .catch(() => {
      // noop
    });
  } else if ($ && $.ajax) {
    $.ajax(apiUrl, {
      complete: function(jqXHR) {
        jqXHR.done(function(data) {
          InputHelper.set('categories', data);
        });
      },
    })
  }
}

function fetchResults (e = {}) {
  var productType = InputHelper.get('productType');
  var query = ((e.target && e.target.value) || '').trim()
  var apiUrl = '/api/v2/deals/esbrowse/?status=current&sort=recommended&toptrending=1&per_page=5';

  if (query && query.length) {
    var categories = InputHelper.get('categories');
    var lowerQuery = query.toLowerCase();
    var category = categories.find(function(c) {
      return c.name.toLowerCase().localeCompare(lowerQuery) === 0;
    });

    if (category) {
      apiUrl = `/api/v2/deals/esbrowse/?status=all&sort=recommended&product_tags[all]=${category.slug}&per_page=5&autocomplete=1`;
    } else {
      apiUrl = `/api/v2/deals/esbrowse/?status=all&sort=recommended&query=${query}&per_page=5&autocomplete=1`;
    }
  }

  if (productType) {
    apiUrl += `&attribute[product_type]=${productType}`;
  }

  InputHelper.set('input', query);

  if (fetch) {
    // If fetch is supported, then promises are too
    fetch(apiUrl, {
      method: 'GET',
    })
    .then(response => response.json())
    .then(function(data) {
      InputHelper.set('options', data.deals);
      updateSearchOptions(data.deals);
    })
    .catch(() => {
      // noop
    });
  } else if ($ && $.ajax) {
    $.ajax(apiUrl, {
      complete: function(jqXHR) {
        jqXHR.done(function(data) {
          InputHelper.set('options', data.deals);
          updateSearchOptions(data.deals);
        });
      },
    })
  }
}

var ready = function(callback) {
  if (document.readyState !== "loading") callback();
  else document.addEventListener("DOMContentLoaded", callback);
}

ready(function() {
  // Verify that elements exist before attaching event listeners
  var navSearchIcon = document.querySelector('.nav-search-icon');
  var searchDesktop = document.getElementById('search-desktop');
  var searchMobile = document.getElementById('search-mobile');

  // TODO - REMOVE feature flag search_autocomplete
  var searchAutoElems = document.querySelectorAll('.exp-search-auto')

  // Fetch initial top searches
  fetchResults();

  if (navSearchIcon) navSearchIcon.addEventListener('click', toggleSearch, false);

  if (searchAutoElems && searchAutoElems.length) {
    searchAutoElems.forEach((el) => {
      el.addEventListener('input', fetchResults, false);
      el.addEventListener('focus', fetchCategories, false);
      el.addEventListener('keydown', onKeyDown, false);
      el.addEventListener('keyup', onKeyUp, false);

      var form = findAncestor(el, 'form');
      if (form) {
        var type = form.querySelector('input[name="product_type"]');
        if (type) {
          MutationObserver = window.MutationObserver || window.WebKitMutationObserver;

          if (MutationObserver) {
            var observer = new MutationObserver(function(mutations, observer) {
              if (mutations[0].attributeName == "value") {
                InputHelper.set('productType', mutations[0].target.value);

                var input = form.querySelector('input[name="query"]');
                fetchResults({
                  target: input
                });
              }
            });
            observer.observe(type, {
              attributes: true
            });
          }
        }
      }
    });
  }

  // Re-populate search field if they use the back button
  window.addEventListener('pageshow', () => {
    var currentOption = InputHelper.get('currentOption');

    if (searchDesktop) {
      searchDesktop.value = currentOption;
    }

    if (searchMobile) {
      searchMobile.value = currentOption;
    }
  });

  // Listen mobile and desktop search button clicks
  /*
  var searchButtons = document.querySelectorAll('.search-submit')
  for (var i = 0; i < searchButtons.length; i += 1) {
    if (searchButtons[i]) {
      searchButtons[i].addEventListener('click', submitSearch, false);
    }
  }
  */

  // TODO - REMOVE feature flag search_autocomplete (alternate button functionality)
  /*
  var searchButtons = document.querySelectorAll('.ld-search-submit')
  for (var i = 0; i < searchButtons.length; i += 1) {
    if (searchButtons[i]) {
      searchButtons[i].addEventListener('click', ldSearchSubmit, false);
    }
  }
  */

  // Listen for dynamically added search elements
  var searchContents = document.querySelectorAll('.search-dropdown-contents')
  for (var i = 0; i < searchContents.length; i += 1) {
    searchContents[i].addEventListener('click', onClickSearchItem, false);
  }
});
