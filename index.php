<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MountainTrip!</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fonts -->
    <link rel="stylesheet" href="font/fonts.css">
    <!-- normalize css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/utility.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/stylehead.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>
    <!--navbar-->
    <?php
    include 'top-nav.php';
    ?>
    <!--end navbar-->

    <!--header-->

    <header class="flex">
        <div class="container">
            <div class="header-title">
                <h1>Without new experiences, something inside of us sleeps.</h1>
                <p>We always discuss reaching the top of the mountain as the challenge.
                    But those that have been there know coming back down is the hardest part.
                </p>
            </div>



        </div>
    </header>
    <!--header-->

    <!--feautured section-->
    <section style="background-color:#D3D3D3" id="featured" class="py-4">
        <div class="container">
            <div class="title-wrap">
                <!--<span class="sm-title">Cele mai cautate trasee din fiecare categorie</span>-->
                <h2 class="lg-title">Cele mai cautate trasee din fiecare categorie</h2>
            </div>
            <div class="featured-row">
                <div class="featured-item my-2 shadow">
                    <img src="images/Izvorul_muntelui.jpg" alt="featured place">

                    <div class="featured-item-content">
                        <span>
                            <a href="izvorulmuntelui.php" style="color: #ffff;">
                                <i class="fas fa-map-marker-alt"></i>
                                Izvorul Muntelui, Cabana Dochia (durata: 4 ore)
                            </a>
                        </span>
                        <div>
                            <p class="text">Traseu usor</p>
                        </div>
                    </div>
                </div>
                <div class="featured-item my-2 shadow">
                    <img src="images/scarisoara.jpg" alt="featured place">
                    <div class="featured-item-content">
                        <span>
                            <a href="satulghetar.php" style="color: #ffff;">
                                <i class="fas fa-map-marker-alt"></i>
                                Satul Ghetar, Pestera Scarisoara (durata: 30 minute)
                            </a>
                        </span>
                        <div>
                            <p class="text">Rute la indemana oricui</p>
                        </div>
                    </div>
                </div>
                <div class="featured-item my-2 shadow">
                    <img src="images/Pietrosul.jpg" alt="featured place">
                    <div class="featured-item-content">
                        <span>
                            <a href="pietrosul.php" style="color: #ffff;">
                                <i class="fas fa-map-marker-alt"></i>
                                Borsa, Varful Pietrosu, Tarnita la Cruce (durata: 6-8 ore)
                            </a>
                        </span>
                        <div>
                            <p class="text">Trasee montane dificile, pentru experimentati</p>
                        </div>
                    </div>
                </div>
                <!--randul 2-->
                <div class="featured-item my-2 shadow">
                    <img src="images/Saua Baiului-Varful Leuca Mica-Valea Grecului Azuga/PeMeleaguri (1).jpg"
                        alt="featured place">
                    <div class="featured-item-content">
                        <span>
                            <a href="sauabaiului.php" style="color: #ffff;">
                                <i class="fas fa-map-marker-alt"></i>
                                Saua Baiului, Varful Leuca Mica, Valea Grecului-Azuga.
                            </a>
                        </span>
                        <div>
                            <p class="text">Trasee montane dificile, pentru experimentati</p>
                        </div>
                    </div>
                </div>
                <div class="featured-item my-2 shadow">
                    <img src="images/Cetea - Baile Romane - Piatra cetii/17-TRASEU-PIATRA-CETII.jpg"
                        alt="featured place">
                    <div class="featured-item-content">
                        <span>
                            <a href="cetea.php" style="color: #ffff;">
                                <i class="fas fa-map-marker-alt"></i>
                                Cetea, Baile Romane, Piatra Cetii.
                            </a>
                        </span>
                        <div>
                            <p class="text">Trasee montane dificile, pentru experimentati</p>
                        </div>
                    </div>
                </div>
                <div class="featured-item my-2 shadow">
                    <img src="images/hasmas.jpg" alt="featured place">
                    <div class="featured-item-content">
                        <span>
                            <a href="balan.php" style="color: #ffff;">
                                <i class="fas fa-map-marker-alt"></i>
                                Orasul Balan , Cabana Singuratica.
                            </a>
                        </span>
                        <div>
                            <p class="text">Trasee montane dificile, pentru experimentati</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--footer-->
    <footer style="color:#5b828e;" class="footer">
        <div class="row container">
            <div class="col">
                <a style="color:#ba9a88;font-size: 45px;" href="index.php" class="site-brand">
                    Mountain<span>Trip!</span>
                </a>

                <p class="text" style="color: #ffff;">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem
                    Ipsum has
                    been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                    galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                    the leap
                    into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>

            </div>
            <div class="col">
                <h2 style="color:#ba9a88;font-size: 30px;">Follow us on: </h2>
                <ul class="social-links">
                    <li>
                        <a style="color:#ffff;" href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a style="color:#ffff;" href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a style="color:#ffff;" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col">

                <div class="col">
                    <h2 style="color:#ba9a88;font-size: 30px;">Popular Places:</h2>
                    <ul>
                        <li><a style="color:#ffff;" href="izvorulmuntelui.php"> Izvorul Muntelui, Cabana Dochia</a></li>
                        <li><a style="color:#ffff;" href="satulghetar.php"> Satul Ghetar, Pestera Scarisoara </a></li>
                        <li><a style="color:#ffff;" href="pietrosul.php">Borsa, Varful Pietrosu, Tarnita la Cruce</a>
                        </li>
                        <li><a style="color:#ffff;" href="sauabaiului.php"> Saua Baiului, Varful Leuca Mica, Valea
                                Grecului, Azuga</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!--end of footer-->
    <!--js-->
    <script src="js/script.js"></script>
</body>

</html>