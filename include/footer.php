  
  <?php

    if (isset($_GET['validerAbonne']) and !empty($_GET['emailAbonne']))
    {
      $con = mysqli_connect("localhost","root","","exclunews");
      $sql = "INSERT INTO abonnés VALUES('','{$_GET['emailAbonne']}')";
      $req = mysqli_query($con,$sql);
    }
    

  ?>
  
  <footer class=" text-center text-white bg-dark mt-5 " style="background-color: rgb(216, 216, 216);">
        <!-- Grid container -->
        <div class="container p-4 pb-1" >
          <!-- Social Media -->
          <section class="mb-3 social">
            <div class="row">
              <div class="col-md-12 text-center">
                <a href="#" class="text-white"><i class="bi bi-facebook m-4" style="font-size:x-large"></i></a>
                <a href="#" class="text-white"><i class="bi bi-twitter m-4"style="font-size:x-large"></i></a>
                <a href="#" class="text-white"><i class="bi bi-instagram m-4"style="font-size:x-large"></i></a>
                <a href="#" class="text-white"><i class="bi bi-linkedin m-4" style="font-size:x-large"></i></a>
                <a href="#" class="text-white"><i class="bi bi-youtube m-4" style="font-size:x-large"></i></a>
              </div>
            </div>
            
          </section>
          <!-- Social Media -->

          <!-- Section: Form -->
          <section class="">
            <div class="row">
            </div>
            <form action="">
              <!--Grid row-->
              <div class="row d-flex justify-content-center">
                <!--Grid column-->
                <div class="col-md-auto">
                  <p class="pt-2">
                    <strong>Abonnez-vous pour notre newsletter</strong>
                  </p>
                </div>
                <!--Grid column-->
      
                <!--Grid column-->
                <div class="col-md-5 col-12">
                  <!-- Email input -->
                  <div class="form-outline form-white mb-4">
                    <input type="email" name="emailAbonne" id="form5Example2" class="form-control border-2 border-white text-white bg-transparent mt-1" placeholder="Email Adresse"/>
                  </div>
                </div>
                <!--Grid column-->
      
                <!--Grid column-->
                <div class="col-md-auto">
                  <!-- Submit button -->
                  <button type="submit" name="validerAbonne" class="btn btn-outline-danger border-2 mt-1" style="height: 2.5em; width:7em">
                    <strong>Abonnez</strong>
                  </button>
                </div>
                
                <!--Grid column-->
              </div>
              <!--Grid row-->
            </form>
          </section>

          <section class="px-5">
            <div class="row mx-auto" style="width: 700px;">
              <div class="col-md-6">
                <a href="accueil.php" >
                  <img src="img/LOGO_light.png" height="60" alt="logo" >
                </a>
              </div>
              <div class="col-md-6 py-2 mb-3">
                <a href="contact.php">
                <button class="btn btn-outline-light border-2 mx-4 rounded" style="height: 2.5em; width:7em"><strong>Contact</strong></button>
                </a>
              </div>
            </div>
          </section>
          <!-- Section: Form -->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center py-2" style="background-color: rgb(77, 77, 77);">
          <strong> © 2021 Copyright: exclunews.ma</strong>
        </div>
        <!-- Copyright -->
    </footer>