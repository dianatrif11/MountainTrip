<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MountainTrip!</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fonts -->
    <link rel="stylesheet" href="font/fonts.css">
    <!-- normalize css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/utility.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/route2.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.css" />
</head>

<body style="background-color:#fcfaf7;">
    <!--navbar-->
    <header class="header" id="header">
        <!-- Navigation -->
        <?php
        include 'top-nav.php';
        ?>


        <!-- Hero -->
        <div class="swiper-container slider-1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/Sinaia - Piatra Arsa - Babele - Vf. Omu/adi-ulici-wwzQKvY6PvA-unsplash.jpg" alt="" />
                </div>

                <div class="swiper-slide">
                    <img src="./images/Sinaia - Piatra Arsa - Babele - Vf. Omu/iuliu-illes-2ijarLKDrqc-unsplash.jpg" alt="hero image" />
                </div>

                <div class="swiper-slide">
                    <img src="./images/Sinaia - Piatra Arsa - Babele - Vf. Omu/mihai-lazar-edPg2SsV09E-unsplash.jpg" alt="hero image" />
                </div>
                <div class="swiper-slide">
                    <img src="./images/Sinaia - Piatra Arsa - Babele - Vf. Omu/miriana-doroban-u-Lpxk9g7jREE-unsplash.jpg" alt="hero image" />
                </div>

            </div>
        </div>

        <div class="content">
            <h1>
                Sinaia - Piatra Arsă - Babele - Vf. Omu (24 km, D+1700m)

            </h1>
        </div>

        <div class="arrows d-flex">
            <div class="swiper-prev d-flex">
                <i class="bx bx-chevron-left swiper-icon"></i>
            </div>
            <div class="swiper-next d-flex">
                <i class="bx bx-chevron-right swiper-icon"></i>
            </div>
        </div>

    </header>
    <!--feautured section-->
    <main>
        <section class="section about" id="about">
            <div class="row container" style="display: flex">
                <div class="col">
                    <div class="title" style="color: #ac7e62;">
                        <h1>Despre Traseu</h1>
                    </div>
                    <p>
                        Cel mai iubit traseu de mountain bike din zona este urcarea din Sinaia pana la Varful Omu, o
                        incercare prin care au trecut aproape toti iubitorii seriosi al acestui sport. Traseul e destul
                        de dificil, panta e mare, dar e accesibil si ciclistilor mai putin antrenati daca sunt pregatiti
                        sa impinga bicicleta ceva mai mult. Pentru cei ce nu au pregatirea fizica necesara, se poate
                        urca cu telecabina pana la Cota 2000 in Sinaia. Drumul pleaca de acolo pe platou, printre
                        jnepeni, pana la Babele de unde devine ceva mai dificil iar incepatorii vor avea ceva mai mult
                        de impins. Dar efortul nu e prea mare daca finalul inseamna sa ajungi cu bicicleta la peste 2500
                        m! Recomandam atentie maxima la coborare, mai ales in zona caldarii de sub Omu unde exista
                        riscul unei caderi in gol! Traseul e nerecomandat pe vreme rea!
                </div>
                <div class="col">

                    <p>
                    <div class="contact-left">
                        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4SZ5DWdMU4ISbPYchpQU4ZXilYIWIT_M">
                        </script>
                        <div style="overflow:hidden;height:400px;width:500px;">
                            <select id="mapType">
                                <option value="bike">With bike</option>
                                <option value="walk">Walking</option>
                            </select>
                            <div id="map" style="height:400px;width:500px;"></div>
                            <style>
                                #gmap_canvas img {
                                    max-width: none !important;
                                    background: none !important
                                }
                            </style>
                            <p>
                        </div>
                        <p>
                            <script type="text/javascript">
                                function init_map() {
                                    const directionsService = new google.maps.DirectionsService();
                                    const directionsRenderer = new google.maps.DirectionsRenderer();
                                    const map = new google.maps.Map(
                                        document.getElementById("map"), {
                                            zoom: 15,
                                        }
                                    );

                                    directionsRenderer.setMap(map);

                                    const onChangeHandler = function() {
                                        console.log((document.getElementById("mapType")).value)
                                        directionsService
                                            .route({
                                                origin: {
                                                    query: 'Sinaia, Romania',
                                                },
                                                destination: {
                                                    query: 'Vârful Omu, Romania',
                                                },
                                                waypoints: [{
                                                    location: 'Piatra Arsă,  Romania',
                                                    stopover: true,
                                                }, {
                                                    location: 'Babele,  Romania',
                                                    stopover: true,
                                                }],

                                                travelMode: (document.getElementById("mapType")).value ==
                                                    'bike' ? google.maps.TravelMode.BICYCLING : google.maps
                                                    .TravelMode.WALKING,
                                            })
                                            .then((response) => {
                                                directionsRenderer.setDirections(response);
                                            })
                                            .catch((e) => {

                                                console.log(e);
                                            });
                                    };

                                    (document.getElementById("mapType")).addEventListener(
                                        "change",
                                        onChangeHandler
                                    );

                                    directionsService
                                        .route({
                                            origin: {
                                                query: 'Sinaia, Romania',
                                            },
                                            destination: {
                                                query: 'Vârful Omu, Romania',
                                            },
                                            waypoints: [{
                                                location: 'Piatra Arsă,  Romania',
                                                stopover: true,
                                            }, {
                                                location: 'Babele,  Romania',
                                                stopover: true,
                                            }],

                                            travelMode: google.maps.TravelMode.WALKING,
                                        })
                                        .then((response) => {
                                            directionsRenderer.setDirections(response);
                                        })
                                        .catch((e) => {

                                            console.log(e);
                                        });



                                }


                                google.maps.event.addDomListener(window, 'load', init_map);
                            </script>
                    </div>
                    </p>


                </div>
            </div>
        </section>
        <!--service section-->
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
                            <li><a style="color:#ffff;" href="izvorulmuntelui.php"> Izvorul Muntelui, Cabana Dochia</a></li>
                            <li><a style="color:#ffff;" href="satulghetar.php"> Satul Ghetar, Pestera Scarisoara </a>
                            </li>
                            <li><a style="color:#ffff;" href="pietrosul.php">Borsa, Varful Pietrosu, Tarnita la
                                    Cruce</a></li>
                            <li><a style="color:#ffff;" href="sauabaiului.php"> Saua Baiului, Varful Leuca Mica, Valea
                                    Grecului, Azuga</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <!--end of footer-->
    <!--js-->
    <!-- ======== SwiperJS ======= -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.js"></script>
    <!-- ======== SCROLL REVEAL ======= -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.9/scrollreveal.min.js"></script>
    <!-- ======== SliderJS ======= -->
    <script src="js/slider.js"></script>
    <!-- ======== IndexJS ======= -->
    <script src="js/index.js"></script>
    <script src="js/script.js"></script>
</body>

</html>