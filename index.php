<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--menggunakan CoreUI untuk bootstrap-->
    <!-- Vendors styles-->
    <link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="css/examples.css" rel="stylesheet">

    <!--icons-->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons/css/all.min.css">

    <title>Dashboard</title>
  </head>
  <body>
  <!--sidebar-->
  <?php echo file_get_contents('sidebar.php'); ?>
  <!--end of sidebar-->

  <div class="wrapper d-flex flex-column min-vh-100 bg-light">

    <header class="header header-sticky mb-4">
      <div class="container-fluid">
        <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
          <svg class="icon icon-lg">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
          </svg>
        </button><a class="header-brand d-md-none" href="#">
          <svg width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#full"></use>
          </svg></a>
        <ul class="header-nav d-none d-md-flex me-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Dashboard</a></li>
        </ul>
      </div>
      <div class="header-divider"></div>

      <div class="container-fluid">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
              <!-- if breadcrumb is single--><span>Home</span>
            </li>
            <li class="breadcrumb-item active"><span>Dashboard</span></li>
          </ol>
        </nav>
      </div>

    </header>

    <div class="body flex-grow-1 px-3">
      <div class="container-lg">
        <!-- /.row-->
        <div class="row">
          <div class="col-md-12">
            <div class="card mb-4">
              <div class="card-header"><h5>Welcome</h5></div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6">
                    <p class="card-text">The panel facing the driver of a vehicle or the pilot of an aircraft, containing instruments and controls.</p>
                  </div>
                  <!-- /.col-->
                </div>
                <!--row-->
              </div>
            </div>
          </div>
          <!-- /.col-->
        </div>
        <!-- /.row-->
      </div>
    </div>

    <!--footer-->
    <?php echo file_get_contents('footer.php');?>
    <!--end of footer-->

  </div>

    <!-- CoreUI and necessary plugins-->
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="vendors/simplebar/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="vendors/chart.js/js/chart.min.js"></script>
    <script src="vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="js/main.js"></script>

  </body>
  
</html>