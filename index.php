<!doctype html>
<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Portfolio de Florent Diabi - BTS SIO SLAM">
        <meta name="author" content="Florent Diabi">
        <link rel="icon" href="favicon.ico">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"           
              rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <title>Portfolio de Florent Diabi</title>
    </head>

    <body id="page-top" class="index">
        <!-- Navigation -->
        <nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-md">
            <div class="container">
                <button type="button" class="navbar-toggler" data-toggle="collapse"
                        data-target="#navbar" aria-controls="navbar">
                    <span class="sr-only">Navigation raccourcie</span>
                </button>
                <a class="navbar-brand" href="#">Mon portfolio</a>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">
                                <span class="fa fa-home"></span> Accueil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#competences" class="nav-link">
                                <span class="fa fa-graduation-cap"></span> Compétences
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#passions" class="nav-link">
                                <span class="fas fa-brain"></span> Passions
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link"
                               data-toggle="dropdown" role="button">
                                <span class="fa fa-list-alt"></span> Réalisations <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu" style="background-color: #2c3e50;">
                                <li role="presentation" class="dropdown-header dropdown-item">
                                    En autonomie</li>
                                <li role="presentation" class="dropdown-item">
                                    <a role="menuitem" href="pages/projetgsb.html">Projet GSB</a>
                                </li>
                                <li role="presentation" class="dropdown-item">
                                    <a role="menuitem" href="pages/deuxiemeprojet.html">2ème PROJET</a>
                                </li>
                                <li role="presentation" class="dropdown-divider"></li>
                                <li role="presentation" class="dropdown-header dropdown-item">
                                    En entreprise</li>
                                <li role="presentation" class="dropdown-item">
                                    <a role="menuitem" href="pages/premierstage.html">Stage de 1ère année</a>
                                </li>
                                <li role="presentation" class="dropdown-item">
                                    <a role="menuitem" href="deuxiemestage.html">Stage de 2ème année</a>
                                </li>


                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link"><span class="fa fa-envelope"></span>
                                Me contacter
                            </a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>

        <!-- Header -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="intro-text">
                            <span class="name">Diabi Florent</span>
                            <span class="skills">Jeune développeur de 19 ans, passioné d'informatique depuis toujours avec la volonté de devenir professionnel dans ce milieu</span>
                            <hr class="star-light">
                        </div>
                    </div>
                </div>

            </div>
        </header>

        <!-- Section Compétences -->
        <section id="competences">
            <div class="container">            
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Compétences</h2>
                        <hr class="star-primary">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 center-block about-item">                                                    
                        <article class="about-item-One">
                            <header>
                                <h3>Programmation Objet</h3>
                            </header>
                            <p>
                                Maîtrise de la programmation orientée objet et de ses différents composants en PHP (Symfony) et en C#. 
                                Apprentissage sous forme de TP et de projets.
                            </p>
                        </article>   
                    </div>
                    <div class="col-sm-4 about-item ">


                        <article class="about-item-Two">
                            <header>
                                <h3>Conception Base de Données</h3>
                            </header>
                            <p>
                                Maîtrise de la conception d'une base de données et de model conceptuel de données et du langage SQL.
                                Apprentissage sous forme de TP et de projets.
                            </p>
                        </article>
                    </div>
                    <div class="col-sm-4 about-item ">


                        <article class="about-item-Three">
                            <header>
                                <h3>Notions de cybersécurité</h3>
                            </header>
                            <p>
                                Sensibilisé la cybersécurité, au Règlement Général de la Protection des données et aux codes de la propriété intellectuelle. 
                            </p>
                        </article>
                    </div>               
                </div>
                <div class="text-center btn-style double-line">
                    <div class="btn-styleLine">
                        <a href="images/cv/CV DIABI Florent.pdf" download="CV DIABI Florent.pdf" class="btn btn-lg btn-outline">
                            <i class="fa fa-fw fa-download"></i> Télécharger mon CV
                        </a>
                    </div>
                </div>
            </div>       
        </section>

        <!-- My Likes Grid Section -->
        <section id="passions">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Passions</h2>
                        <hr class="star-primary">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 portfolio-item">
                        <a class="portfolio-link text-center" data-toggle="modal">
                            <span class="fa fa-fw fa-laptop" aria-hidden="true" title="Ce logo représente le fait que j'adore l'informatique.
                                  "></span>
                        </a>
                        <article class="portfolio-item-Two">
                            <header>
                                <h3>Informatique</h3>
                            </header>
                            <p>
                                Cette passion pour l'informatique est présente depuis que je suis tout petit, elle a évidemment commencé par les jeux vidéos avant d'évoluer vers la
                                volonté de s'intéresser à comment les choses sont faites et ainsi découvir le développement. 

                            </p>
                        </article>                    
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <a  class="portfolio-link text-center" data-toggle="modal">
                            <span class="fa fa-fw fa-headphones" aria-hidden="true" title="Ce logo représente le fait que j'adore la musique
                                  "></span>
                        </a>
                        <article class="portfolio-item-One">
                            <header>
                                <h3>Musique</h3>
                            </header>
                            <p>
                                J'apprécie globalement tout style de musique, des années 80 au rap en passant par le rock, elle permet de s'évader quelques instants ou de se motiver d'autant plus.
                                Avec une passion pour la culture Vikings et leurs chants de guerre.
                            </p>
                        </article>                    
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <a class="portfolio-link text-center" data-toggle="modal">
                            <span class="fa fa-bicycle" aria-hidden="true" title="Ce logo représente le fait que je suis passionné par le sport
                                  "></span>
                        </a>
                        <article class="portfolio-item-Three">
                            <header>
                                <h3>Sport</h3>
                            </header>
                            <p>
                                Ma passion pour le sport vient depuis que je suis tout petit, en cherchant un sport je voulais d'abord "courir sur la piste orange" (athlétisme) étant trop jeune
                                je me suis rabattu sur la même passion que mon papa, le cyclisme. Cela fait maintenant presque 15 ans que je parcours des kilomètres sur les routes.
                            </p>
                        </article>                    
                    </div>
                </div>
            </div>
        </section>
        <div>
            <hr class="loc-hr">
        </div>


        <!-- Footer -->
        <footer id="contact" class="text-center">
            <div class="footer-above">
                <div class="container">
                    <div class="row">
                        <div class="footer-col col-md-4">
                            <h3>Mon adresse</h3>
                            <p>760 chemin des bonnes herbes, résidence le Vallon des Bonnes Herbes, Toulon</p>
                        </div>
                        <div class="footer-col col-md-4">
                            <h3>Réseaux Sociaux</h3>
                            <ul class="list-inline">
                                <li>
                                    <a href="https://www.instagram.com/florent_diabi/?hl=fr" target="_blank" class="btn-social btn-outline" alt="Instagram" title="Instagram">
                                        <i class="fa fa-fw fa-instagram" aria-hidden="true"></i>
                                        <span class="sr-only">Instagram</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/Glary_" target="_blank" class="btn-social btn-outline" 
                                       alt="Twitter" title="Twitter">
                                        <i class="fa fa-fw fa-twitter" aria-hidden="true"></i>
                                        <span class="sr-only">twitter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/florent-diabi-752b58203/" target="_blank" class="btn-social btn-outline" 
                                       alt="Twitter" title="Twitter">
                                        <i class="fa fa-fw fa-linkedin" aria-hidden="true"></i>
                                        <span class="sr-only">Linkedin</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-col col-md-4">
                            <h3>Me contacter</h3>
                            <ul class="list-inline">
                                <li>
                                    <a href="Tel:07 69 67 79 49" class="btn-social btn-outline" alt="Mon numéro de téléphone" 
                                       title="+33 7 69 67 79 49">
                                        <i class="fa fa-fw fa-phone" aria-hidden="true"></i>
                                        <span class="sr-only">Mon numéro de téléphone</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:diabi.florent@gmail.com" class="btn-social btn-outline" alt="Mon adresse mail" 
                                       title="Mail : diabi.florent@gmail.com">
                                        <i class="fa fa-fw fa-envelope" aria-hidden="true"></i>
                                        <span class="sr-only">Mon adresse mail</span>
                                    </a>
                                </li>
                            </ul>
                            <p>Merci d'utiliser ces coordonnées pour un contact professionnel.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-below">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            Copyright &copy; Florent DIABI 2021
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bouton de retour en haut de page -->
        <div class="scroll-top page-scroll visible-xs visible-sm">
            <a class="btn btn-primary" href="#page-top">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>
    </body>

</html>