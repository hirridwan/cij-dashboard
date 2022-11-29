<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>NobleUI Responsive Bootstrap 4 Dashboard Template</title>
	<!-- core:css -->
	<link rel="stylesheet" href="{{asset('vendors/core/core.css')}}">
	<!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
	
  <link rel="stylesheet" href="{{asset('vendors/select2/select2.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/jquery-tags-input/jquery.tagsinput.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/dropzone/dropzone.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/dropify/dist/dropify.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css')}}">

  <link rel="stylesheet" href="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">

  <!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="{{asset('fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="{{asset('css/demo_1/style.css')}}">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
  @stack('page_specified_css')
  <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js')}}"></script>
</head>
@livewireStyles
<body>
  <div class="main-wrapper">
    <!-- partial:partials/_navbar.html -->
    @livewire('app.component.sidebar')
    <!-- partial -->
    <div class="page-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @livewire('app.component.navbar')
      <!-- partial -->
        <div class="page-content">
          @yield('content')
        </div>
        <!-- content-wrapper ends -->

        <!-- partial:partials/_footer.html -->
        @livewire('app.component.footer')
        <!-- partial -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  @livewireScripts
  <!-- core:js -->
	<script src="{{asset('vendors/core/core.js')}}"></script>
	<!-- endinject -->
  <!-- plugin js for this page -->
  <script src="{{asset('vendors/chartjs/Chart.min.js')}}"></script>
  <script src="{{asset('vendors/jquery.flot/jquery.flot.js')}}"></script>
  <script src="{{asset('vendors/jquery.flot/jquery.flot.resize.js')}}"></script>
  <script src="{{asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('vendors/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('vendors/progressbar.js/progressbar.min.js')}}"></script>

  <script src="{{asset('vendors/jquery-validation/jquery.validate.min.js')}}"></script>
	<script src="{{asset('vendors/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
	<script src="{{asset('vendors/inputmask/jquery.inputmask.min.js')}}"></script>
	<script src="{{asset('vendors/select2/select2.min.js')}}"></script>
	<script src="{{asset('vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
	<script src="{{asset('vendors/jquery-tags-input/jquery.tagsinput.min.js')}}"></script>
	<script src="{{asset('vendors/dropzone/dropzone.min.js')}}"></script>
	<script src="{{asset('vendors/dropify/dist/dropify.min.js')}}"></script>
	<script src="{{asset('vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.js')}}"></script>
	<script src="{{asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
	<script src="{{asset('vendors/moment/moment.min.js')}}"></script>
	<script src="{{asset('vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.js')}}"></script>

	<script src="{{asset('vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  
  <!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="{{asset('vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('js/template.js')}}"></script>
	<!-- endinject -->
  <!-- custom js for this page -->
  <script src="{{asset('js/dashboard.js')}}"></script>
  <script src="{{asset('js/datepicker.js')}}"></script>

  <script src="{{asset('js/form-validation.js')}}"></script>
	<script src="{{asset('js/bootstrap-maxlength.js')}}"></script>
	<script src="{{asset('js/inputmask.js')}}"></script>
	<script src="{{asset('js/select2.js')}}"></script>
	<script src="{{asset('js/typeahead.js')}}"></script>
	<script src="{{asset('js/tags-input.js')}}"></script>
	<script src="{{asset('js/dropzone.js')}}"></script>
	<script src="{{asset('js/dropify.js')}}"></script>
	<script src="{{asset('js/bootstrap-colorpicker.js')}}"></script>
	<script src="{{asset('js/datepicker.js')}}"></script>
	<script src="{{asset('js/timepicker.js')}}"></script>

  <script src="{{asset('/js/data-table.js')}}"></script>

	<!-- end custom js for this page -->
  @stack('page_specified_js')

</body>

</html>

