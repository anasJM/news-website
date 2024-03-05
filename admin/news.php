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
                    <li class="breadcrumb-item active" aria-current="page">News</li>
                </ol>
            </nav>
        </div>
        <a href="addNews.php">
            <button class="btn btn-danger mb-4 mt-4">ajouter articles</button>
        </a>
        <table class="table table-bordered border-default">
            <thead >
                <tr class="border-2 fw-bold">
                    <td class="border-2">Titre</td>
                    <td class="border-2">Date</td>
                    <td class="border-2">Categorie</td>
                    <td class="border-2">Image</td>
                    <td class="border-2">Editer</td>
                    <td class="border-2">Supprimer</td>
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
                        $page_1 = ($page*6)-6;
                    }

                    $con = mysqli_connect("localhost","root","","exclunews");
                    $sql = "SELECT * FROM articles ORDER BY dateCreation DESC LIMIT $page_1,6";
                    $req = mysqli_query($con,$sql);
                    while ($tab = mysqli_fetch_assoc($req))
                    {
                ?>
                        <tr>
                            <td class="border-2"><?= $tab['titre'] ?></td>
                            <td class="border-2"><?= $tab['dateCreation'] ?></td>
                            <td class="border-2"><?= ucfirst($tab['categorie']) ?></td>
                            <td class="border-2"><img src="../img/<?= $tab['image'] ?>" class="img-thumbnail" height="100" alt="<?= $tab['image'] ?>"></td>
                            <td class="border-2 text-center">
                                <a href="editNews.php?idArticle=<?= $tab['idArticle'] ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="grey" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                    </svg>
                                </a>
                            </td>
                            <td class="border-2 text-center">
                                <a href="deleteNews.php?idArticle=<?= $tab['idArticle'] ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <ul class="pagination pagination-danger">
            <?php
            
                $req = mysqli_query($con,"SELECT * FROM articles");
                $count = mysqli_num_rows($req);
                $a =ceil($count/6);
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
    </main>
  </div>
</div>

</body>
</html>
