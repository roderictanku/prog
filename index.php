
<?php
session_start();
?>
<!DOCTYPE html>

<!-- Created By CodingNepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">STR-<span>power.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Accueil </a></li>
                <li><a href="#about" class="menu-btn">A Propos de </a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Competences</a></li>
                <li><a href="#teams" class="menu-btn">Nos clients</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
                <li><a href="index1.php" class="menu-btn">inscription</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Welcome</div>
                <div class="text-2">Creations et hebergement des sites web</div>
                <div class="text-3">STR <span class="typing"></span></div>
                <a href="#contact">engagez nous</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">A propos de nous</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/str.png" alt="">
                </div>
                <div class="column right">
                    <div class="text">STR<span class="typing-2"></span></div>
                    <p>La STR a été créée en 2021 par un jeune élève de la classe de terminale Ti(technologie de l’information) du lycée bilingue de Nkongsamba le nommé <b>suntchueng tanku roderic </b>cette société a pour objectif d’initiés les entreprises dans le commerce digital.</p>
                    <a href="#">commentez</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Nos services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Création de sites web</div>
                        <p>La création et la conception de site web ou web design est la conception de l'interface web : l’architecture interactionnelle, l’organisation des pages, l’arborescence et la navigation dans un site web</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Publicité</div>
                        <p>
                            Activité ayant pour but de faire connaître une marque, d'inciter le public à acheter un produit, à utiliser tel service, etc. ; ensemble des moyens et techniques employés à cet effet (abréviation familière pub) : Agence de publicité..</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Conception d'applications</div>
                        <p>La conception de logiciel met en œuvre un ensemble d'activités qui à partir d'une demande d'informatisation d'un processus permettent la conception, l'écriture et la mise au point d'un logiciel ...</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">Nos competences</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text"></div>
                    <p>Nos competences en matiere de developpement est telement vaste mais voici quelque technologies les plus utiliser dans nos travaux.</p>
                    <a href="#skills">plus</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>80%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>50%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>70%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Nos clients</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/profile-1.png" alt="">
                        <div class="text">ROBOTECH</div>
                        <p>nous somme satisfaire grace a la STR.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-2.jfif" alt="">
                        <div class="text">SELF-TECH</div>
                        <p>chez STR on trouve toujour la solution adequate.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-3.jfif" alt="">
                        <div class="text">YOLEE-SCHOP</div>
                        <p>Nous remiecions la STR de nous avoir satisfaire.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-4.jfif" alt="">
                        <div class="text">BOOLY-SOLUTION</div>
                        <p>Nous remiecions la STR de nous avoir satisfaire.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-5.jfif" alt="">
                        <div class="text">ALL-SCIENCE</div>
                        <p>chez STR on trouve toujour la solution adequate.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Nous Contactez</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Entrez en contact</div>
                    <p></p>
                    <div class="icons">
                        <div class="row">
                            <i class="fab fa-facebook"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">RodericTanku</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-phone"></i>
                            <div class="info">
                                <div class="head">+237-73-55-61-67</div>
                                <div class="sub-title">+237-81-07-80-39</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">strcinois@gmail.com</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="info">
                                    <div class="head"></div>
                                    <div class="sub-title">Nkongsamba-cameroun</div>
                                </div>
                            </div>
                        </div>
                            <div class="row">
                                <i class="fas fa-clock"></i>
                                <div class="info">
                                    <div class="head"></div>
                                    <div class="sub-title">24h/24 et 7jour/7</div>
                                </div>
                            </div>
                           
                       
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Envoyez un mesage</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Nom" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="object" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>realiser par<a href="#">RodericTanku</a> | <span class="far fa-copyright"></span> 2022 tout droit resever.</span>
    </footer>

    <script src="script.js"></script>
</body>
</html>
<?php
session_destroy();
?>