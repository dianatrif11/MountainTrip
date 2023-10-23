<?php
include 'config.php';

$status = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name) || empty($email) || empty($message)) {
        $status = "All fields are compulsory.";
    } else {
        if (strlen($name) >= 255 || !preg_match("/^[a-zA-Z-'\s]+$/", $name)) {
            $status = "Please enter a valid name";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $status = "Please enter a valid email";
        } else {

            $sql = "INSERT INTO contactinfo (name, email, message) VALUES (\"$name\",\"$email\", \"$message\");";

            mysqli_query($conn, $sql);
            if (mysqli_query($conn, $sql) === True) {
                $name = "";
                $email = "";
                $message = "";
                $status = "Mesajul tau a fost trimis cu succes";
            } else {
                $status = "A aparut o eroare, va rugam sa reincercati";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MountainTrip</title>
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
    <link rel="stylesheet" href="css/footer.css" />
    <link href="assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome/css/font-awesome-ie7.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- navbar  -->
    <?php
        include 'top-nav.php';
        ?>
    <!-- end of navbar  -->

    <!-- header -->
    <header class="flex header-sm">
        <div class="head">
            <div class="featured-row">
                <form role="form" class="clearfix" method="post" action="contact.php">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="sr-only" for="contact-name">Nume</label>
                                <input type="text" class="form-control input-lg" id="name" name="name" placeholder="Nume" value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') echo $name ?>">
                            </div>
                        </div><!-- end col -->

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="sr-only" for="contact-email">Email</label>
                                <input size="50" style="align-items: center;" type="text" class="form-control input-lg" id="contact-email" name="email" placeholder="Email" value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') echo $email ?>">
                            </div>
                        </div><!-- end col -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="sr-only" for="contact-words">Mesaj</label>
                                <textarea class="form-control input-lg" id="contact-words" name="message" placeholder="Mesaj" rows="3" value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') echo $message ?>"></textarea>
                            </div>
                        </div><!-- end col -->
                    </div><!-- row -->
                    <!--<div class="g-recaptcha" id="rcaptcha" data-sitekey="6LdQrbgUAAAAAI1gDx2TzPOH7qjU-9tIYU3Ai3ql">
                    </div>
                    <span id="captcha" style="color:red"></span>-->
                    <input type="submit" class="btn btn-info btn-lg pull-right" value="Trimite »">
                </form>
            </div>
        </div>
    </header>

    <!-- contact section -->
    <section id="contact" class="py-4">
        <div class="container">
            <div class="title-wrap">
                <span class="sm-title">get in touch with us</span>
                <h2 class="lg-title">contact us</h2>
            </div>

            <div class="contact-row">
                <div class="contact-left">
                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                    <div style="overflow:hidden;height:400px;width:500px;">
                        <div id="gmap_canvas" style="height:400px;width:500px;"></div>
                        <style>
                            #gmap_canvas img {
                                max-width: none !important;
                                background: none !important
                            }
                        </style>
                        <p><a class="google-map-code" href="http://www.themecircle.net/business/" id="get-map-data">Apel
                                Industries</a>
                    </div>
                    <p>
                        <script type="text/javascript">
                            function init_map() {
                                var myOptions = {
                                    zoom: 15,
                                    center: new google.maps.LatLng(46.196314, 21.291431),
                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                };
                                map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
                                marker = new google.maps.Marker({
                                    map: map,
                                    position: new google.maps.LatLng(46.196314, 21.291431)
                                });
                                infowindow = new google.maps.InfoWindow({
                                    content: "<b>Apel Industries</b><br />Strada Dâmboviței 27, Arad<br />310443 Arad"
                                });
                                google.maps.event.addListener(marker, "click", function() {
                                    infowindow.open(map, marker);
                                });
                                infowindow.open(map, marker);
                            }
                            google.maps.event.addDomListener(window, 'load', init_map);
                        </script>
                </div>
                <div class="contact-right my-2">
                    <div class="contact-item">
                        <div class="col-sm-6">
                            <iframe width="200%" height="450" src="videos\mountain.mp4" allowfullscreen></iframe>
                        </div><!-- end col -->
                    </div><!-- row -->
                </div>
            </div>
        </div>
    </section>
    <!-- end of contact section -->


    <!-- footer -->
    <footer style="color:#5b828e;" class="footer">
        <div class="row container">
            <div class="col">
                <a style="color:#ba9a88;font-size: 45px;" href="index.php" class="site-brand">
                    Mountain<span>Trip!</span>
                </a>

                <p class="text" style="color: #fff;">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived
                    not only five centuries, but also the leap into electronic typesetting, remaining essentially
                    unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                    Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.
                </p>

            </div>
            <div class="col">
                <h2 style="color:#ba9a88;font-size: 30px;">Follow us on: </h2>
                <ul class="social-links">
                    <li>
                        <a style="color:#fff;" href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a style="color:#fff;" href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a style="color:#fff;" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col">
                <h2 style="color:#ba9a88;font-size: 30px;">Popular Places:</h2>
                <ul>
                    <li><a style="color:#ffff;" href="izvorulmuntelui.php"> Izvorul Muntelui, Cabana Dochia</a></li>
                    <li><a style="color:#ffff;" href="satulghetar.php"> Satul Ghetar, Pestera Scarisoara </a></li>
                    <li><a style="color:#ffff;" href="pietrosul.php">Borsa, Varful Pietrosu, Tarnita la Cruce</a></li>
                    <li><a style="color:#ffff;" href="sauabaiului.php"> Saua Baiului, Varful Leuca Mica, Valea
                            Grecului, Azuga</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- end of footer -->

    <!-- js -->
    <script src="js/script.js"></script>
    <script>

    </script>
</body>

</html>