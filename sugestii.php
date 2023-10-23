<!--$_SESSION['id']-->
<!--cu aceasta comanda luam id-ul utilizatorului care este comentat si il salvam in tabelul de sugestii-->
<?php
include 'config.php';

if (!isset($_SESSION['username'])) { //if username in session is not set
    header("Location: login.php");
}


$status = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $route = $_POST['route'];
    $description = $_POST['description'];
    $water = isset($_POST['water']) ? 1 : 0;
    $cape = isset($_POST['cape']) ? 1 : 0;
    $tent = isset($_POST['tent']) ? 1 : 0;
    $boots = isset($_POST['boots']) ? 1 : 0;
    $compass = isset($_POST['compass']) ? 1 : 0;
    $bars = isset($_POST['bars']) ? 1 : 0;
    $objects = $_POST['objects'];

    if (empty($name) || empty($route) || empty($description)) {
        $status = "All fields are compulsory.";
    } else {
        if (strlen($name) >= 255 || !preg_match("/^[a-zA-Z-'\s]+$/", $name)) {
            $status = "Please enter a valid name";
        } else {
            $sql = "INSERT INTO suggestions (name, route, description, water, cape, tent, boots, compass, bars, objects) VALUES (\"$name\",\"$route\", \"$description\",\"$water\",\"$cape\",\"$tent\",\"$boots\",\"$compass\",\"$bars\",\"$objects\");";

            if (mysqli_query($conn, $sql) === True) {
                $name = "";
                $route = "";
                $description = "";
                $water = "";
                $cape = "";
                $tent = "";
                $boots = "";
                $compass = "";
                $bars = "";
                $objects = "";
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
    <link rel="stylesheet" href="css/sugestii.css" />

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
                <form role="form" class="clearfix" method="post" action="sugestii.php" style="display: contents;">
                    <div class="contact-left">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="sr-only" for="sugestii-name">Nume traseu</label>
                                <textarea class="form-control input-lg" id="sugestii-name" name="name" placeholder="Nume traseu" rows="3" value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') echo $name ?>"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="sr-only" for="sugestii-route">Puncte de pe traseu</label>
                                <textarea class="form-control input-lg" id="sugestii-route" name="route" placeholder="Puncte de pe traseu" rows="3" value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') echo $route ?>"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="sr-only" for="sugestii-description">Mai multe despre traseu</label>
                                <textarea class="form-control input-lg" id="sugestii-description" name="description" placeholder="Mai multe despre traseu" rows="3" value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') echo $description ?>"></textarea>
                            </div>
                        </div><!-- end col -->
                    </div><!-- row -->

                    <div class="contact-right my-2">
                        <div class="col-sm-6">
                            <p style="font-size: 20px; color:#ECDDB6">Obiecte necesare in parcurgerea traseului</p>
                        </div><!-- end col -->


                        <div class="col-sm-6">
                            <div class="form-group" style="color: #d2c8bc; font-size: 18px">
                                <input type="checkbox" id="water" name="water" style="margin-left:-98px; margin-top:10px" value="1">
                                <label for="water"> Apa</label>
                                <input type="checkbox" id="cape" name="cape" style="margin-left:53px;" value="1">
                                <label for="cape"> Pelerină de ploaie</label><br>
                                <input type="checkbox" id="tent" name="tent" style="margin-left:-180px; margin-top:14px" value="1">
                                <label for="tent"> Cort</label>
                                <input type="checkbox" id="boots" name="boots" style="margin-left:50px;" value="1">
                                <label for="boots"> Bocanci</label><br>
                                <input type="checkbox" id="compass" name="compass" style="margin-left:-70px; margin-top:14px" value="1">
                                <label for="compass"> Busola</label>
                                <input type="checkbox" id="bars" name="bars" style="margin-left:30px; margin-bottom:15px;" value="1">
                                <label for="bars"> Batoane energizante</label><br>
                                <label class="sr-only" for="sugestii-objects">Alte Obiecte</label>
                                <textarea class="form-control input-lg" id="sugestii-objects" name="objects" placeholder="Alte obiecte" rows="3" value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') echo $objects ?>"></textarea>
                            </div>
                        </div>
                    </div><!-- row -->
            </div>
            <input type="submit" class="btn btn-info btn-lg pull-right" value="Trimite »" style="background-color:#ac7e62;">
            </form>
        </div>
        </div>
    </header>

    <!-- js -->
    <script src="js/script.js"></script>
    <script>

    </script>
</body>

</html>