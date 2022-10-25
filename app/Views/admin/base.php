<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- theme meta -->
  <meta name="theme-name" content="focus" />
  <title>Focus Admin: <?= $title; ?></title>
  <!-- ================= Favicon ================== -->
  <!-- Standard -->
  <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
  <!-- Retina iPad Touch Icon-->
  <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
  <!-- Retina iPhone Touch Icon-->
  <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
  <!-- Standard iPad Touch Icon-->
  <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
  <!-- Standard iPhone Touch Icon-->
  <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
  <!-- Styles -->

  <link href="<?= base_url(''); ?>/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
  <link href="<?= base_url(''); ?>/css/lib/chartist/chartist.min.css" rel="stylesheet">
  <link href="<?= base_url(''); ?>/css/lib/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url(''); ?>/css/lib/themify-icons.css" rel="stylesheet">
  <link href="<?= base_url(''); ?>/css/lib/owl.carousel.min.css" rel="stylesheet" />
  <link href="<?= base_url(''); ?>/css/lib/owl.theme.default.min.css" rel="stylesheet" />
  <link href="<?= base_url(''); ?>/css/lib/weather-icons.css" rel="stylesheet" />
  <link href="<?= base_url(''); ?>/css/lib/menubar/sidebar.css" rel="stylesheet">
  <link href="<?= base_url(''); ?>/css/lib/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(''); ?>/css/lib/helper.css" rel="stylesheet">
  <link href="<?= base_url(''); ?>/js/lib/toastr/build/toastr.min.css" rel="stylesheet">
  <link href="<?= base_url(''); ?>/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
  <link href="<?= base_url(''); ?>/css/style.css" rel="stylesheet">
</head>

<body>

  <?= $this->include('admin/layout/sidebar'); ?>

  <!-- /# sidebar -->


  <?= $this->include('admin/layout/header'); ?>


  <div class="content-wrap">
    <div class="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
              <div class="page-title">
                <h1>Hello, <span>Welcome Here</span></h1>
              </div>
            </div>
          </div>
          <!-- /# column -->
          <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
              <div class="page-title">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active">Home</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /# column -->
        </div>
        <!-- /# row -->
        <?= $this->renderSection('content'); ?>
      </div>
    </div>
  </div>

  <!-- jquery vendor -->
  <script src="<?= base_url(''); ?>/js/lib/jquery.min.js"></script>
  <script src="<?= base_url(''); ?>/js/lib/jquery.nanoscroller.min.js"></script>
  <!-- nano scroller -->
  <script src="<?= base_url(''); ?>/js/lib/menubar/sidebar.js"></script>
  <script src="<?= base_url(''); ?>/js/lib/preloader/pace.min.js"></script>
  <!-- sidebar -->

  <script src="<?= base_url(''); ?>/js/lib/bootstrap.min.js"></script>
  <script src="<?= base_url(''); ?>/js/scripts.js"></script>
  <!-- bootstrap -->

  <script src="<?= base_url(''); ?>/js/lib/calendar-2/moment.latest.min.js"></script>
  <script src="<?= base_url(''); ?>/js/lib/calendar-2/pignose.calendar.min.js"></script>
  <script src="<?= base_url(''); ?>/js/lib/calendar-2/pignose.init.js"></script>


  <script src="<?= base_url(''); ?>/js/lib/weather/jquery.simpleWeather.min.js"></script>
  <script src="<?= base_url(''); ?>/js/lib/weather/weather-init.js"></script>
  <script src="<?= base_url(''); ?>/js/lib/circle-progress/circle-progress.min.js"></script>
  <script src="<?= base_url(''); ?>/js/lib/circle-progress/circle-progress-init.js"></script>
  <script src="<?= base_url(''); ?>/js/lib/chartist/chartist.min.js"></script>
  <script src="<?= base_url(''); ?>/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
  <script src="<?= base_url(''); ?>/js/lib/sparklinechart/sparkline.init.js"></script>
  <script src="<?= base_url(''); ?>/js/lib/owl-carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url(''); ?>/js/lib/owl-carousel/owl.carousel-init.js"></script>
  <script src="<?= base_url(''); ?>/js/lib/toastr/build/toastr.min.js"></script>
  <script src="<?= base_url(''); ?>/js/lib/sweetalert/sweetalert.min.js"></script>
  <script src="<?= base_url(''); ?>/js/lib/sweetalert/sweetalert.init.js"></script>

  <script src="<?= base_url(''); ?>/js/lib/data-table/datatables.min.js"></script>
  <script src="<?= base_url(''); ?>/js/lib/data-table/dataTables.buttons.min.js"></script>
  <script src="<?= base_url(''); ?>/js/lib/data-table/buttons.flash.min.js"></script>
  <script src="<?= base_url(''); ?>/js/lib/data-table/jszip.min.js"></script>
  <script src="<?= base_url(''); ?>/js/lib/data-table/pdfmake.min.js"></script>
  <script src="<?= base_url(''); ?>/js/lib/data-table/vfs_fonts.js"></script>
  <script src="<?= base_url(''); ?>/js/lib/data-table/buttons.html5.min.js"></script>
  <script src="<?= base_url(''); ?>/js/lib/data-table/buttons.print.min.js"></script>
  <!-- scripit init-->
  <?= $this->renderSection('script'); ?>

  <script>
  toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "showDuration": "600",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
  </script>

  <?php ?>

  <?php
  if (session()->getFlashdata('dataMessage')) {
    foreach (session()->getFlashdata('dataMessage') as $item) {
      echo '<script>toastr["' .
        session()->getFlashdata('type-status') . '"]("' . $item . '")</script>';
    }
  }
  if (session()->getFlashdata('message')) {
    echo '<script>toastr["' .
      session()->getFlashdata('type-status') . '"]("' . session()->getFlashdata('message') . '")</script>';
  }
  ?>

</body>

</html>