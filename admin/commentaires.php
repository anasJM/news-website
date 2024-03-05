<?php

    session_start();
    if (isset($_SESSION['adminEmail'])) {
        $page = 'news';
    }
    else {
        header('location:adminLogin.php');
        
    }

    include('header.php');
?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div class="mt-4 bg-light py-2 pt-4 ps-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Commentaires</li>
                </ol>
            </nav>
        </div>
        
        <form action="">
            <div class="row g-2">

                <div class="col-auto">
                    <input type="text" class="form-control my-4" name="chercheComm" placeholder="Id Article">
                </div>
                <div class="col-auto">
                    <input type="submit" class="btn btn-danger my-4" name="chercher" value="rechercher">
                </div>

            </div>
            
        </form>

        <?php
            if (isset($_GET['chercher'])) {
        ?>

        <table class="table table-bordered border-default">

            <thead >
                <tr class="border-2 fw-bold">
                    <td class="border-2">ID</td>
                    <td class="border-2">Nom</td>
                    <td class="border-2">Email</td>
                    <td class="border-2">Message</td>
                </tr>
            </thead>
            <tbody>

            <?php
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                    }
                    else {
                        $page=1;
                    }
                    
                    if ($page=="" || $page=="1") {
                        $page_1 = 0;
                    }
                    else {
                        $page_1 = ($page*10)-10;
                    }

                    $con = mysqli_connect("localhost","root","","exclunews");
                    $sql = "SELECT * FROM commentaires WHERE idArticle={$_GET['chercheComm']} LIMIT $page_1,10";
                    $req = mysqli_query($con,$sql);
                    while ($tab = mysqli_fetch_assoc($req))
                    {
            ?>
                        <tr>
                            <td><?= $tab['idMessage'] ?></td>
                            <td><?= $tab['nom'] ?></td>
                            <td><?= $tab['email'] ?></td>
                            <td><?= $tab['message'] ?></td>
                        </tr>
            <?php
                    }
            ?>
            </tbody>

        </table>

        <ul class="pagination">
            <?php
            
                $req = mysqli_query($con,"SELECT * FROM commentaires");
                $count = mysqli_num_rows($req);
                $a =ceil($count/10);
                for ($i=1; $i < $a; $i++)
                {
            ?>

                    <li class="page-item <?php if ($page == $i) echo "active"; ?>">
                        <a class="page-link" href="news.php?page=<?= $i ?>"><?= $i ?></a>
                    </li>

            <?php
                }
            ?>
        </ul>

        <?php    
            }
        ?>
    </main>
  </div>
</div>

</body>
</html>
