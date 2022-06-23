(function ($) {
  'use strict';
  // if ($("#timepicker-example").length) {
  //   $('#timepicker-example').datetimepicker({
  //     format: 'LT'
  //   });
  // }

  // if ($("#timepicker-example-2").length) {
  //   $('#timepicker-example-2').datetimepicker({
  //     format: 'LT'
  //   });
  // }

  // if ($("#datepicker-popup").length) {
  //   $('#datepicker-popup').datepicker({
  //     enableOnReadonly: true,
  //     todayHighlight: true,
  //     autoclose: true
  //   });
  // }

  if ($(".color-picker").length) {
    $('.color-picker').asColorPicker();
  }

  if ($("#inline-datepicker").length) {
    $('#inline-datepicker').datepicker({
      enableOnReadonly: true,
      todayHighlight: true,
    });
  }
  if ($(".datepicker-autoclose").length) {
    $('.datepicker-autoclose').datepicker({
      autoclose: true
    });
  }
  if ($('input[name="date-range"]').length) {
    $('input[name="date-range"]').daterangepicker();
  }
  if ($('.input-daterange').length) {
    $('.input-daterange input').each(function () {
      $(this).datepicker('clearDates');
    });
    $('.input-daterange').datepicker({});
  }
})(jQuery);