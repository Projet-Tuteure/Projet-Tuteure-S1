<?php include "pages/header.php"; ?>

    <h1 class="w-auto mx-auto mb-5 text-white text-center" style="margin-top: -200px">Les enjeux de la Bourse</h1>

    <div class="card w-75 mx-auto mb-3 card_content">
      <div class="card-body">
        <h3 class="card-title">Mais la bourse, qu'est-ce que c'est ?</h3>
        <h4 class="card-subtitle mb-2 text-muted">Un moyen pour financer les entreprises</h4>
        <p class="card-text">La Bourse est un marché financier, c'est-à-dire un lieu où l'on échange des titres de sociétés. Mais plus prosaïquement, la Bourse est un endroit où les entreprises qui ont besoin de financement pour investir et croître, font appel public à l'épargne, donc vendent leurs titres afin de se financer sans passer par l'emprunt bancaire.</p>
        <p>On y trouve ainsi des investisseurs particuliers, des entreprises, des banques et même des États qui ont des capitaux en excès et qui souhaitent soutenir voire investir dans des projets, des entreprises ou des États. De l’autre côté, on retrouve les entreprises, les banques ou États ayant besoin de fonds d’une taille telle que la participation de plusieurs acteurs est nécessaire.</p>
        <h4 class="card-subtitle mb-2 text-muted">Mais aussi un outil de spéculation</h4>
        <p>Toutefois, face à l’émergence internationale du marché boursier, les acteurs financiers voient la bourse comme une opportunité pour s’enrichir de manière rapide et démesurée. Certains agents économiques perçoivent le marché boursier comme un jeu dans lequel ils peuvent « parier » pour ou contre la hausse du marché. Ils espèrent ainsi générer de forts revenus en contrepartie d'une opération très risquée, c’est ce qu’on appelle la « spéculation ».</p>
      </div>
    </div>

    <div class="card w-75 mx-auto mb-3 card_content">
      <div class="card-body">
        <h3 class="card-title">Et surtout d'où ça vient ? </h3>
        <h4 class="card-subtitle mb-2 text-muted">Un petit point historique.</h4>
        <div class="text_image">
          <p class="card-text">Historiquement, les activités de courtage existent depuis l'apparition des courtiers de change en France au XIIe siècle. Ils étaient chargés de contrôler et réguler les dettes des communautés agricoles pour le compte des banques. C’est en 1409 à Bruges (Pays-bas), que la première Bourse physique voit le jour et s’institutionnalise, jusqu’à devenir la première place boursière du monde. Mais, malgré l’expansion et l’omniprésence du marché boursier, on se méfie toujours des retombées économiques d’une chute de la bourse. On garde particulièrement en mémoire, la période de 1637, où les dangers de la bourse furent exposés, avec l’explosion de la première bulle spéculative (cf. I.3.a.) de la tulipe.</p>
          <img src="assets/tulipomanie.jpg" alt="tulipomanie">
        </div>
        <a href="https://fr.wikipedia.org/wiki/Tulipomanie" class="card-link">En savoir plus sur le crash des tulipes.</a>
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
