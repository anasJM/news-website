<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Dashboard Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
  </head>
  <body>

    <script src="../bootstrap-5.0.1-dist/js/jquery-3.5.1.js"></script>  
    <script src="../bootstrap-5.0.1-dist/js/popper.min.js"></script>
    <script src="../bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow" >
  <div class="navbar-brand col-md-3 col-lg-2 me-0 px-3" id="head-nav"><?= $_SESSION['adminEmail'] ?></div>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout.php">Sign out</a>
    </li>
  </ul>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link <?php if ($page == "home") echo 'active' ?>" href="home.php">
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="news.php">
              News
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="commentaires.php">
              Commentaires
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">
              Contact
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              Integrations
            </a>
          </li> -->
        </ul>

        <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              Year-end sale
            </a>
          </li>
        </ul> -->
      </div>
    </nav>