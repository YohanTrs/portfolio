<?php
include('header.php');
?>
    <main class="resumain">
        <!-- slider 1 -->
        <div on="resumeDrag()" class="resume-slider opacity" id="slider1">
            <nav class="nav-resume">
                <ul class="flex align-center justify-between pd1">
                    <li class="color-blue">Profil et objectif</li>
                    <li>Hard skills</li>
                    <li>Soft skills</li>
                    <li>Diplômes / Formations</li>
                    <li>Expérience professionnelle</li>
                    <li>Langues et centres d'intérêts</li>
                </ul>
           </nav>
           <div class="flex main-resume">
                <div class="resume-left flex column align-center justify-between">
                    <img class="resume-img ri1" src="media/img/parcours/objectifs.webp" alt="image profil et objectifs">
                </div> 
                <div class="resume-right rr1 flex column justify-center gap12" id="bgs1">
                    <h2>Profil</h2>
                    <h3>
                        En reconversion professionnelle de chauffeur routier,
                        passionné d’informatique depuis mon enfance,
                        autodidacte et en cours d’obtention du
                        Titre Professionnel Développeur Web et Web Mobile
                    </h3>
                    <h2>Objectif</h2>
                    <h3>
                        Je suis actuellement à la recherche d’une alternance
                        pour la formation de Concepteur Développeur d’applications,
                        à partir du 15/05/2024.
                    </h3>
                    <div class="resume-nav flex justify-between align-center">
                        <img class="prev" src="media/img/parcours/circle-arrow-left-solid 1.png" alt="Flèche gauche">
                        <div class="flex resume-select">
                            <div class="white-line bg-blue"></div>
                            <div class="white-line"></div>
                            <div class="white-line"></div>
                            <div class="white-line"></div>
                            <div class="white-line"></div>
                            <div class="white-line"></div>
                        </div>
                        <img class="next" src="media/img/parcours/circle-arrow-left-solid 2.png" alt="Flèche droite">
                    </div>
                </div>  
           </div>
        </div>
        <!-- slider 2 -->
        <div class="resume-slider opacity" id="slider2">
            <nav class="nav-resume">
                <ul class="flex align-center justify-between pd1">
                    <li>Profil et objectif</li>
                    <li class="color-blue">Hard skills</li>
                    <li>Soft skills</li>
                    <li>Diplômes / Formations</li>
                    <li>Expérience professionnelle</li>
                    <li>Langues et centres d'intérêts</li>
                </ul>
           </nav>
           <div class="flex main-resume"> 
                <div class="resume-right  rr2 flex column justify-center gap12" id="bgs2">
                    <h2 class="bbb text-center" >Hard skills</h2>
                    <div class="hscol flex justify-evenly gap25">
                        <div class="hstop flex column gap12">   
                            <ul>
                                <li class="slider2-title">
                                    <h3>Dev web front-end</h3>
                                </li>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>Bootstrap</li>
                                <li>Wordpress + plugins</li>
                                <li>Javascript</li>
                                <li>Jquery</li>
                            </ul>
                            <ul>
                                <li class="slider2-title"><h3>Apps</h3></li>
                                <li>Vscode</li>
                                <li>Xampp</li>
                                <li>Github</li>
                                <li>IA - ChatGPT - Dall-E ..</li>
                                <li>Phpmyadmin</li>
                            </ul>
                            <ul>
                                <li class="slider2-title"><h3>Design</h3></li>
                                <li>Figma</li>
                                <li>Canva</li>
                            </ul>
                        </div>
                        <div class="hsbottom flex column gap12">
                            <ul>
                                <li class="slider2-title"><h3>Dev web back-end</h3></li>
                                <li>MySQL</li>
                                <li>NoSQL</li>
                                <li>UML</li>
                                <li>PHP</li>
                                <li>Laravel</li>
                            </ul>
                            <ul>
                                <li class="slider2-title"><h3>Divers</h3></li>
                                <li>Composer</li>
                                <li>Terminal</li>
                                <li>Suite office</li>
                                <li>Montage PC</li>
                                <li>Montage vidéo</li>
                            </ul>
                            <ul>
                                <li class="slider2-title"><h3>Roadmap 2024</h3></li>
                                <li>Nodejs</li>
                                <li>React</li>
                                <li>Typescript</li>
                            </ul>
                        </div>
                    </div>
                    <div class="resume-nav flex justify-between align-center">
                        <img class="prev" src="media/img/parcours/circle-arrow-left-solid 1.png" alt="Flèche gauche">
                        <div class="flex resume-select">
                            <div class="white-line"></div>
                            <div class="white-line bg-blue"></div>
                            <div class="white-line"></div>
                            <div class="white-line"></div>
                            <div class="white-line"></div>
                            <div class="white-line"></div>
                        </div>
                        <img class="next" src="media/img/parcours/circle-arrow-left-solid 2.png" alt="Flèche droite">
                    </div>
                </div>
                <div class="resume-left flex column align-center justify-between">
                    <img ondrag="resumeDrag()" class="resume-img ri2" src="media/img/parcours/hardskills.png" alt="image Hard skills">
                </div>  
           </div>
        </div>
        <!-- slider 3 -->
        <div class="resume-slider opacity" id="slider3">
            <nav class="nav-resume">
                <ul class="flex align-center justify-between pd1">
                    <li>Profil et objectif</li>
                    <li>Hard skills</li>
                    <li class="color-blue">Soft skills</li>
                    <li>Diplômes / Formations</li>
                    <li>Expérience professionnelle</li>
                    <li>Langues et centres d'intérêts</li>
                </ul>
           </nav>
           <div class="flex main-resume">
                <div class="resume-left flex column align-center justify-between">
                    <img ondrag="resumeDrag()" class="resume-img ri3" src="media/img/parcours/softskills.png" alt="image profil et objectifs">
                </div> 
                <div class="resume-right rr3 flex column justify-center gap12" id="bgs3">
                    <h2>Soft skills</h2>
                    <div>
                        <div>
                            <h3>Rigoureux</h3>
                            <ul><li>Code organisé, commenté et indenté</li></ul> 
                        </div>
                        <div>
                            <h3>Créatif</h3>
                            <ul><li>Adepte de brainstorming et de design UX / UI</li></ul> 
                        </div>
                        <div>
                            <h3>Ponctuel</h3>
                            <ul><li>Je porte une attention bien particulière concernant la ponctualité.</li></ul> 
                        </div>
                        <div>
                            <h3>Esprit d'analyse et logique</h3>
                            <ul><li>Très bonnes capacités d’analyse, de raisonnement et de traitement de problèmes divers.</li></ul> 
                        </div>
                        <div>
                            <h3>Développement personnel</h3>
                            <ul><li>Fervent pratiquant, je suis animé par la constante envie d’obtenir de nouvelles compétences</li></ul> 
                        </div>
                    </div>
                    <div class="resume-nav flex justify-between align-center">
                        <img class="prev" src="media/img/parcours/circle-arrow-left-solid 1.png" alt="Flèche gauche">
                        <div class="flex resume-select">
                            <div class="white-line"></div>
                            <div class="white-line"></div>
                            <div class="white-line bg-blue"></div>
                            <div class="white-line"></div>
                            <div class="white-line"></div>
                            <div class="white-line"></div>
                        </div>
                        <img class="next" src="media/img/parcours/circle-arrow-left-solid 2.png" alt="Flèche droite">
                    </div>
                </div>  
           </div>
        </div>
        <!-- slider 4 -->
        <div class="resume-slider opacity" id="slider4">
            <nav class="nav-resume">
                <ul class="flex align-center justify-between pd1">
                    <li>Profil et objectif</li>
                    <li>Hard skills</li>
                    <li>Soft skills</li>
                    <li class="color-blue">Diplômes / Formations</li>
                    <li>Expérience professionnelle</li>
                    <li>Langues et centres d'intérêts</li>
                </ul>
           </nav>
           <div class="flex main-resume"> 
                <div class="resume-right rr4 flex column justify-center gap12" id="bgs4">
                    <h2>Diplômes et formations</h2>
                    <div>
                        <h3>Titre Professionnel Développeur Web et Web Mobile -</h3>
                        <span class="underline">SJT Formation Creil (60)</span><br>
                        <strong>En cours</strong> 
                    </div>
                    <div>
                        <h3>Titre Professionnel Développeur Web et Web Mobile -</h3>
                        <span class="underline">Formation en ligne</span><br>
                        <strong>En cours - en complémentaire</strong>
                    </div>
                    <div>
                        <h3>Classes militaires - </h3>
                        <span class="underline">Ecole de gendarmerie de Fontainebleau (77)</span><br>
                        <strong>2013</strong>
                    </div>
                    <div>
                        <h3>Baccalauréat STI génie électronique -</h3>
                        <span class="underline"> Lycée Jean monnet Crépy en valois (60)</span><br>
                        <strong>2009</strong>
                    </div>
                    <div class="resume-nav flex justify-between align-center">
                        <img class="prev" src="media/img/parcours/circle-arrow-left-solid 1.png" alt="Flèche gauche">
                        <div class="flex resume-select">
                            <div class="white-line"></div>
                            <div class="white-line"></div>
                            <div class="white-line"></div>
                            <div class="white-line bg-blue"></div>
                            <div class="white-line"></div>
                            <div class="white-line"></div>
                        </div>
                        <img class="next" src="media/img/parcours/circle-arrow-left-solid 2.png" alt="Flèche droite">
                    </div>
                </div>
                <div ondrag="resumeDrag()" class="resume-left flex column align-center justify-between">
                    <img class="resume-img ri4" src="media/img/parcours/diplômes.webp" alt="image profil et objectifs">
                </div>  
           </div>
        </div>
        <!-- slider 5 -->
        <div class="resume-slider opacity" id="slider5">
            <nav class="nav-resume">
                <ul class="flex align-center justify-between pd1">
                    <li>Profil et objectif</li>
                    <li>Hard skills</li>
                    <li>Soft skills</li>
                    <li>Diplômes / Formations</li>
                    <li class="color-blue">Expérience professionnelle</li>
                    <li>Langues et centres d'intérêts</li>
                </ul>
           </nav>
           <div class="flex main-resume">
                <div class="resume-left flex column align-center justify-between">
                    <img ondrag="resumeDrag()" class="resume-img ri5" src="media/img/parcours/expérience-pro.webp" alt="image profil et objectifs">
                </div> 
                <div class="resume-right rr5 flex column justify-center gap12" id="bgs5">
                    <h2>Expérience professionnelle</h2>
                    <div>
                        <ul>
                            <li>
                                <strong>Formation développeur Web et Web Mobile</strong><br>
                                <em>SJT formation Nogent sur Oise (60)</em>
                                <p>Septembre 2023 - Mai 2024</p>
                            </li>
                            <li>
                                <strong>Chauffeur Routier national puis régional</strong><br>
                                <em> Transports Garnier / Sysco / Commere </em>
                                <p> Septembre 2019 - Août 2023</p>
                            </li>
                            <li>
                                <strong>Préparateur de commande / Réceptionnaire</strong><br>
                                <em>CNH / Sofadi Tiaso</em>
                                <p>Décembre 2015 - Septembre 2019</p>
                            </li>
                            <li>
                                <strong>Gendarme</strong><br>
                                <em>Groupement de gendarmerie d’Orléans (45)</em>
                                <p>Septembre 2013 - Septembre 2015</p>
                            </li>
                            <li>
                                <strong>Employé polyvalent/Manutentionnaire/Hôte de caisse</strong><br>
                                <em>Postes divers et variés.</em>
                                <p>Septembre 2009 - Septembre 2013</p>
                            </li>
                        </ul>
                    </div>
                    <div class="resume-nav flex justify-between align-center">
                        <img class="prev" src="media/img/parcours/circle-arrow-left-solid 1.png" alt="Flèche gauche">
                        <div class="flex resume-select">
                            <div class="white-line"></div>
                            <div class="white-line"></div>
                            <div class="white-line"></div>
                            <div class="white-line"></div>
                            <div class="white-line bg-blue"></div>
                            <div class="white-line"></div>
                        </div>
                        <img class="next" src="media/img/parcours/circle-arrow-left-solid 2.png" alt="Flèche droite">
                    </div>
                </div>  
           </div>
        </div>
        <!-- slider 6 -->
        <div class="resume-slider opacity" id="slider6">
            <nav class="nav-resume">
                <ul class="flex align-center justify-between pd1">
                    <li>Profil et objectif</li>
                    <li>Hard skills</li>
                    <li>Soft skills</li>
                    <li>Diplômes / Formations</li>
                    <li>Expérience professionnelle</li>
                    <li class="color-blue">Langues et centres d'intérêts</li>
                </ul>
           </nav>
           <div class="flex main-resume"> 
                <div class="resume-right rr6 flex column justify-center gap12" id="bgs6">
                    <h2>Langues</h2>
                    <div>
                        <div class="flex">
                            <strong>Français -</strong>
                            <p>natif</p>
                        </div>
                        <div class="flex">
                            <strong>Anglais -</strong>
                            <p>très bon niveau lu, écrit, parlé et technique</p>
                        </div>
                        <div class="flex">
                            <strong>Espagnol -</strong>
                            <p>niveau correct lu, écrit et parlé</p>
                        </div>
                    </div>
                    <h2>Centres d'intérêts</h2>
                    <ul>
                        <li>informatique</li>
                        <li>Nouvelles technologies</li>
                        <li>Voitures anciennes</li>
                        <li>Roadtrips en moto</li>
                        <li>Jeux vidéos</li>
                    </ul>
                    <h2>Permis</h2>
                    <p>Voiture, moto, remorque, poids-lourd et semi-remorque</p>
                    <div class="resume-nav flex justify-between align-center">
                        <img class="prev" src="media/img/parcours/circle-arrow-left-solid 1.png" alt="Flèche gauche">
                        <div class="flex resume-select">
                            <div class="white-line"></div>
                            <div class="white-line"></div>
                            <div class="white-line"></div>
                            <div class="white-line"></div>
                            <div class="white-line"></div>
                            <div class="white-line bg-blue"></div>
                        </div>
                        <img class="next" src="media/img/parcours/circle-arrow-left-solid 2.png" alt="Flèche droite">
                    </div>
                </div>
                <div ondrag="resumeDrag()" class="resume-left flex column align-center justify-between">
                    <img class="resume-img ri6" src="media/img/parcours/loisirs.webp" alt="image profil et objectifs">
                </div>  
           </div>
        </div>
    </main>
    <script async src="./media/js/resume.js"></script>
    <?php
    include('footer.php');
    ?>
