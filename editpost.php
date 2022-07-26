<?php
include ('koneksi.php');

$id = $_GET['id'];

$query = "SELECT Id, Title, Content, Category  FROM posts WHERE Id = $id";

$result = mysqli_query($conn, $query);

$row = mysqli_fetch_array($result);

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
    
    <!--icons-->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons/css/all.min.css">

    <title>Dashboard - Edit Post</title>
  </head>
  <body>

    <!--sidebar-->
    <?php include('layout/sidebar.php'); ?>
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
                    <li class="breadcrumb-item">Posts</li>
                    <li class="breadcrumb-item active"><span>Edit Post</span></li>
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
                            <!--card header-->
                            <div class="card-header align-items-center">
                                <h5>Edit Post</h5>
                            </div>

                            <!--card body -->
                            <div class="card-body">
                                <div class="row justify-content-md-center">
                                    <div class="col-sm-10">
                                        <!--form add new-->
                                        <form class="row g-3 mt-2" name="formUpdatePost" action="functions/update-post.php" method="POST">
                                            <div class="row justify-content-md-center">
                                                <!-- <div class="col-md-4 mb-3"> -->
                                                    <!-- <label class="form-label" for="idPost">ID</label> -->
                                                    <input class="form-control" id="idPost" name="idPostEdit" type="text" value="<?php echo $row['Id']?>" hidden/>
                                                <!-- </div> -->
                                                <div class="col-md-4 mb-3">
                                                    <label class="form-label" for="titlePost">Title</label>
                                                    <input class="form-control" id="title" name="titlePostEdit" type="text" value="<?php echo $row['Title']?>" required/>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label class="form-label" for="category">Category</label>
                                                    <input class="form-control" id="category" name="categoryPostEdit" type="text" value="<?php echo $row['Category']?>" required/>
                                                </div>
                                            </div>
                                            <div class="row justify-content-md-center">
                                                <div class="col-lg-8 mb-3">
                                                    <label class="form-label" for="contentPost">Content</label>
                                                    <textarea style="resize: none;" class="form-control" id="content" name="contentPostEdit" rows="7" required><?php echo $row['Content']?></textarea>
                                                </div>
                                            </div>
                                            <div class="row justify-content-md-center text-center">
                                                <div class="col col-lg-12">
                                                    <button type="submit" class="btn btn-primary">Publish</button>
                                                    <button type="submit" onclick="formUpdatePost.action='functions/draft-update-post.php'" class="btn btn-secondary">Draft</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!--end of add form-->

                                    </div>
                                    <!-- /.col-->
                                </div>
                                <!--row-->
                            </div>
                            <!--end of card body-->

                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                <!-- /.row-->
            </div>
        </div>

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

  </body>
  
</html>