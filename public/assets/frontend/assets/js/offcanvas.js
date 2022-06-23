'use strict'

function notOffcanvas(target) {
  return !target.closest('#offcanvas-collapse');
}

function notToggler(target) {
  var togglerEl =  document.getElementById('offcanvas-toggler');
  return !(target === togglerEl || target.parentElement === togglerEl);
}

var ready = function(callback) {
  if (document.readyState !== "loading") callback();
  else document.addEventListener("DOMContentLoaded", callback);
}

ready(function() { 
  var offCanvasList = document.querySelectorAll('[data-toggle="offcanvas"]') || [];
  offCanvasList.forEach(function (el) {
    el.addEventListener('click', function (e) { 
      document.querySelector('.offcanvas-collapse').classList.toggle('open');
      document.querySelector('body').classList.toggle('offcanvas-open');
    });
  });

  var subMenuOpen = document.querySelectorAll('[sub-menu-open="offcanvas-sub-menu"]') || [];
  subMenuOpen.forEach(function (el) {
    el.addEventListener('click', function (e) { 
      e.preventDefault();
      el.parentElement.querySelector('.offcanvas-sub-menu').classList.add('open');
      document.querySelector('.offcanvas-collapse').classList.add('sub-open');
    });
  });

  var subMenuClose = document.querySelectorAll('[sub-menu-close="offcanvas-sub-menu"]') || [];
  subMenuClose.forEach(function (el) {
    el.addEventListener('click', function (e) { 
      e.preventDefault();
      var offCanvasSubMenu = document.querySelectorAll('.offcanvas-collapse .offcanvas-sub-menu') || [];
      offCanvasSubMenu.forEach(function(ele) {
        ele.classList.remove('open')
      });

      document.querySelector('.offcanvas-collapse').classList.remove('sub-open');
    });
  });

  document.addEventListener('click', function (e) {
    if (notOffcanvas(e.target) && notToggler(e.target)) {
        var offcanvasCollapse = document.getElementById('offcanvas-collapse');

        if (offcanvasCollapse) { // Element doesn't always exist
          offcanvasCollapse.classList.remove('open');
        }

        document.querySelector('body').classList.remove('offcanvas-open');
    }
  });
});
