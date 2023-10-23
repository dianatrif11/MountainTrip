<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

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
        <link rel = "stylesheet" href = "font/fonts.css">
        <!-- normalize css -->
        <link rel = "stylesheet" href = "css/normalize.css">
        <!-- custom css -->
        <link rel = "stylesheet" href = "css/utility.css">
        <link rel = "stylesheet" href = "css/style.css">
        <link rel = "stylesheet" href = "css/responsive.css">
        <link rel="stylesheet" href="css/stylehead.css">
    </head>
    <body>
        <!--navbar-->
        <nav class = "navbar">
            <div class="container flex">
                <a href="index.php" class="site-brand">
                    Mountain<span>Trip!</span>
                </a>
                <button type="button" id="navbar-show-btn" class="flex">
                    <i class="fas fa-bars"></i>
                </button>    
                <div id="navbar-collapse">
                    <button type="button" id="navbar-close-btn" class="flex">
                        <i class="fas fa-times"></i>
                    </button>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="welcome.php" class="nav-link">LogOut</a>
                        </li>
                        <li class="nav-item">
                            <a href="routes.php" class="nav-link">Routes</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--end navbar-->

        <!--header-->
        
        <header class="flex">
            <div class="container">
                <div class="header-title">
                    <h1 style="color:bisque; font-size: 80px;">Esti sigur ca doresti sa te deconectezi?</h1>
                    </p>
                </div>

                <div class="Log In"><?php echo "<h1>Welcome " . $_SESSION['id'] . "</h1>"; ?>
                    <a a href="logout.php" class="signin-button">Logout</a>

                </div>
            </div>
        </header>

        <!--js-->
        <script src="js/script.js"></script>
    </body>
</html>