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
    <title>article</title>
</head>
<body>

    <script src="bootstrap-5.0.1-dist/js/jquery-3.5.1.js"></script>  
    <script src="bootstrap-5.0.1-dist/js/popper.min.js"></script>
    <script src="bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
    

    <?php
        $page = 'articles';
        // header including //
        include('include/header.php');
    ?>

    <div class="container my-4">
        <div class="row">

            <div class="col-md-9">

                <?php
                    $con = mysqli_connect("localhost","root","","exclunews");
                    $sql = "SELECT * FROM articles WHERE idArticle = {$_GET['idArticle']}";
                    $req = mysqli_query($con,$sql);
                    $tab = mysqli_fetch_assoc($req);
                    setlocale(LC_TIME,'fr');
                    $time = ucfirst(strftime('%A %d %B %Y - %H:%M',strtotime($tab['dateCreation'])));
                ?>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item fw-bold"><a href="accueil.php" style="color:red;">Accueil</a></li>
                        <li class="breadcrumb-item fw-bold active" aria-current="page"><?= ucfirst($tab['categorie']); ?></li>
                    </ol>
                </nav>

                <h2 class="fw-bold"><?= $tab['titre'] ?></h2>

                <img src="img/<?= $tab['image'] ?>" alt="" class="w-100">

                <div class="fw-bold my-3 text-muted">
                    <i class="bi bi-clock-fill"></i>
                    <?= $time ?>
                </div>

                <?php
                    $p = explode("\n",$tab['description']);
                ?>
                <p class="fw-bold paragraphe"><?= ucfirst($p[0]) ?></p>
                <?php
                    unset($p[0]);
                    foreach ($p as $value)
                    {
                ?>
                        <p class="paragraphe"><?= ucfirst($value) ?></p>
                <?php
                    }
                ?>

                <hr style="color:red; height:3px;">

                <!-- commentaire section -->
                <section>
                    <h4 class="fw-bold"> Ajoutez votre commentaire</h4>
                    <form action="" method="post"  class="comment">
                        <input type="text" name="nomC" class="form-control form-control-sm my-3" placeholder="Nom">
                        <input type="email" name="emailC" class="form-control form-control-sm my-3" placeholder="Email">
                        <textarea name="comment" cols="30" rows="5" class="form-control form-control-sm my-3 textarea" 
                        placeholder="Commentaire" maxlength="1000"></textarea>
                        <button type="submit"  name="validerComment" class="btn btn-danger fw-bold text-light font-weight-bold"
                        style="height: 3em; width:18em">Laisser votre commentaire</button>
                    </form>
                    <div class="mt-3">
                    <strong style="color:red;">Conditions de publication :</strong> Les commentaires ne doivent pas être à caractère diffamatoire 
                    ou dénigrant à l'égard de l'auteur, des personnes, des sacralités, des religions ou de 
                    Dieu. Ils ne doivent pas non plus comporter des insultes ou des propos incitant à la haine 
                    et à la discrimination.
                    </div>
                </section>
                <!-- commentaire section -->
                
                <!-- inserer le commentaire dans la base de donnée -->
                <?php
                    if (isset($_POST['validerComment']))
                    {
                        $sql2 = "INSERT INTO commentaires 
                        VALUES('','{$_POST['nomC']}','{$_POST['emailC']}','{$_POST['comment']}','{$tab['idArticle']}')";
                        $req2 = mysqli_query($con,$sql2);
                        if ($req2) 
                        {
                ?>
                            <div class="alert alert-success mt-4" role="alert">
                                votre commentaire est enregistré avec succée!
                            </div>
                <?php
                        }
                        else 
                        {
                ?>
                            <div class="alert alert-danger mt-4" role="alert">
                                votre commentaire n'est pas enregistré!
                            </div>

                <?php
                        }
                        unset($_POST['validerComment']);
                    }
                ?>

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