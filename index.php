<?php
    include '_inc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="stylesheet" href="style.css">
        <title> CV Oihana Coulaud</title>
    </head>
    <body>
        <header>
            <h1> CV Oihana COULAUD</h1>
        </header>
        <section>
            <div class="photo">
                <img src="image/photo_cv.jpg" alt="Photo identité">
            </div>
            <div class="presentation">
                <h2> Qui suis-je ?</h2>       
                    <p>Oihana COULAUD</p>
                    <p>Née le 14 mars 1998 (22 ans)</p>
                    <p>Permis B (véhiculé)</p>
                    <p>Permis A2 (véhiculé) </p>
                    <p>Adresse : 221 Avenue Lucien Cohen, Le Jardin des Alpilles, Villa 48 <br/> 13 430 EYGUIERES </p>
                    <p>Téléphone : 06 02 50 00 20 </p>
                    <br>
                    <div class="social">
                        <a href="www.linkedin.com/in/oihana-coulaud-112ab6180"><img src="image/lk.png" alt="Logo lk"></a>
                    </div>
                    <br>
                <a class="dwCV" href="#" download>Télécharger mon CV</a>
            </div>
            <div class="contact">
                <h2 class="contacter">ME CONTACTER</h2>
                <div class="contact-flex">
                    <div class="container">
                        
                    <?php
                    if(array_key_exists('errors',$_SESSION)){
                        echo implode('<br>', $_SESSION['errors']);
                    }
                
                    if(array_key_exists('success',$_SESSION)){
                        echo ('Votre email m\'a bien été transmit');
                    }
                    ?>

                        <form action="contact.php" method="POST" id="mecontacter">
                            
                            <?php $form = new Form(isset($_SESSION['inputs']) ? $_SESSION['inputs'] : []); 
                                echo $form->name('name', 'Nom : ');
                                echo $form->tel('tel', 'Tel : ');
                                echo $form->email('email', 'E-mail : ');
                                echo $form->textarea('message', 'Message : ');
                                echo $form->submit('Envoyer');
                            ?>

                        </form>
                    </div>
                </div>

            </div>
        </section>
        <section>
            <h2>Expériences professionnelles</h2>
            <div class="exp">
                <div class="exp-logo">
                    <img src="image/Logo_de_la_Française_des_jeux.svg.png" alt="logo_fdj">   
                </div>
                <div class="exp-info">
                    <h3>Immersion professionnelle : développeur informatique</h3>
                    <h4>la Française des jeux (Vitrolles 13)</h4>
                    <h4>5 au 16 août 2019</h4>
                </div>
                <div class="exp-desc">
                    <p>initiation à Linux et Python3, présentation des différents métiers du développement (DéveloppeurWeb,Front/BackEnd, IHM, UXdesigner...)</p>
                </div>
            </div>
            <div class="exp">
                <div class="exp-logo">
                    <img src="image/sdis13.jpg" alt="logo_sdis13">
                </div>
                <div class="exp-info">
                    <h3>Pompier Volontaire</h3>
                    <h4> Centre de Secours de Pélisanne</h4>
                    <h4>Depuis 2017</h4>
                </div>
                <div class="exp-desc">
                    <p>Standard, assistance aux personnes, extinction de feu, interventions diverses</p>
                </div>
            </div>
            <div class="exp">
                <div class="exp-logo">
                    <img src="image/partnaire.jpg" alt="logo_partnaire">
                </div>
                <div class="exp-info">
                    <h3>Intérimaire</h3>
                    <h4>Partnaire</h4>
                    <h4>Octobre 2018 - Août 2019</h4>
                </div>
                <div class="exp-desc">
                    <p>Tri de colis, préparation de commandes, manutention, gestion des stocks,réception et vérifications de véhicules, jockey voiture</p>
                </div>
            </div>
            <div class="exp">
                <div class="exp-logo">
                    <img src="image/mstm.png" alt="logo_mstm">   
                </div>
                <div class="exp-info">
                    <h3>Alternante : Animatrice HSE (Hygiène Sécurité Environnement</h3>
                    <h4>MSTM (Tarascon 13)</h4>
                    <h4>Septembre 2017 - Août 2018</h4>
                </div>
                <div class="exp-desc">
                    <p>Secteur d'activité : maintenance industrielle</p>
                    <p>Participation à la certification MASE, assistance à l’ingénieur HSE, animation HSE, visite de chantiers, sensibilisation (flashinfos/causeries), création de procédures/documents, mise à jour du Document Unique, rédaction d’audits, gestion et suivi santé sécurité du personnel</p>
                </div>
            </div>
            <div class="exp">
                <div class="exp-logo">
                    <img src="image/ucpa.jpg" alt="logo_ucpa">
                </div>
                <div class="exp-info">
                    <h3>Animatrice Surveilante de Baignade</h3>
                    <h4>UCPA</h4>
                    <h4>Etés 2016 - 2017</h4>
                </div>
                <div class="exp-desc">
                    <p>Animation d’activité ,travail en équipe, surveillance des baignades</p>
                </div>                
            </div>
        </section>
        <section>
            <h2>Formations</h2>
            <div class="exp">
                <div class="exp-logo">
                    <img src="image/afpa.jpg" alt="logo_afpa">
                </div>
                <div class="exp-info">
                    <h3>Développeur web / web mobile à l'AFPA Saint Jérome (Marseille 13)</h3>
                    <h4>Juin 2020 - Janvier 2021</h4>
                </div>
            </div>
            <div class="exp">
                <div class="exp-logo">
                    <img src="image/cesi.svg" alt="logo_cesi">
                </div>
                <div class="exp-info">
                    <h3>Développeur Informatique au CESI (Aix en Provence 13)</h3>
                    <h4>Novembre 2019 - Janvier 2020</h4>
                </div>
            </div>
            <div class="exp">
                <div class="exp-logo">
                    <img src="image/iut.png" alt="logo_cesi">
                </div>
                <div class="exp-info">
                    <h3>DUT Hygiène Sécurité Environnement en alternance (IUT La Ciotat 13)</h3>
                    <h4>2016 - 2018</h4>
                </div>
            </div>
            <div class="exp">
                <div class="exp-logo">
                    <img src="image/ecole.PNG" alt="logo_ecole">
                </div>
                <div class="exp-info">
                    <h3>Bac Santé Social (ST2S)</h3>
                    <h4>2014 - 2016</h4>
                </div> 
            </div>   
        </section>
        <section>
            <h2>Formations Complémentaires</h2>
            <div class="exp">
                <p>SSIAP 3, Sauveteur Secouriste du Travail (SST), Surveillant de Baignade, PSC1, PSE1, PSE 2, BAFA</p>
            </div>

        </section>
        <section>
            <h2>Compétences</h2>
            <h3 class="h3gauche">Professionnelles</h3>
            <div class="comp">
                <p>HTML/CSS</p>
                <div class="conteneur-barre"><span class="barre c50"></span></div>
            </div>
            <div class="comp">
                <p>PHP / MySQL</p>
                <div class="conteneur-barre"><span class="barre c50"></span></div>
            </div>
            <div class="comp">
                <p>Javascript</p>
                <div class="conteneur-barre"><span class="barre c10"></span></div>
            </div>
            <h3 class="h3gauche">Personnelles</h3>
            <div class="comp2">
                <p>Esprit d'équipe</p>
                <p>90%</p>
                <div class="conteneur-barre2"><span class="barre c90"></span></div>
            </div>
            <div class="comp2">
                <p>Adaptation</p>
                <p>85%</p>
                <div class="conteneur-barre2"><span class="barre c85"></span></div>
            </div>
            <div class="comp2">
                <p>Sérieux</p>
                <p>95%</p>
                <div class="conteneur-barre2"><span class="barre c95"></span></div>
            </div>
        </section>
        <section>
            <h2>Centre d'intéret</h2>
            <figure class ="interet">
                <img src ="image/moto.jpg" alt="moto">
                <figcaption>Moto</figcaption>
            </figure>
            <figure class ="interet">
                <img src ="image/baseball.jpg" alt="baseball">
                <figcaption>Baseball/Softball</figcaption>
            </figure>
            <figure class ="interet">
                <img src ="image/boxe.jpeg" alt="boxe">
                <figcaption>Boxe</figcaption>
            </figure>
            <figure class ="interet">
                <img src ="image/spartan-race.jpg" alt="spartan">
                <figcaption>Course à pied</figcaption>
            </figure>
            <figure class ="interet">
                <img src ="image/musique.jpg" alt="musique">
                <figcaption>Musique</figcaption>
            </figure>
        </section>
        
        <footer>
            <p>Copyright Oihana Coulaud   2020</p>
        </footer>
    </body>
</html>

<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>
