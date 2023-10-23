<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MountainTrip!</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <link rel="stylesheet" href="css/stylehead.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<style>
    .featured-item {
        max-height: 300px;
    }
    .featured-item img {
        flex-shrink: 0;
        min-width: 100%;
        min-height: 100%;
    }
</style>

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

            <!--
                <div class="header-form">
                    <h2>Choose your Travel location:</h2>
                    <form class="flex">
                        <input type="text" class="form-control"
                        placeholder="Destination name">
                        <input type="date" class="form-control"
                        placeholder="Date">
                        <input type="number" class="form-control"
                        placeholder="Price ($)">
                        <input type="submit" class="form-control"
                        placeholder="Search">
                    </form>
                </div>
                -->


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
                <?php
                $sql = "SELECT * FROM trips where thumnail <> '' LIMIT 6";
                $result = mysqli_query($conn, $sql);
                while ($row = $result->fetch_assoc()) {
                ?>

                    <div class="featured-item my-2 shadow">
                        <img src="<?php echo $row['thumnail']; ?>" alt="featured place">

                        <div class="featured-item-content">
                            <span>
                                <a href="/route.php?id=<?php echo $row['id'] ?>">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <?php echo $row['city'] . ' ' . $row['country']; ?> , <?php echo $row['region'] ?>
                                </a>
                            </span>
                            <div>
                                <p class="text"><?php echo $row['name']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }

                ?>

            </div>
        </div>
    </section>
    <!--service section
        <section id="services" class="py-4">
            <div class="container">
                <div class="title-wrap">
                    <div class="sm-title">know about services that we offer</div>
                    <h2 class="lg-title">Our services</h2>

                </div>
                <div class="services-row">
                    <div class="services-item">
                        <span class="services-icon">
                            <i class="fas fa-hotel"></i>
                        </span>
                        <h3>Luxurios Hotel</h3>
                        <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                    <div class="services-item">
                        <span class="services-icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </span>
                        <h3>Luxurios Hotel</h3>
                        <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                    <div class="services-item">
                        <span class="services-icon">
                            <i class="fas fa-money-bill"></i>
                        </span>
                        <h3>Luxurios Hotel</h3>
                        <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                </div>
            </div>
        </section>
        

        end of services section-->

    <!--testimonials section
        <section id="testimonials" class="py-4">
            <div class="container">
                <div class="title-wrap">
                    <span class="am-title">what our clients say about us</span>
                    <h2 class="lg-title">testimonials</h2>
                </div>
            </div>
            <div class="test-row">
                <div class="test-item">
                    <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <div class="test-item-info">
                        <img src="images/test-1.jpg" alt="testimonial">
                        <div>
                            <h3>Kevin Wilson</h3>
                            <p class="text">Trip to Brazil</p>

                        </div>
                    </div>
                </div>
                <div class="test-item">
                    <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <div class="test-item-info">
                        <img src="images/test-1.jpg" alt="testimonial">
                        <div>
                            <h3>Kevin Wilson</h3>
                            <p class="text">Trip to Brazil</p>

                        </div>
                    </div>
                </div>
                <div class="test-item">
                    <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <div class="test-item-info">
                        <img src="images/test-1.jpg" alt="testimonial">
                        <div>
                            <h3>Kevin Wilson</h3>
                            <p class="text">Trip to Brazil</p>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        end of testimonials screen-->

    <!--video section
        <section id="video">
            <div class="video-wrapper flex">
                <video loop src="videos/video-section.mp4" 
                type="video/mp4">
                </video>
                <button type="button" id="play-btn">
                    <i class="fas fa-play"></i>
                </button>
            </div>
        </section>
        end of video section-->
    <!--footer-->
    <footer style="color:#012424;" class="footer">
        <div class="row container">
            <div class="col">
                <a style="color:#ba9a88;font-size: 45px;" href="home.php" class="site-brand">
                    Mountain<span>Trip!</span>
                </a>

                <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>

            </div>
            <div class="col">
                <h2 style="color:#ba9a88;font-size: 30px;">Follow us on: </h2>
                <ul class="social-links">
                    <li>
                        <a style="color:#012424;" href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a style="color:#012424;" href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a style="color:#012424;" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col">

                <div class="col">
                    <h2 style="color:#ba9a88;font-size: 30px;">Popular Places:</h2>
                    <ul>
                        <li><a style="color:#012424;" href="#"> Izvorul Muntelui, Cabana Dochia</a></li>
                        <li><a style="color:#012424;" href="#"> Satul Ghetar, Pestera Scarisoara </a></li>
                        <li><a style="color:#012424;" href="#"> Cabana Pietrele, Cabana Gentiana, Curmatura Bucurii, Lacul Bucura, Varful Peleaga</a></li>
                        <li><a style="color:#012424;" href="#"> Borsa, Varful Pietrosu, Tarnita la Cruce</a></li>
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