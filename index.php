<?php include "pages/header.php"; ?>

    <h1 class="w-auto mx-auto mb-5 text-white text-center" style="margin-top: -200px">Les enjeux de la Bourse</h1>

    <div class="card w-75 mx-auto mb-3 card_content">
      <div class="card-body">
        <h3 class="card-title">Mais la bourse, qu'est-ce que c'est ?</h3>
        <h4 class="card-subtitle mb-2 text-muted">Et d'où ça vient ??</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>

    <div class="card w-75 mx-auto mb-3 card_content" data-center-center="opacity:1;right:0%;" data-bottom-top="opacity:1;right:10%;">
        <div class="card-horizontal">
          <div  id="image1_accueil" class="card_image"></div>
            <div class="card_text">
                <h4>L'aspect économique de la Bourse</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <form action="pages/economie.php" style="display: inline;">
                  <button type="button" class="btn btn-primary">En savoir plus</button>
                </form>
            </div>
        </div>
    </div>

    <div class="card w-75 mx-auto mb-3 card_content" data-center-center="opacity:1;right:0%;" data-bottom-top="opacity:1;right:10%;">
        <div class="card-horizontal">
            <div id="image2_accueil" class="card_image"></div>
            <div class="card_text">
                <h4>Les moyens techniques mis en oeuvre</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <form action="pages/fonctionnel.php" style="display: inline;">
                  <button type="button" class="btn btn-primary">En savoir plus</button>
                </form>
            </div>
        </div>
    </div>

    <div class="card w-75 mx-auto mb-3 card_content" data-center-center="opacity:1;right:0%;" data-bottom-top="opacity:1;right:10%;">
        <div class="card-horizontal">
            <div id="image3_accueil" class="card_image"></div>
            <div class="card_text">
                <h4>Les contraintes juridiques de la Bourse</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <form action="pages/juridique.php" style="display: inline;">
                  <button type="button" class="btn btn-primary">En savoir plus</button>
                </form>
            </div>
        </div>
    </div>

    <div class="wrapper">
      <div class="box">
          <?php for ($i=0; $i < 10 ; $i++) { ?>
            <div><img src="assets/euro.png" alt=""></div>
          <?php } ?>
      </div>
    </div>

<?php include "pages/footer.php"; ?>
