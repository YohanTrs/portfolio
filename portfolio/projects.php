<?php
include('header.php');
?>
     <main><!--Projet1 -->
        <div class="project-container project-container1 init-transition flex">
            <div class="project1 project-background opacity"></div>
            <div class="project-left pj1 flex column justify-center" id="minia1">
                <h1 id="project-h1">RenovAction</h1>
                <div class="responsive-project">
                    <h2>Projet personnel effectué dans le
                        cadre de ma formation au titre Professionnel Développeur Web et Web Mobile
                    </h2>
                    <h3>
                        C’est un site proposant des prestations de rénovation de véhicules anciens,
                        ainsi qu’un market place de pièces d’occasion.
                    </h3>
                </div>
              
            </div>
            <div class="project-right flex column" id="minia1">
                <div></div>
                <div class="thumbnail flex">
                    <div class="flex appear">
                        <img ondragstart="nextSlide()" class="thumb-pic" src="./media/img/projets/renovaction-small.png" alt="Miniature renovaction">
                        <img onclick="nextSlide()" class="thumb-hide" src="./media/img/projets/saga-small.png" alt="Miniature saga decor">
                    </div>
                </div>
                <div class="project-slider-container flex align-center">
                    <a href="https://github.com/YohanTrs/Projet-perso-SJT/tree/main/Projet%20perso"><button id="project-button" class="home-button color-white pd2">Lien Github</button></a>
                    <img class="icon prev" src="./media/img/projets/circle-arrow-left-solid(1).svg" alt="icône slider gauche">
                    <p>01 - 03</p>
                    <img class="icon next" src="./media/img/projets/circle-arrow-right-solid(1).svg" alt="icône slider droite">
                </div>
            </div>
        </div>
        <!--Projet2 -->
        <div class="project-container project-container2 init-transition flex">
            <div class="project-background opacity project2"></div>
            <div class="project-left flex column justify-center" id="minia2">
                <h1 id="project-h1">Saga Décor</h1>
                <h2>Projet de stage effectué dans le cadre de ma formation
                    au titre Professionnel Développeur Web et Web Mobile
                </h2>
                <h3>
                    site internet du groupe éponyme,
                    la société produit des décorations de bouteilles en verre.
                </h3>
            </div>
            <div class="project-right flex column">
                <div></div>
                <div class="thumbnail flex">
                    <div class="flex appear">
                        <img ondragstart="nextSlide()" class="thumb-pic" src="./media/img/projets/saga-small.png" alt="Miniature saga decor">
                        <img onclick="nextSlide()" class="thumb-hide" src="./media/img/projets/g-simulator-small.png" alt="Miniature g-simulator">
                    </div>
                </div>
                <div class="project-slider-container flex align-center">
                    <a href="https://github.com/Stage-SJT-YBDL/saga-decor"><button id="project-button" class="home-button color-white pd2">Lien Github</button></a>
                    <img class="icon prev" src="./media/img/projets/circle-arrow-left-solid(1).svg" alt="icône slider gauche">
                    <p>02 - 03</p>
                    <img class="icon next" src="./media/img/projets/circle-arrow-right-solid(1).svg" alt="icône slider droite">
                </div>
            </div>
        </div>
        <!--Projet3 -->
        <div class="project-container project-container3 init-transition flex">
            <div class="project-background opacity project3"></div>
            <div class="project-left flex column justify-center" id="minia3">
                <h1 id="project-h1">G-simulator</h1>
                <h2>Projet de groupe effectué dans le cadre de ma formation
                    au titre Professionnel Développeur Web et Web Mobile
                </h2>
                <h3>
                    C’est un site de vente de kits 
                    “prêt à jouer’ pour du gaming et de la simulation de course et virtuelle.
                </h3>
            </div>
            <div class="project-right flex column">
                <div></div>
                <div class="thumbnail flex">
                    <div class="flex appear">
                        <img ondragstart="nextSlide()" class="thumb-pic" src="./media/img/projets/g-simulator-small.png" alt="Miniature g-simulator">
                        <img onclick="nextSlide()" class="thumb-hide" src="./media/img/projets/renovaction-small.png" alt="Miniature renovaction">
                    </div>
                </div>
                <div class="project-slider-container flex align-center">
                    <a href="https://github.com/YohanTrs/Projet-de-groupe-SJT/tree/main/projet%20de%20groupe%20php"><button id="project-button" class="home-button color-white pd2">Lien Github</button></a>
                    <img class="icon prev" src="./media/img/projets/circle-arrow-left-solid(1).svg" alt="icône slider gauche">
                    <p>03 - 03</p>
                    <img class="icon next" src="./media/img/projets/circle-arrow-right-solid(1).svg" alt="icône slider droite">
                </div>
            </div>
        </div>
    </main>
    <script async src="./media/js/projects.js"></script>
    <?php
    include('footer.php');
    ?>
    