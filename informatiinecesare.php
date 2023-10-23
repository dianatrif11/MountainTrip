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
    <link rel="stylesheet" href="css/informatiinecesare.css">
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
                <h1>Informatii necesare pentru o drumetie</h1>
            </div>



        </div>
    </header>
    <!--header-->

    <!--feautured section-->
    <main>
        <section class="section about" id="about">
            <div class="row container" style="display: flex">
                <div class="col">
                    <div class="title" style="color: #ac7e62;">
                        <h1>Cateva lucruri despre traseele care se gasesc in functie de zona din Romania</h1>
                    </div>
                    <p>
                        Romania este o tara binecuvantata cu variate forme de relief, avand o multime de trasee montane,
                        pentru toate gusturile. Putem gasi trasee montane pentru incepatori, cu o durata de cateva zeci
                        de minute, trasee lungi de cateva ore, perfecte pentru turistii experimentati si chiar trasee
                        extrem de dificile, nerecomandate iarna si accesibile doar alpinistilor.
                        Muntii Apuseni sunt, in general, putin abrupti, avand culmi domoale, accesibile oricui iubeste
                        natura si muntele. Aici se gasesc numeroase trasee pentru bicicleta si obiective carstice
                        spectaculoase, precum chei si pesteri. In muntii Bucegi gasim atat trasee usoare, potrivite
                        incepatorilor, cat si trasee dificile sau accesibile doar alpinistilor. Muntii Fagaras sunt
                        recomandati, de regula, turistilor experimentati, insa si aici gasim trasee pentru cei mai putin
                        antrenati, dar pregatiti pentru schimbarile rapide de vreme care pot aparea in acesti munti.

                    </p>
                </div>
            </div>
            <div class="container">
                <div class="title-wrap">
                    <span class="sm-title">Marcajele din Romania</span>
                    <h2 class="lg-title">Ce semnifica fiecare marcaj</h2>
                </div>

                <div class="about-row">
                    <div class="about-left my-2">
                        <img src="images/Marcaje.png" alt="about img">
                    </div>
                    <div class="about-right">

                        <p class="text">Banda albastra, galbena sau rosie, semnifica, de regula, trasee principale sau
                            de creasta.</p>
                        <p class="text">Triunghi albastru, galben sau rosu, semnifica, de regula, trasee secundare sau
                            catre un varf.</p>
                        <p class="text">Cruce albastra, galbena sau rosie, semnifica, de regula, trasee de legatura.</p>
                        <p class="text">Punct albastru, galben sau rosu, semnifica, de regula, trasee in circuit sau
                            dus-intors.</p>

                    </div>
                </div>
            </div>
        </section>
    </main>
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
                        <li><a style="color:#ffff;" href="izvorulmuntelui.php"> Izvorul Muntelui, Cabana Dochia</a>
                        </li>
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