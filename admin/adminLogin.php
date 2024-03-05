<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
    <style>
        body{
            background-image: url(../img/red-concrete-background.jpg);
            background-size: cover;
        }
        .login{
            height:500px;
            background-color:#eeeeee;
            border-radius:5px;
            margin-top:200px;
            padding-top:100px;
            box-shadow: rgba(17, 17, 26, 0.3) 0px 8px 24px, rgba(17, 17, 26, 0.3) 0px 16px 56px, rgba(17, 17, 26, 0.3) 0px 24px 80px;
        }
    </style>
</head>
<body>

    <?php
        session_start();
    ?>

    <script src="../bootstrap-5.0.1-dist/js/jquery-3.5.1.js"></script>  
    <script src="../bootstrap-5.0.1-dist/js/popper.min.js"></script>
    <script src="../bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>

    <div class="mx-auto w-50 login">
        
        <div class="row mx-auto w-50 text-center">
        
            <img src="../img/LOGO.png">

        </div>

        <div class="row">
        
            <form action="" method="post" class="mx-auto w-75">
                <div class="mt-3">
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="adminEmail"
                    placeholder="Adresse Email">
                </div>
                <div class="mt-3">
                    <input type="password" class="form-control" id="exampleFormControlInput2" name="adminPass" placeholder="Mot de passe">
                </div>
                <div class="mt-3 d-grid gap-2">
                    <input type="submit" value="Connecter" class="btn btn-danger" name="valider">
                </div>
            </form>

        </div>

        

    </div>

    <?php
    
        if (isset($_POST['valider']))
        {
            $email = $_POST['adminEmail'];
            $password = $_POST['adminPass'];
            $con = mysqli_connect("localhost","root","","exclunews");
            $sql = "SELECT * FROM admin WHERE emailAdmin = '$email' AND motPasseAdmin = '$password'";
            $req = mysqli_query($con,$sql);
            $tab = mysqli_fetch_assoc($req);

            if (mysqli_num_rows($req) > 0) {
                $_SESSION['adminEmail'] = $email;
                $_SESSION['adminNom'] = $tab['nomAdmin'];;
                $_SESSION['adminPasse'] = $password;
                $_SESSION['adminId'] = $tab['idAdmin'];
                header('location:home.php');
            }
            else {
    ?>
                <div class="alert alert-danger mt-4" role="alert">
                    Invalide!
                </div>
    <?php
            }
        }

    ?>


</body>
</html>