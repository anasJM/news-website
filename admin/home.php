<?php

    session_start();
    if (isset($_SESSION['adminEmail'])) {
        
    }
    else {
        header('location:adminLogin.php');
        $page = "home";
    }

    include('header.php');
?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>
      <h1 class="mt-5"><strong>Bienvenue <?= ucwords($_SESSION['adminNom']) ?>!</strong></h1>

    </main>
  </div>
</div>

</body>
</html>
