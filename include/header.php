<header>
    <nav class="navbar navbar-light">
      <a class=" px-5 py-0 mx-5" href="accueil.php">
        <img src="img/LOGO.png" height="60" alt="logo">
      </a>
      <ul class="nav justify-content-end">
        <li class="nav-item py-2" style="font-size: small;">
          <i class="bi bi-clock-fill"></i>
          <?php
            setlocale(LC_TIME,'fr');
            $time = ucfirst(strftime('%A %d %B %Y',strtotime(date("l j F Y"))));
          ?>
          <strong>
            <?= $time ?>
          </strong>
        </li>
        <li class="nav-item mx-5">
          <form action="recherche.php">
            <div class="input-group input-group-sm">
              <input type="search" class="form-control form-control-sm border-2 border-dark" placeholder="Rechercher" name="recherche">
              <div class="input-group-prepend input-group-sm">
                <button type="submit" name="chercher" class="btn btn-outline-dark border-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg>
                </button>
              </div>
            </div>
          </form>
        </li>
      </ul>
    </nav>

      <nav class="navbar navbar-dark bg-dark shadow-sm" style="height: 50px;">
        <!-- <div class="container-fluid"> -->
          <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> -->
          <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
            <ul class="nav mx-auto ">
              <li class="nav-item">
                <strong>
                  <a class="nav-link text-uppercase text-light link" href="accueil.php" 
                  <?php if ($page == 'accueil') { echo "style='border-bottom: solid 5px red;'"; } ?>>
                  accueil
                  </a>
                </strong>
              </li>
              <li class="nav-item">
                <strong><a class="nav-link text-uppercase text-light link" href="sport.php" <?php if ($page == 'sport') { echo "style='border-bottom: solid 5px red;'"; } ?>>sport</a></strong>
              </li>
              <li class="nav-item">
                <strong><a class="nav-link text-uppercase text-light link" href="economie.php" <?php if ($page == 'economie') { echo "style='border-bottom: solid 5px red;'"; } ?>>economie</a></strong>
              </li>
              <li class="nav-item">
                <strong><a class="nav-link text-uppercase text-light link" href="politique.php" <?php if ($page == 'politique') { echo "style='border-bottom: solid 5px red;'"; } ?>>politique</a></strong>
              </li>
              <li class="nav-item">
                <strong><a class="nav-link text-uppercase text-light link" href="culture.php" <?php if ($page == 'culture') { echo "style='border-bottom: solid 5px red;'"; } ?>>culture</a></strong>
              </li>
              <li class="nav-item">
                <strong><a class="nav-link text-uppercase text-light link" href="societe.php" <?php if ($page == 'societe') { echo "style='border-bottom: solid 5px red;'"; } ?>>societe</a></strong>
              </li>
              <li class="nav-item">
                <strong><a class="nav-link text-uppercase text-light link" href="monde.php" <?php if ($page == 'monde') { echo "style='border-bottom: solid 5px red;'"; } ?>>monde</a></strong>
              </li>
              <li class="nav-item">
                <strong><a class="nav-link text-uppercase text-light link" href="contact.php" <?php if ($page == 'contact') { echo "style='border-bottom: solid 5px red;'"; } ?>>contact</a></strong>
              </li>
            </ul>
          <!-- </div> -->
        <!-- </div> -->
      </nav>
    </div>
</header>