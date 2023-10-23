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
    <link rel="stylesheet" href="css/mountainbike.css">
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
                    <h1>Trasee de realizat cu bicicleta</h1>
                </div>



            </div>
        </header>
        <!--header-->

        <!--feautured section-->
        <section id="featured" class="py-4">
            <div class="container">
                <div class="featured-row">
                    <div class="featured-item my-2 shadow">
                        <img src="images/Sinaia - Piatra Arsa - Babele - Vf. Omu/adi-ulici-wwzQKvY6PvA-unsplash.jpg"
                            alt="featured place">

                        <div class="featured-item-content">
                            <span>
                                <a href="sinaia.php" style="color: #ffff;">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Sinaia, Piatra Arsă, Babele, Vf. Omu (24 km, D+1700m)
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="featured-item my-2 shadow">
                        <img src="images/Toplita - Varful Retitis - Gura Haitii (Transcalimani)/cascada-toplita.jpg"
                            alt="featured place">
                        <div class="featured-item-content">
                            <span>
                                <a href="toplita.php" style="color: #ffff">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Toplita, Varful Retitis, Gura Haitii (Transcalimani) (60 km, D+1500 m)
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="featured-item my-2 shadow">
                        <img src="images/Sinaia - Saua Dichiului - Babele/Sinaia-Babele.jpg" alt="featured place">
                        <div class="featured-item-content">
                            <span>
                                <a href="sinaiasaua.php" style="color: #ffff">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Sinaia, Saua Dichiului, Babele (27 km, D+1380m)
                                </a>
                            </span>
                        </div>
                    </div>
                    <!--randul 2-->
                    <div class="featured-item my-2 shadow">
                        <img src="images/Campul lui Neag - Izvoarele Cernei - Cerna Sat/campulluineag.jpg"
                            alt="featured place">
                        <div class="featured-item-content">
                            <span>
                                <a href="campulluineag.php" style="color: #ffff;">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Campul lui Neag, Izvoarele Cernei, Cerna Sat
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="featured-item my-2 shadow">
                        <img src="images/Poiana pelegii - Gura Apei/Poiana Pelegii.jpg" alt="featured place">
                        <div class="featured-item-content">
                            <span>
                                <a href="guraapei.php" style="color: #ffff;">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Poiana Pelegii, Gura Apei
                                </a>
                            </span>
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

                    <p class="text" style="color: #ffff;">Lorem Ipsum is simply dummy text of the printing and
                        typesetting
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
                            <li><a style="color:#ffff;" href="izvorulmuntelui.php"> Izvorul Muntelui, Cabana Dochia</a>
                            </li>
                            <li><a style="color:#ffff;" href="satulghetar.php"> Satul Ghetar, Pestera Scarisoara </a>
                            </li>
                            <li><a style="color:#ffff;" href="pietrosul.php">Borsa, Varful Pietrosu, Tarnita la
                                    Cruce</a>
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