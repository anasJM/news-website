<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>accueil</title>
</head>
<body>
    
  <script src="bootstrap-5.0.1-dist/js/jquery-3.5.1.js"></script>  
  <script src="bootstrap-5.0.1-dist/js/popper.min.js"></script>
  <script src="bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>


  <?php
    $page = 'accueil';
    // header including //
    include('include/header.php');
  ?>

    <!-- carousel section -->

    <div class="container-fluid my-3 ms-1">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6  py-0 pl-3 pr-1 featcard">
            <div id="featured" class="carousel slide carousel-fade" data-bs-ride="carousel">
              <div class="carousel-inner">

                <?php
                
                  $con = mysqli_connect("localhost","root","","exclunews");
                  $sql = "SELECT * FROM articles ORDER BY dateCreation DESC LIMIT 6";
                  $req = mysqli_query($con,$sql);
                  $tab = mysqli_fetch_assoc($req);
                ?>
                <div class="carousel-item active box">	  
                  <div class="card bg-dark text-white">
                    <img class="img-fluid w-100" src="img/<?= $tab['image'] ?>" alt="Bootstrap news">
                    <div class="card-img-overlay d-flex linkfeat">
                      <a href="article.php?idArticle=<?= $tab['idArticle'] ?>" class="align-self-end">
                      <span class="badge"><?= ucfirst($tab['categorie']) ?></span> 
                        <h4 class="card-title "><?= $tab['titre'] ?></h4>
                      </a>
                    </div>
                  </div>
                </div>
                <?php
                  while ($tab = mysqli_fetch_assoc($req))
                  {

                ?>

                <div class="carousel-item box">			  
                  <div class="card bg-dark text-white">
                    <img src="img/<?= $tab['image'] ?>" height="" class="" alt="" loading="lazy">
                    <div class="card-img-overlay d-flex linkfeat">
                      <a href="article.php?idArticle=<?= $tab['idArticle'] ?>" class="align-self-end">
                      <span class="badge"><?= ucfirst($tab['categorie']) ?></span> 
                        <h4 class="card-title"><?= $tab['titre'] ?></h4>
                      </a>
                    </div>
                  </div>
                </div>
                
                <?php
                  }
                ?>

              </div>

            </div>

          </div>

          <!-- ............... -->

          <div class="col-6 py-0 px-1 d-none d-lg-block">

            <div class="row">

                <?php
                  $sql = "SELECT * FROM articles ORDER BY dateCreation DESC LIMIT 6,4";
                  $req = mysqli_query($con,$sql);
                  $tab = mysqli_fetch_assoc($req);
                ?>

              <div class="col-6 pb-2 mg-1	pe-3">
                <div class="card bg-dark text-white box">
                  <img src="img/<?= $tab['image'] ?>" height="" class="d-inline-block align-top" loading="lazy">
                    <div class="card-img-overlay d-flex linkfeat">
                      <a href="article.php?idArticle=<?= $tab['idArticle'] ?>" class="align-self-end">
                      <span class="badge"><?= ucfirst($tab['categorie']) ?></span> 
                        <h6 class="card-title fw-bold"><?= $tab['titre'] ?></h6>
                      </a>
                    </div>
                    </div>
              </div>
              
              <?php
                  $tab = mysqli_fetch_assoc($req);
              ?>

              <div class="col-6 pb-2 mg-2 ps-3">
                <div class="card bg-dark text-white box">
                  <img src="img/<?= $tab['image'] ?>" height="" class="d-inline-block align-top" loading="lazy">
                    <div class="card-img-overlay d-flex linkfeat">
                      <a href="article.php?idArticle=<?= $tab['idArticle'] ?>" class="align-self-end">
                      <span class="badge"><?= ucfirst($tab['categorie']) ?></span> 
                        <h6 class="card-title fw-bold"><?= $tab['titre'] ?></h6>
                      </a>
                    </div>
                </div>
              </div>

              <?php
                  $tab = mysqli_fetch_assoc($req);
              ?>

              <div class="col-6 pb-2 mg-3	pe-3">
                  <div class="card bg-dark text-white box">
                  <img src="img/<?= $tab['image'] ?>" height="" class="d-inline-block align-top" loading="lazy">
                    <div class="card-img-overlay d-flex linkfeat">
                      <a href="article.php?idArticle=<?= $tab['idArticle'] ?>" class="align-self-end">
                      <span class="badge"><?= ucfirst($tab['categorie']) ?></span> 
                        <h6 class="card-title fw-bold"><?= $tab['titre'] ?></h6>
                      </a>
                    </div>
                    </div>
              </div>

              <?php
                  $tab = mysqli_fetch_assoc($req);
              ?>

              <div class="col-6 pb-2 mg-4 ps-3">
                <div class="card bg-dark text-white box">
                  <img src="img/<?= $tab['image'] ?>" height="" class="d-inline-block align-top" loading="lazy">
                    <div class="card-img-overlay d-flex linkfeat">
                      <a href="article.php?idArticle=<?= $tab['idArticle'] ?>" class="align-self-end">
                        <span class="badge"><?= ucfirst($tab['categorie']) ?></span> 
                        <h6 class="card-title fw-bold"><?= $tab['titre'] ?></h6>
                      </a>
                    </div>
                </div>
              </div>

            </div>
          </div>

          <!-- ............... -->

        </div>

    </div>
    
    <!-- carousel section -->


    <!-- body section -->

    <div class="container-fluid ms-2">
                                            
      <!-- sport section -->

      <div class="row">
        
        <div class="row pb-3">
          <a href="sport.php"><h3 class="text-center mt-1 py-2 fw-bold text-white bg-dark titre_categorie">SPORT</h3></a>
        </div>
        <div class="row">
          <?php

                $con = mysqli_connect("localhost","root","","exclunews");
                $sql1 = "SELECT * FROM articles WHERE categorie='sport' ORDER BY dateCreation DESC LIMIT 4";
                $req1 = mysqli_query($con,$sql1);
                setlocale(LC_TIME,'fr');
                while ($tab1 = mysqli_fetch_assoc($req1)) 
                {
                    $time = ucfirst(strftime('%A %d %B %Y - %H:%M',strtotime($tab1['dateCreation'])));
          ?> 

            <div class="col-md-3">

                <a href="article.php?idArticle=<?= $tab1['idArticle'] ?>">
                <div class="card bg-dark text-white mb-4 shadow-lg box">
                    <img src="img/<?= $tab1['image'] ?>" class="d-inline-block align-top" alt="" loading="lazy">
                    <div class="card-img-overlay d-flex linkfeat pb-2">
                        <div class="align-self-end">
                        <div class="dateA"><?= $time ?></div>
                        <!-- <span class="badge">sport</span>  -->
                            <h6 class="card-title fw-bold"><?= $tab1['titre'] ?></h6>
                        </div>
                    </div>
                </div>
                </a>

            </div>

          <?php
                    }
          ?>
        </div>

      </div>

      <!-- sport section -->


      <!-- economie section -->

      <div class="row">
        
        
        <div class="row pb-3">
          <a href="economie.php"><h3 class="text-center py-2 fw-bold text-white bg-dark titre_categorie">ECONOMIE</h3></a>
        </div>

        <div class="row">
          <?php

                $sql2 = "SELECT * FROM articles WHERE categorie='economie' ORDER BY dateCreation DESC LIMIT 4";
                $req2 = mysqli_query($con,$sql2);
                setlocale(LC_TIME,'fr');
                while ($tab2 = mysqli_fetch_assoc($req2)) 
                {
                    $time = ucfirst(strftime('%A %d %B %Y - %H:%M',strtotime($tab2['dateCreation'])));
          ?> 

            <div class="col-md-3">

                <a href="article.php?idArticle=<?= $tab2['idArticle'] ?>">
                <div class="card bg-dark text-white mb-4 shadow-lg box">
                    <img src="img/<?= $tab2['image'] ?>" class="d-inline-block align-top" alt="" loading="lazy">
                    <div class="card-img-overlay d-flex linkfeat pb-2">
                        <div class="align-self-end">
                        <div class="dateA"><?= $time ?></div>
                        <!-- <span class="badge">sport</span>  -->
                            <h6 class="card-title fw-bold"><?= $tab2['titre'] ?></h6>
                        </div>
                    </div>
                </div>
                </a>

            </div>

          <?php
                    }
          ?>

        </div>

      </div>

      <!-- economie section -->


      <!-- politique section -->

      <div class="row">
        
        <div class="row pb-3">
          <a href="politique.php"><h3 class="text-center py-2 fw-bold text-white bg-dark titre_categorie">POLITIQUE</h3></a>
        </div>

        <div class="row">
          <?php

                $sql3 = "SELECT * FROM articles WHERE categorie='politique' ORDER BY dateCreation DESC LIMIT 4";
                $req3 = mysqli_query($con,$sql3);
                setlocale(LC_TIME,'fr');
                while ($tab3 = mysqli_fetch_assoc($req3)) 
                {
                    $time = ucfirst(strftime('%A %d %B %Y - %H:%M',strtotime($tab3['dateCreation'])));
          ?> 

            <div class="col-md-3">

                <a href="article.php?idArticle=<?= $tab3['idArticle'] ?>">
                <div class="card bg-dark text-white mb-4 shadow-lg box">
                    <img src="img/<?= $tab3['image'] ?>" class="d-inline-block align-top" alt="" loading="lazy">
                    <div class="card-img-overlay d-flex linkfeat pb-2">
                        <div class="align-self-end">
                        <div class="dateA"><?= $time ?></div>
                        <!-- <span class="badge">sport</span>  -->
                            <h6 class="card-title fw-bold"><?= $tab3['titre'] ?></h6>
                        </div>
                    </div>
                </div>
                </a>

            </div>

          <?php
                    }
          ?>

        </div>

      </div>

      <!-- politique section -->


      <!-- culture section -->

      <div class="row">
        
        <div class="row pb-3">
          <a href="culture.php"><h3 class="text-center py-2 fw-bold text-white bg-dark titre_categorie">CULTURE</h3></a>
        </div>

        <div class="row">
          <?php

                $sql4 = "SELECT * FROM articles WHERE categorie='culture' ORDER BY dateCreation DESC LIMIT 4";
                $req4 = mysqli_query($con,$sql4);
                setlocale(LC_TIME,'fr');
                while ($tab4 = mysqli_fetch_assoc($req4)) 
                {
                    $time = ucfirst(strftime('%A %d %B %Y - %H:%M',strtotime($tab4['dateCreation'])));
          ?> 

            <div class="col-md-3">

                <a href="article.php?idArticle=<?= $tab4['idArticle'] ?>">
                <div class="card bg-dark text-white mb-4 shadow-lg box">
                    <img src="img/<?= $tab4['image'] ?>" class="d-inline-block align-top" alt="" loading="lazy">
                    <div class="card-img-overlay d-flex linkfeat pb-2">
                        <div class="align-self-end">
                        <div class="dateA"><?= $time ?></div>
                        <!-- <span class="badge">sport</span>  -->
                            <h6 class="card-title fw-bold"><?= $tab4['titre'] ?></h6>
                        </div>
                    </div>
                </div>
                </a>

            </div>

          <?php
                    }
          ?>

        </div>

      </div>

      <!-- culture section -->


      <!-- societe section -->

      <div class="row">
        

        <div class="row pb-3">
          <a href="societe.php"><h3 class="text-center py-2 fw-bold text-white bg-dark titre_categorie">SOCIETE</h3></a>
        </div>

        <div class="row">
          <?php

                $sql5 = "SELECT * FROM articles WHERE categorie='societe' ORDER BY dateCreation DESC LIMIT 4";
                $req5 = mysqli_query($con,$sql5);
                setlocale(LC_TIME,'fr');
                while ($tab5 = mysqli_fetch_assoc($req5)) 
                {
                    $time = ucfirst(strftime('%A %d %B %Y - %H:%M',strtotime($tab5['dateCreation'])));
          ?> 

            <div class="col-md-3">

                <a href="article.php?idArticle=<?= $tab5['idArticle'] ?>">
                <div class="card bg-dark text-white mb-4 shadow-lg box">
                    <img src="img/<?= $tab5['image'] ?>" class="d-inline-block align-top" alt="" loading="lazy">
                    <div class="card-img-overlay d-flex linkfeat pb-2">
                        <div class="align-self-end">
                        <div class="dateA"><?= $time ?></div>
                        <!-- <span class="badge">sport</span>  -->
                            <h6 class="card-title fw-bold"><?= $tab5['titre'] ?></h6>
                        </div>
                    </div>
                </div>
                </a>

            </div>

          <?php
                    }
          ?>

        </div>


      </div>

      <!-- societe section -->
      
      <!-- monde section -->

      <div class="row">
          
        

        <div class="row pb-3">
          <a href="monde.php"><h3 class="text-center py-2 fw-bold bg-dark text-white titre_categorie">MONDE</h3></a>
        </div>

        <div class="row">
          <?php

                $sql6 = "SELECT * FROM articles WHERE categorie='monde' ORDER BY dateCreation DESC LIMIT 4";
                $req6 = mysqli_query($con,$sql6);
                setlocale(LC_TIME,'fr');
                while ($tab6 = mysqli_fetch_assoc($req6)) 
                {
                    $time = ucfirst(strftime('%A %d %B %Y - %H:%M',strtotime($tab6['dateCreation'])));
          ?> 

            <div class="col-md-3">

                <a href="article.php?idArticle=<?= $tab6['idArticle'] ?>">
                <div class="card bg-dark text-white mb-4 shadow-lg box">
                    <img src="img/<?= $tab6['image'] ?>" class="d-inline-block align-top" alt="" loading="lazy">
                    <div class="card-img-overlay d-flex linkfeat pb-2">
                        <div class="align-self-end">
                        <div class="dateA"><?= $time ?></div>
                        <!-- <span class="badge">sport</span>  -->
                            <h6 class="card-title fw-bold"><?= $tab6['titre'] ?></h6>
                        </div>
                    </div>
                </div>
                </a>

            </div>

          <?php
                    }
          ?>

        </div>

      </div>

      <!-- monde section -->


    </div>

    <!-- body section -->

  <?php
      // footer including //
      include('include/footer.php');
  ?>

</body>
</html>