<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>UMER | Website CMS Admin Panel</title>
<!-- plugins:css -->
<link rel="stylesheet" href="{{ static_asset('assets/backend/vendors/feather/feather.css') }}">
<link rel="stylesheet" href="{{ static_asset('assets/backend/vendors/ti-icons/css/themify-icons.css') }}">
<link rel="stylesheet" href="{{ static_asset('assets/backend/vendors/css/vendor.bundle.base.css') }}">
<!-- endinject --> 
<meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- Plugin css for this page -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ static_asset('assets/backend/vendors/dropify/dropify.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ static_asset('assets/backend/vendors/jquery-file-upload/uploadfile.css') }}">
<link rel="stylesheet" href="{{ static_asset('assets/backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
<link rel="stylesheet" href="{{ static_asset('assets/backend/vendors/jquery-tags-input/jquery.tagsinput.min.css') }}">
<link rel="stylesheet" href="{{ static_asset('assets/backend/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css') }}">



{{-- <link rel="stylesheet" type="text/css" href="{{ static_asset('assets/backend/js/select.dataTables.min.css') }}"> --}}
<!-- End plugin css for this page -->
<!-- inject:css -->
<link rel="stylesheet" href="{{ static_asset('assets/backend/css/vertical-layout-light/style.css') }}">
<!-- endinject -->
{{-- <link rel="shortcut icon" href="{{ static_asset(get_favicon_icon()) }}" />--}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script> --}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
{{-- select 2 --}}
<link href="{{ static_asset('assets/backend/css/select2.min.css') }}" rel="stylesheet" />
<link href="{{ static_asset('assets/backend/css/style.css') }}" rel="stylesheet" />
<!-- include summernote css/js -->

@toastr_css

@stack('style')
