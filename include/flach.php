<div class="col-md-3">
    <section class="flachInfo">
        <h4 class="text-center font-weight-bolder titreF"><strong>Flach informations</strong></h4>
        <hr style="border: solid 1.5px red ; color:red;" class="my-0">
        
        <section class="mt-2">

            <?php
                $con = mysqli_connect("localhost","root","","exclunews");
                $sql = "SELECT idArticle,dateCreation,titre 
                        FROM articles 
                        ORDER BY dateCreation DESC
                        LIMIT 10";
                $req = mysqli_query($con,$sql);
                setlocale(LC_TIME,'fr');
                while ($tab = mysqli_fetch_assoc($req))
                {
                $time = strftime('%H:%M',strtotime($tab['dateCreation'])); 
            ?>
            <div class="row pb-2">
                <div class="col-2 text-muted text-center fw-bold" style="font-size:14px; ">
                    <?= $time ?>
                </div>
                
                <div class="col-10 flachTitre">
                <a href="article.php?idArticle=<?= $tab['idArticle'] ?>" class="f_link fw-bold">
                    <?= $tab['titre'] ?>
                </a>
                </div>
            </div>
            <?php
                }
            ?>

        </section>
    </section>
</div>