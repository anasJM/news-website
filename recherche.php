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
    <title>sport</title>
</head>
<body>
    
    <script src="bootstrap-5.0.1-dist/js/jquery-3.5.1.js"></script>  
    <script src="bootstrap-5.0.1-dist/js/popper.min.js"></script>
    <script src="bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>

    <?php
        $page = 'sport';
        // header including //
        include('include/header.php');
    ?>

    
    <div class="container-fluid my-4">
        <div class="row">

            <div class="col-md-9">

                <div class="row">

                    <h3 class="fw-bold">Resultats De Recherche Pour : <strong style="color:grey;"><?= $_GET['recherche'] ?></strong></h3>

                    <form action="" class="comment">

                        <div class="row g-3 mt-1 mb-4">

                            <div class="col-auto">
                                <input type="search" name="recherche" value="<?= $_GET['recherche'] ?>" class="form-control" placeholder="Reherche">
                            </div>
                            
                            <div class="col-auto">
                                <button type="submit" name="chercher" class="btn btn-danger">Chercher</button>
                            </div>
                            
                        </div>

                    </form>

                    <hr style="color:grey; height:2px;">
                </div>

                <div class="row">
                    <?php
                        $con = mysqli_connect("localhost","root","","exclunews");
                        $sql = "SELECT * FROM articles WHERE titre LIKE '%{$_GET['recherche']}%' ORDER BY dateCreation DESC";
                        $req = mysqli_query($con,$sql);
                        setlocale(LC_TIME,'fr');
                        if (mysqli_num_rows($req))
                        {   
                        
                        while ($tab = mysqli_fetch_assoc($req)) 
                        {
                            $time = ucfirst(strftime('%A %d %B %Y - %H:%M',strtotime($tab['dateCreation'])));
                    ?> 
                    <div class="col-md-4">
                        <a href="article.php?idArticle=<?= $tab['idArticle'] ?>">
                        <div class="card bg-dark text-white mb-4 shadow-lg box">
                            <img src="img/<?= $tab['image'] ?>" class="d-inline-block align-top" alt="" loading="lazy">
                            <div class="card-img-overlay d-flex linkfeat pb-2">
                                <div class="align-self-end">
                                <div class="dateA"><?= $time ?></div>
                                <!-- <span class="badge">sport</span>  -->
                                    <h6 class="card-title fw-bold"><?= $tab['titre'] ?></h6>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <?php
                            }

                        }
                        else
                        {
                    ?>
                            <h1>Resultat Introuvable !</h1>
                    <?php
                        }
                    ?>
                </div>
            </div>

            <?php
                // flach including //
                include('include/flach.php');
            ?>
        </div>
    </div>


    <?php
        // footer including //
        include('include/footer.php');
    ?>

</body>
</html>