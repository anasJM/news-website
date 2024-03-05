<?php

        $con = mysqli_connect("localhost","root","","exclunews");
        $sql = "DELETE FROM articles WHERE idArticle={$_GET['idArticle']}";
        $req = mysqli_query($con,$sql);

        if ($req) {
            echo "<script>alert('suppression avec succée!')</script>";
            header('location:news.php');
        }


?>