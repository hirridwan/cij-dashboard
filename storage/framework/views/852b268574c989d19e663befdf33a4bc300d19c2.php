<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>NobleUI Responsive Bootstrap 4 Dashboard Template</title>
	<!-- core:css -->
	<link rel="stylesheet" href="<?php echo e(asset('vendors/core/core.css')); ?>">
	<!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?php echo e(asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')); ?>">
	
  <link rel="stylesheet" href="<?php echo e(asset('vendors/select2/select2.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('vendors/jquery-tags-input/jquery.tagsinput.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('vendors/dropzone/dropzone.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('vendors/dropify/dist/dropify.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('vendors/font-awesome/css/font-awesome.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css')); ?>">

  <link rel="stylesheet" href="<?php echo e(asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css')); ?>">

  <!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?php echo e(asset('fonts/feather-font/css/iconfont.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('vendors/flag-icon-css/css/flag-icon.min.css')); ?>">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="<?php echo e(asset('css/demo_1/style.css')); ?>">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?php echo e(asset('images/favicon.png')); ?>" />
  <?php echo $__env->yieldPushContent('page_specified_css'); ?>
  <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js')}}"></script>
</head>
<?php echo \Livewire\Livewire::styles(); ?>

<body>
  <div class="main-wrapper">
    <!-- partial:partials/_navbar.html -->
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('app.component.sidebar')->html();
} elseif ($_instance->childHasBeenRendered('XpM2RCE')) {
    $componentId = $_instance->getRenderedChildComponentId('XpM2RCE');
    $componentTag = $_instance->getRenderedChildComponentTagName('XpM2RCE');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('XpM2RCE');
} else {
    $response = \Livewire\Livewire::mount('app.component.sidebar');
    $html = $response->html();
    $_instance->logRenderedChild('XpM2RCE', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <!-- partial -->
    <div class="page-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('app.component.navbar')->html();
} elseif ($_instance->childHasBeenRendered('vkb5ziq')) {
    $componentId = $_instance->getRenderedChildComponentId('vkb5ziq');
    $componentTag = $_instance->getRenderedChildComponentTagName('vkb5ziq');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('vkb5ziq');
} else {
    $response = \Livewire\Livewire::mount('app.component.navbar');
    $html = $response->html();
    $_instance->logRenderedChild('vkb5ziq', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
      <!-- partial -->
        <div class="page-content">
          <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- content-wrapper ends -->

        <!-- partial:partials/_footer.html -->
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('app.component.footer')->html();
} elseif ($_instance->childHasBeenRendered('ZE4DOnm')) {
    $componentId = $_instance->getRenderedChildComponentId('ZE4DOnm');
    $componentTag = $_instance->getRenderedChildComponentTagName('ZE4DOnm');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ZE4DOnm');
} else {
    $response = \Livewire\Livewire::mount('app.component.footer');
    $html = $response->html();
    $_instance->logRenderedChild('ZE4DOnm', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <!-- partial -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <?php echo \Livewire\Livewire::scripts(); ?>

  <!-- core:js -->
	<script src="<?php echo e(asset('vendors/core/core.js')); ?>"></script>
	<!-- endinject -->
  <!-- plugin js for this page -->
  <script src="<?php echo e(asset('vendors/chartjs/Chart.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/jquery.flot/jquery.flot.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/jquery.flot/jquery.flot.resize.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/apexcharts/apexcharts.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/progressbar.js/progressbar.min.js')); ?>"></script>

  <script src="<?php echo e(asset('vendors/jquery-validation/jquery.validate.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendors/bootstrap-maxlength/bootstrap-maxlength.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendors/inputmask/jquery.inputmask.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendors/select2/select2.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendors/typeahead.js/typeahead.bundle.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendors/jquery-tags-input/jquery.tagsinput.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendors/dropzone/dropzone.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendors/dropify/dist/dropify.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendors/moment/moment.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.js')); ?>"></script>

	<script src="<?php echo e(asset('vendors/datatables.net/jquery.dataTables.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js')); ?>"></script>
  
  <!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="<?php echo e(asset('vendors/feather-icons/feather.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/template.js')); ?>"></script>
	<!-- endinject -->
  <!-- custom js for this page -->
  <script src="<?php echo e(asset('js/dashboard.js')); ?>"></script>
  <script src="<?php echo e(asset('js/datepicker.js')); ?>"></script>

  <script src="<?php echo e(asset('js/form-validation.js')); ?>"></script>
	<script src="<?php echo e(asset('js/bootstrap-maxlength.js')); ?>"></script>
	<script src="<?php echo e(asset('js/inputmask.js')); ?>"></script>
	<script src="<?php echo e(asset('js/select2.js')); ?>"></script>
	<script src="<?php echo e(asset('js/typeahead.js')); ?>"></script>
	<script src="<?php echo e(asset('js/tags-input.js')); ?>"></script>
	<script src="<?php echo e(asset('js/dropzone.js')); ?>"></script>
	<script src="<?php echo e(asset('js/dropify.js')); ?>"></script>
	<script src="<?php echo e(asset('js/bootstrap-colorpicker.js')); ?>"></script>
	<script src="<?php echo e(asset('js/datepicker.js')); ?>"></script>
	<script src="<?php echo e(asset('js/timepicker.js')); ?>"></script>

  <script src="<?php echo e(asset('/js/data-table.js')); ?>"></script>

	<!-- end custom js for this page -->
  <?php echo $__env->yieldPushContent('page_specified_js'); ?>

</body>

</html>

<?php /**PATH C:\xampp\htdocs\cij-dashboard\resources\views/layouts/master.blade.php ENDPATH**/ ?>