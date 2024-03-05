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
    <title>contact</title>
</head>
<body>

    <script src="bootstrap-5.0.1-dist/js/jquery-3.5.1.js"></script>  
    <script src="bootstrap-5.0.1-dist/js/popper.min.js"></script>
    <script src="bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>

    <?php
        $page = 'contact';
        // header including //
        include('include/header.php');
    ?>

    <div class="container-fluid my-3 ps-5">
        <div class="row">
            <div class="col-md-8 ps-5 mt-5">
                <section class="contact">
                    <h3><strong>Contact</strong></h3>
                    <form action="" method="post" class="comment">
                        <div class="mt-4 ">
                            <label for="nom" class="form-label"><strong>Nom complet:</strong></label>
                            <input type="text" name="nameContact" class="form-control form-control-sm"
                            placeholder="Nom" id="nom">
                        </div>
                        <div class="mt-3 ">
                            <label for="email" class="form-label"><strong>Adresse email:</strong></label>
                            <input type="email" name="emailContact" class="form-control form-control-sm"
                            placeholder="Email" id="email">
                        </div>
                        <div class="mt-3 ">
                            <label for="objet" class="form-label"><strong>Objet:</strong></label>
                            <input type="text" name="objetContact" class="form-control form-control-sm"
                            placeholder="Objet" id="objet">
                        </div>
                        <div class="mt-3 mb-3 ">
                            <label for="message" class="form-label"><strong>Message:</strong></label>
                            <textarea class="form-control form-control-sm textarea" maxlength="1000" placeholder="Message" name="messageContact" id="message" rows="6"></textarea>
                        </div>
                        <button type="submit" name="validerContact" class="btn btn-danger fw-bold text-light font-weight-bold"
                        style="height: 2.5em; width:7em">Envoyer</button>
                    </form>

                    <?php
                        if (isset($_POST['validerContact']))
                        {
                            $con = mysqli_connect("localhost","root","","exclunews");
                            $sql = "INSERT INTO contact VALUES('','{$_POST['nameContact']}','{$_POST['emailContact']}','{$_POST['objetContact']}','{$_POST['messageContact']}')";
                            $req = mysqli_query($con,$sql);

                            if ($req)
                            {
                    ?>
                                <div class="alert alert-success mt-4" role="alert">
                                    votre message est enregistré avec succée!
                                </div>
                    <?php
                            }
                            else 
                            {
                    ?>
                                <div class="alert alert-danger mt-4" role="alert">
                                    votre message n'est pas enregistré!
                                </div>

                    <?php
                            }
                        }
                    ?>
                    
                </section>
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