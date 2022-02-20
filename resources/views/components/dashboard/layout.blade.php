<x-layout :title="$title">
    <x-slot:css>
        <!-- Plugins:css -->
        <link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
        <!--End inject -->

        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="{{asset('vendors/jvectormap/jquery-jvectormap.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/flag-icon-css/css/flag-icon.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/owl-carousel-2/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/owl-carousel-2/owl.theme.default.min.css')}}">
        <!-- End plugin css for this page -->

        <!-- Layout styles -->
        <link rel="stylesheet" href="{{asset('css/dashboard/app.css')}}">
    </x-slot>

   <div class="container-scroller">
       @auth
            <x-dashboard.sidebar />
       @endauth

       <div class="container-fluid page-body-wrapper@guest full-page-wrapper@endguest">
           {{ $slot }}
       </div>
   </div>

    <x-slot:js>
        <!-- plugins:js -->
        <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
        <!-- End inject -->

        <!-- Plugin js for this page -->
        <script src="{{asset('vendors/chart.js/Chart.min.js')}}"></script>
        <script src="{{asset('vendors/progressbar.js/progressbar.min.js')}}"></script>
        <script src="{{asset('vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
        <script src="{{asset('vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{asset('vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
        <script src="{{asset('vendors/select2/select2.min.js')}}"></script>
        <script src="{{asset('vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
        <!-- End plugin js for this page -->

        <!-- inject:js -->
        <script src="{{asset('js/dashboard/off-canvas.js')}}"></script>
        <script src="{{asset('js/dashboard/hoverable-collapse.js')}}"></script>
        <script src="{{asset('js/dashboard/misc.js')}}"></script>
        <script src="{{asset('js/dashboard/settings.js')}}"></script>
        <script src="{{asset('js/dashboard/todolist.js')}}"></script>
        <!-- End inject -->

        <!-- Custom js for this page -->
        <script src="{{asset('js/dashboard/dashboard.js')}}"></script>
        <script src="{{asset('js/dashboard/file-upload.js')}}"></script>
        <script src="{{asset('js/dashboard/typeahead.js')}}"></script>
        <!-- End custom js for this page -->
    </x-slot>
</x-layout>
