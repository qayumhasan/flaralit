@jquery
@toastr_js
@toastr_render
<!-- plugins:js -->
<script src="{{ static_asset('assets/backend/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ static_asset('assets/backend/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ static_asset('assets/backend/vendors/dropify/dropify.min.js') }}"></script>
<script src="{{ static_asset('assets/backend/vendors/jquery-file-upload/jquery.uploadfile.min.js') }}"></script>
<script src="{{ static_asset('assets/backend/vendors/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ static_asset('assets/backend/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
<script src="{{ static_asset('assets/backend/js/dataTables.select.min.js') }}"></script>
<script src="{{ static_asset('assets/backend/vendors/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
<script src="{{ static_asset('assets/backend/vendors/inputmask/jquery.inputmask.bundle.js') }}"></script>
<script src="{{ static_asset('assets/backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ static_asset('assets/backend/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.js')}}"></script>
<script src="{{ static_asset('assets/backend/vendors/moment/moment.min.js') }}"></script>



<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ static_asset('assets/backend/js/off-canvas.js') }}"></script>
<script src="{{ static_asset('assets/backend/js/hoverable-collapse.js') }}"></script>
<script src="{{ static_asset('assets/backend/js/template.js') }}"></script>
<script src="{{ static_asset('assets/backend/js/settings.js') }}"></script>
<script src="{{ static_asset('assets/backend/js/todolist.js') }}"></script>
<script src="{{ static_asset('assets/backend/js/dropify.js') }}"></script>
<script src="{{ static_asset('assets/backend/js/jquery-file-upload.js') }}"></script>
<script src="{{ static_asset('assets/backend/js/data-table.js') }}"></script>
<script src="{{ static_asset('assets/backend/js/tooltips.js') }}"></script>
<script src="{{ static_asset('assets/backend/js/formpickers.js') }}"></script>
<script src="{{ static_asset('assets/backend/js/form-repeater.js') }}"></script>
<script src="{{ static_asset('assets/backend/js/inputmask.js') }}"></script>
<script src="{{ static_asset('assets/backend/js/form-addons.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ static_asset('assets/backend/js/dashboard.js') }}"></script>
<script src="{{ static_asset('assets/backend/js/Chart.roundedBarCharts.js') }}"></script>
<!-- End custom js for this page-->

<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>

@include('backend.script')
@stack('script')
@include('sweet::alert')

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>

    $(document).ready(function() {
        $('.select_2').select2();

        $('.summernote').summernote({
            height: 150,
        });
    });

    function format (state) {
        if (!state.id) { return state.text; }
        return '<i class="fa fa-lg '+state.id.toLowerCase()+'"></i> '+state.text;
    }

    $('.select_2_with_icon').select2({
        formatResult: format,
        formatSelection: format,
        escapeMarkup: function(m) { return m; }
    });

</script>
