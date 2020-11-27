<?php include "header.php"; ?>

    <h1 class="w-auto mx-auto mb-5 text-white text-center" style="margin-top: -200px">Le fonctionnement technique de la bourse</h1>

    <!-- à copier-coller pour chaque partie -->
    <div class="card w-75 mx-auto mb-3 card_content">
      <div class="card-body">
        <h3 class="card-title">La Bourse : comment ça marche ?</h3>
        <h4 class="card-subtitle mb-2 text-muted">Les places boursières</h4>
        <p class="card-text">Une place financière est une région ou une ville possédant un emplacement stratégique pour l'industrie financière. Il s'agit d'un endroit où divers participants du secteur financier, tels que des banques, des sociétés de commerce, des marchés boursiers et d'autres institutions, sont concentrés dans une seule zone.
            <br>Voici quelques exemples de place boursière dans le monde : </p>

          <p class="row justify-content-around">
              <a class="btn btn-outline-info col-1" data-toggle="collapse" href="#NYSE" role="button" aria-expanded="false" aria-controls="NYSE">NYSE</a>
              <button class="btn btn-outline-info col-1" type="button" data-toggle="collapse" data-target="#LSE" aria-expanded="false" aria-controls="LSE">LSE</button>
              <button class="btn btn-outline-info col-1" type="button" data-toggle="collapse" data-target="#EURONEXT" aria-expanded="false" aria-controls="EURONEXT">EURONEXT</button>
              <button class="btn btn-outline-info col-1" type="button" data-toggle="collapse" data-target="#NASDAQ" aria-expanded="false" aria-controls="NASDAQ">NASDAQ</button>
              <button class="btn btn-outline-info col-1" type="button" data-toggle="collapse" data-target="#TSE" aria-expanded="false" aria-controls="TSE">TSE</button>
              <button class="btn btn-outline-info col-1" type="button" data-toggle="collapse" data-target="#SEHK" aria-expanded="false" aria-controls="SEHK">SEHK</button>
              <button class="btn btn-outline-info col-1" type="button" data-toggle="collapse" data-target="#SSE" aria-expanded="false" aria-controls="SSE">SSE</button>
              <button class="btn btn-outline-info col-1" type="button" data-toggle="collapse" data-target="#TSK" aria-expanded="false" aria-controls="TSK">TSX</button>
              <button class="btn btn-outline-info col-1" type="button" data-toggle="collapse" data-target="#FWD" aria-expanded="false" aria-controls="FWD">FWD</button>
          </p>
          <div class="row">
              <div class="col">
                  <div class="collapse multi-collapse" id="NYSE">
                      <div class="card card-body">
                          <img class="w-100" src="../assets/NYSE.png" alt="Logo NYSE"/><br>
                          <p class="text-center">Bourse de New York</p>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="collapse multi-collapse" id="LSE">
                      <div class="card card-body">
                          <img class="w-100" src="../assets/LSE.png" alt="Logo LSE"/><br>
                          <p class="text-center">London Stock Exchange</p>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="collapse multi-collapse" id="EURONEXT">
                      <div class="card card-body justify-content-center">
                          <img class="w-100" src="../assets/Euronext.png" alt="Logo Euronext"/><br>
                          <p class="text-center">Bourse de la Zone Euro</p>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="collapse multi-collapse" id="NASDAQ">
                      <div class="card card-body">
                          <img class="w-100" src="../assets/NASDAQ.png" alt="Logo NASDAQ"/><br>
                          <p class="text-center">Bourse des USA</p>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="collapse multi-collapse" id="TSE">
                      <div class="card card-body">
                          <img class="w-100" src="../assets/TSE.png" alt="Logo TSE"/><br>
                          <p class="text-center">Bourse de Tokyo</p>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="collapse multi-collapse" id="SEHK">
                      <div class="card card-body">
                          <img class="w-100" src="../assets/SEHK.png" alt="Logo SEHK"/><br>
                          <p class="text-center">Hong Kong Stock Exchange</p>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="collapse multi-collapse" id="SSE">
                      <div class="card card-body">
                          <img class="w-100" src="../assets/SSE.png" alt="Logo SSE"/><br>
                          <p class="text-center">Shanghai Stock Exchange</p>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="collapse multi-collapse" id="TSK">
                      <div class="card card-body">
                          <img class="w-100" src="../assets/TSX.svg" alt="Logo TSX"/><br>
                          <p class="text-center">Toronto Stock Exchange (Canada)</p>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="collapse multi-collapse" id="FWD">
                      <div class="card card-body">
                          <img class="w-100" src="../assets/FWD.png" alt="Logo FWD"/><br>
                          <p class="text-center">Bourse de Francfort</p>
                      </div>
                  </div>
              </div>
          </div>
          <h4 class="card-subtitle mb-2 text-muted">Les technologies utilisés en Bourse</h4>
          <div class="row">
              <img class="col-5" src="../assets/trading_avant.jpg" alt="Salle de trading avant"/>
              <p> => </p>
              <img class="col-5" src="../assets/salle_trading.jpg" alt="Salle de trading de nos jours"/>
          </div>
          <p class="card-text">Les marchés se sont grandement transformés depuis les années 80 et ceci en grande partie grâce aux évolutions technologiques. C’est l’apparition des ordinateurs, des réseaux, puis l’augmentation de la puissance de calcul de ces ordinateurs et le développement considérable des possibilités de communication entre ces derniers qui ont tout changé.
              <br>Puisque les marchés boursiers évoluent aujourd’hui en temps réel, la performance des ordinateurs et des réseaux est primordiale, de même les pannes sont intolérables et les marchés sont appelés à consacrer des ressources importantes à diagnostiquer toute imperfection de leur système. En effet le ralentissement des traitements et/ou de la diffusion de l’information ne serait-ce que de quelques secondes peut provoquer des pertes financières considérables chez certains opérateurs.
          </p>
          <p>
              Ainsi les prestataires de services informatiques prennent une place de plus en plus considérable au sein des marchés boursiers. Ils peuvent presque représenter le tiers du personnel (comme par exemple au sein du groupe SBF, même si les places boursières sous-traitent en général cette activité auprès de filiales ou de prestataires extérieurs.
              Certains prestataires sont parfois même incontournables lorsqu’ils possèdent des technologies propriétaires plus efficaces que la concurrence, ils ont alors un monopole.
          </p>
      </div>
    </div>
    <div class="card w-75 mx-auto mb-3 card_content">
        <div class="card-body">
            <h3 class="card-title">Quels sont les métiers de la bourse ?</h3>

            <div class="container">
                <div id="carouselContent" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active text-center p-4">
                            <h4 class="card-subtitle mb-2 text-muted">Brokers, les intermédiaires de la bourse</h4>
                            <img src="../assets/Broker.png" alt="Image de Leonardo Dicaprio dans 'Le loup de Wall Street'" style="border-radius: 10px;"/>
                            <h5 class="card-subtitle mb-2 text-muted"><em>Description du poste :</em></h5>
                            <p class="card-text">
                                "Broker" est un mot anglais correspondant au "courtier" en français mais dans le jargon financier, le mot de broker est devenu la norme. Il existe une multitude de broker selon les différents secteurs professionnels tels que le secteur automobile, l’immobilier, les assurances etc… mais tous ont le rôle intermédiaire entre les clients et les producteurs.
                                <br>Dans la bourse, le broker en bourse a pour but de gérer les comptes de ses clients, organiser la réception et la transmission d’ordres. Il facilite les échanges entre les différents traders en identifiant ceux qui offrent le meilleur prix pour une certaine quantité de produits, agissant ainsi comme un intermédiaire entre les parties prenantes.</p>
                            <h5 class="card-subtitle mb-2 text-muted"><em>Environnement de travail :</em></h5>
                            <p class="card-text">Avec l'expansion des nouvelles technologies, le métier s'est rénové pour devenir totalement numérique.
                                <br>Dorénavant, il existe de multitude de broker en ligne dont la fiabilité n'est plus remise en cause. Les opérations étant plus rapides et plus sécurisé avec les différents systèmes de cryptage, le broker nécessite dorénavant une aisance dans l'utilisation d'outils informatiques.
                            </p>
                        </div>
                        <div class="carousel-item text-center p-4">
                            <h4 class="card-subtitle mb-2 text-muted">Traders</h4>
                            <img src="../assets/trader.jpg" alt="image de Trader" height="300px" style="border-radius: 10px;"/>
                            <p class="card-text">Dans les marchés financiers, il existe une multitude de métiers pouvant aller de simples techniciens au gestionnaire de portefeuilles.
                                <br>Il est ainsi courant de distinguer 3 grandes catégories de métiers dans la finance : le Front-Office, le Middle-Office et le Back-Office.
                                <br>En bref, plus on est en avant, plus on est exposé aux risques et donc les compétences requises sont plus élevées.
                            </p>
                            <h5 class="card-subtitle mb-2 text-muted"><em>Description du poste :</em></h5>
                            <p class="card-text">Le métier de Trader est un des postes majeurs de la bourse puisqu'ils sont les exécutants du front-Office, aussi appelée "Opérateur de marché".
                                <br>En effet, le Trader a pour rôle d’acheter et de revendre des titres financiers en temps réel dans le but de générer un profit sur l'écart de prix entre les deux opérations. Ceux-ci étant difficile à déceler, le Trader est généralement spécialisé dans un marché spécifique, auquel il connaît les moindres variables pouvant impacter les prix.
                                <br>Il est donc constamment à l'affut d'opportunité, surveille et analyse l’évolution du marché et doit être prêt à tout moment de la journée à négocier les transactions.</p>
                            <h5 class="card-subtitle mb-2 text-muted"><em>Environnement de travail :</em></h5>
                            <p>En général, le trader travaille pour des grandes entreprises ou des institutions bancaires.
                                <br>Certains secteurs ont un besoin accru en activité de Trading. Par exemple, les agriculteurs peuvent avoir besoin de se couvrir contre les variations de prix des différentes matières premières, ils feront donc ainsi appelle aux Traders.
                                <br>Le secteur bancaire en a besoin pour se placer les capitaux investis par les particuliers afin de générer des plus-values. C'est ce qu'on appelle de l'investissement, mais comme nous l'avons vu dans la <a>partie I</a>, cela peut pencher vers la spéculation.
                            </p>
                        </div>
                        <div class="carousel-item text-center p-4">
                            <h4 class="card-subtitle mb-2 text-muted">Techniciens</h4>
                            <img src="../assets/Backoffice.jpg" style="border-radius: 10px;" height="300px" alt="image de S.A.V."/>
                            <h5 class="card-subtitle mb-2 text-muted"><em>Description du poste :</em></h5>
                            <p class="card-text">En bourse, les techniciens sont ceux travaillant dans la maintenance, l'entretien du matériel et assurent le bon fonctionnement des structures boursières tels que la mise à jour journalier des cours boursiers.
                                <br>Tous ces environnements constitue ce qu'on appelle le <em>"back-Office"</em>.
                            </p>
                            <h5 class="card-subtitle mb-2 text-muted"><em>Environnement de travail :</em></h5>
                            <p class="card-text">
                                Les techniciens de la bourse travaillent généralement aux sièges des institutions boursières. Mais face à la spécialisation constante des activités professionnelles, il est possible de trouver des sociétés spécialisées dans la maintenance des activités boursières.
                                <br>Malheureusement, ceux-ci sont voués à disparaitre en raison de la digitalisation constante des opérations. La gestion des cours se faisant de plus en plus automatique, il n'y a de moins en moins besoin de présence humaine.
                            </p>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="card w-75 mx-auto mb-3 card_content">
        <div class="card-body">
            <h3 class="card-title">Quelques études de cas</h3>
            <p class="card-text">La digitalisation des activités boursières a mené vers l'émergence de nouveaux moyens d'investir ou de spéculer. Les professionnels ont ainsi mis aux points différents techniques permettant soit d'améliorer leur méthode de Trading, soit améliorer leur prise de décision.
                <br> La complexité de ces nouvelles techniques réside dans les outils qu'ils utilisent quotidiennement tels qu'ordinateurs extrèmement puissants, mais résident également dans la complexité des programmes informatiques déployés demandant un nombre important d'ingénieurs et économiques.</p>
            <h4 class="card-subtitle mb-2 text-muted">Le Trading Haute Fréquence</h4>
            <p class="card-text">Le Trading Haute Fréquence (THF) est l'exécution à grande vitesse de transactions financières par des algorithmes informatiques.
                Son arrivée dans la bourse a permis de réaliser des gains colossaux pour les banques et entreprises l'ayant mis en place puisqu'elle joue sur la rapidité d'exécution des transactions se comptant en millisecondes. Elle a également assuré la bonne liquidité au marché, rendant ainsi la dynamique du marché boursier plus agréables aux professionnels.
                <br>Toutefois, elle ne présente pas que des avantages, le THF a également apporté son lot d'inconvénients avec lui :
                <ul>
                    <li>Sensible aux flashs crash</li>
                    <li>Technologie couteuse</li>
                    <li>Remplace les humains</li>
                </ul>
            Bien qu'intéressant et toujours rentable, le trading haute fréquence est une technique appelée à disparaître du fait de la difficulté et du coût croissant à être plus rapide que ses concurrents. De plus, certaines autorités appellent à une taxation sur les transactions boursières, ce qui pourrait venir sonner le coup de grâce pour le trading haute fréquence, qui base sa rentabilité sur des ordres nombreux et rapides.
            </p>
            <h4 class="card-subtitle mb-2 text-muted">Le Smart Beta</h4>
            <p class="card-text">Dans une recherche d’un investissement toujours meilleur et toujours plus rentable, les sociétés de Bourses ont développé un nouvel indice, ou plutôt un produit financier qui réplique les indices boursiers (groupe d'actions utilisé pour évaluer un secteur) et qui est censé permettre de limiter les pertes en cas de marché baissier et de bénéficier plus rapidement des hausses en cas de marché haussier. Cet indice miraculeux censé battre les performances du marché est créé de toute pièce. C’est ce que l’on appelle la gestion Smart Beta.</p>
        </div>
    </div>


<?php include "footer.php"; ?>
