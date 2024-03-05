<?php
    session_start();
    if (isset($_SESSION['adminEmail'])) {
        
    }
    else {
        header('location:adminLogin.php');
        $page = 'news';
    }

    include('header.php');
?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <h4 class="my-5 px-5 py-3 text-white" style="background-color:grey;"><strong>Ajouter un article</strong></h4>
        <div class="ms-5 mt-5 w-75">

            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <strong><label for="exampleFormControlInput1" class="form-label">Titre</label></strong>
                    <input type="text" name="titre" class="form-control" id="exampleFormControlInput1" >
                </div>
                <div class="mb-3">
                    <strong><label for="exampleFormControlInput1" class="form-label">Date</label></strong>
                    <input type="date" name="date" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <strong><label for="exampleFormControlInput1" class="form-label">Description</label></strong>
                    <textarea name="description" class="form-control" id="exampleFormControlInput1" cols="30" rows="5"></textarea>
                </div>
                <div class="mb-3">
                    <strong><label for="exampleFormControlInput1" class="form-label">Image</label></strong>
                    <input type="file" name="thumbnail" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <strong><label for="exampleFormControlInput1" class="form-label">Categorie</label></strong>
                    <select name="categorie" class="form-select" id="exampleFormControlInput1">
                        <option disabled selected>choisir une categorie</option>
                        <option>sport</option>
                        <option>economie</option>
                        <option>politique</option>
                        <option>culture</option>
                        <option>monde</option>
                        <option>societe</option>
                    </select>
                </div>
                <input type="submit" name="valider" class="btn btn-danger">
            </form>
            
        </div>
    </main>

    <?php
    
        if (isset($_POST['valider']))
        {
            $con = mysqli_connect("localhost","root","","exclunews");
            $titre = $_POST['titre'];
            $date = $_POST['date'];
            $description = $_POST['description'];
            $categorie = $_POST['categorie'];
            $image = $_FILES['thumbnail']['name'];
            $image_tmp = $_FILES['thumbnail']['tmp_name'];
            move_uploaded_file($image_tmp,"../img/$image");

            $sql = "INSERT INTO articles VALUES('','$titre','$date','$description','$image','$categorie')";
            $req = mysqli_query($con,$sql);

            if ($req) {
                echo "<script>alert('Importation avec succée!')</script>";
            }
            else {
                echo "<script>alert('ERREUR!')</script>";
            }
        }

    ?>

  </div>
</div>

</body>
</html>