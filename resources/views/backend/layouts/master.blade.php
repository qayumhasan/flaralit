<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.layouts._head')
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
@include('backend.layouts._header')
<!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
    {{-- @include('backend.layouts._settings_panel') --}}
    <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
    @include('backend.layouts.sidebar')
    <!-- partial -->
        @yield('content')
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
@include('backend.layouts.footer')
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

@include('backend.layouts._scripts')

</body>

</html>

