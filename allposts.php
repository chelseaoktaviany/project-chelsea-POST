<?php
  include 'koneksi.php';
?>

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
  <!-- Global site tag (gtag.js) - Google Analytics-->
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
  
  <!--icons-->
  <link rel="stylesheet" href="https://unpkg.com/@coreui/icons/css/all.min.css">

  <title>Dashboard - All Posts</title>
  
  </head>
  <body>
  <!--sidebar-->
  <?php include('layout/sidebar.php');?>
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
            <li class="breadcrumb-item">
              <span>Posts</span>
            </li>
            <li class="breadcrumb-item active">
              <span>All Posts</span>
            </li>
          </ol>
        </nav>
      </div>
    </header>

    <!--body-->
    <div class="body flex-grow-1 px-3">
      <div class="container-lg">
        <!-- /.row-->
        <div class="row">
          <div class="col-md-12">

            <div class="card mb-4">
              <div class="card-header"><h5>All Posts</h5></div>
              <div class="card-body">
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#published" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
                      </svg>Published</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#draft" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-paperclip"></use>
                      </svg>Draft</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#trashed" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                      </svg>Trashed</a>
                  </li>
                </ul>

                <!--published-->
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active" role="tabpanel" id="published">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">ID</th>
                          <th scope="col">Title</th>
                          <th scope="col">Category</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- <tr> -->
                          <?php
                            $post_published = mysqli_query($conn, "SELECT Id, Title, Content, Category FROM posts WHERE Status = 'Published'");
                            $no = 1;
                            while($row = mysqli_fetch_array($post_published)) {
                          ?>
                            <tr>
                              <td><?php echo $no++?></td>
                              <td><?php echo $row['Id']?></td>
                              <td><?php echo $row['Title']?></td>
                              <td><?php echo $row['Category']?></td>
                              <td>
                                <a style="text-decoration: none; font-size: 19px;" href="editpost.php?id=<?php echo $row['Id']?>">
                                  <i class='cil-pen'></i>
                                </a>
                                &nbsp;&nbsp;
                                <a style="text-decoration: none; font-size: 19px;" href="functions/trashpost.php?id=<?php echo $row['Id']?>">
                                  <i class='cil-trash'></i>
                                </a>
                              </td>
                            </tr>
                            <?php
                            }
                            ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!--end of published-->

                <!--draft-->
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3" role="tabpanel" id="draft">

                    <!--table-->
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Id</th>
                          <th scope="col">Title</th>
                          <th scope="col">Category</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $post_draft = mysqli_query($conn, "SELECT Id, Title, Category FROM posts WHERE Status = 'Draft'");
                          $no = 1;
                          while($row = mysqli_fetch_array($post_draft)) {
                        ?>
                        <tr>
                          <td><?php echo $no++?></td>
                          <td><?php echo $row['Id']?></td>
                          <td><?php echo $row['Title']?></td>
                          <td><?php echo $row['Category']?></td>
                          <td>
                            <a style="text-decoration: none; font-size: 19px;" href="editpost.php?id=<?php echo $row['Id']?>">
                              <i class='cil-pen'></i>
                            </a>
                            &nbsp;&nbsp;
                            <a style="text-decoration: none; font-size: 19px;" href="functions/trashpost.php?id=<?php echo $row['Id']?>">
                              <i class='cil-trash'></i>
                            </a>
                          </td>
                        </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                    <!--end of table-->

                  </div>
                </div>
                <!--end of draft-->

                <!--trashed-->
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3" role="tabpanel" id="trashed">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Id</th>
                          <th scope="col">Title</th>
                          <th scope="col">Category</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $post_trashed = mysqli_query($conn, "SELECT Id, Title, Category FROM posts WHERE Status = 'Trashed'");
                          $no = 1;
                          while($row = mysqli_fetch_array($post_trashed)) {
                        ?>
                            <tr>
                              <td><?php echo $no++?></td>
                              <td><?php echo $row['Id']?></td>
                              <td><?php echo $row['Title']?></td>
                              <td><?php echo $row['Category']?></td>
                              <td>
                                <a style="text-decoration: none; font-size: 19px;" href="editpost.php?id=<?php echo $row['Id']?>">
                                  <i class='cil-pen'></i>
                                </a>
                                &nbsp;&nbsp;
                                <a style="text-decoration: none; font-size: 19px;" href="functions/delete-post.php?id=<?php echo $row['Id']?>">
                                  <i class='cil-trash'></i>
                                </a>
                              </td>
                            </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!--end of trashed-->


              </div>
              <!--end of example-->

              </div>
              <!--card body-->

            </div>

          </div>
          <!-- /.col-->

        </div>
        <!-- /.row-->

      </div>
    </div>

    <!--end of body-->

    <!--footer-->
    <?php include('layout/footer.php');?>
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
    <script>
    </script>
  </body>
  
</html>