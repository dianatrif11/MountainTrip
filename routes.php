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
  <link rel="stylesheet" href="css/routes.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/footer.css">


</head>

<body>
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
  <!--navbar-->
  <?php
  include 'top-nav.php';
  ?>
  <!--end navbar-->

  <script type="text/javascript">
    function changeRoute(route) {
      

      window.location.href = route;
    }
  </script>
  <!--header-->
  <header class="flex">
    <form action="" method="GET">
      <div class="head">

        <div class="form-box">
          <input type="text" name="s" class="search-field" value="<?php if (isset($_GET['s'])) {
                                                                    echo $_GET['s'];
                                                                  } ?>" placeholder="Trip name">
        </div>
        <button class="search-buton" type="submit">Search</button>

      </div>
    </form>
  </header>
  <!--header-->
  <!--service section-->
  <section style="background-color:#D3D3D3" id="featured" class="py-4">
    <div class="container">
      <div class="title-wrap">
        <!--<span class="sm-title">Cele mai cautate trasee din fiecare categorie</span>-->
        <h2 class="lg-title">
          <?php if (isset($_GET['s'])) {
            echo 'Cauta rezultate pentru: ' . $_GET['s'];
          } else {
            echo 'Cele mai cautate trasee din fiecare categorie';
          }
          ?>

        </h2>
      </div>
      <div class="featured-row">
        <?php
        $searchCriteria = "";
        if (isset($_GET['s'])) {
          $searchCriteria = ' AND (name LIKE "%' . $_GET['s'] . '%" OR city LIKE "%' . $_GET['s'] . '%" OR description LIKE "%' . $_GET['s'] . '%")';
        }

        $sql = "SELECT * FROM trips where thumnail <> '' " . $searchCriteria . " LIMIT 6";

        $result = mysqli_query($conn, $sql);
        $rowcount = mysqli_num_rows($result);
        if ($rowcount > 0) {
          while ($row = $result->fetch_assoc()) {

        ?>

            <div class="featured-item my-2 shadow" id="result-search" onclick="changeRoute('<?php echo $row['url']?>')">
              <img src="<?php echo $row['thumnail']; ?>" alt="featured place">

              <div class="featured-item-content">
                <span>
                    <i class="fas fa-map-marker-alt"></i>
                    <?php echo $row['city'] . ' ' . $row['country']; ?> , <?php echo $row['region'] ?>
                </span>
                <div>
                  <p class="text"><?php echo $row['name']; ?></p>
                </div>
              </div>
            </div>
        <?php
          }
        } else {
          echo '<strong>No Records founds</strong>';
        }


        ?>

      </div>
    </div>
  </section>
  <section style="background-color:#D3D3D3" class="services">
    <div class="title-wrap">

      <h2 style="color: #5b828e" class="lg-title">Tipuri de trasee</h2>
    </div>

    <div class="box-container">

      <div class="box">
        <a href="incepatori.php">
          <img src="images/munteunou.png" alt="">
          <h3 style="position: center; color: #e0e0e0;">Trasee Usoare</h3>
        </a>
      </div>

      <div class="box">
        <a href="experimentati.php">
          <img src="images/muntenou.png" alt="">
          <h3 style="color: #e0e0e0;">Trasee Dificile</h3>
        </a>
      </div>

      <div class="box">
        <a href="bicicleta.php">
          <img src="images/mountainbikenou.png" alt="">
          <h3 style="color: #e0e0e0;">Trasee cu Bicicleta</h3>
        </a>
      </div>

      <div class="box">
        <a href="informatiinecesare.php">
          <img src="images/advicenou.png" alt="">
          <h3 style="color: #e0e0e0;">Sfaturi</h3>
        </a>
      </div>

      <div class="box">
        <a href="echipamente.php">
          <img src="images/backpacknou.png" alt="">
          <h3 style="color: #e0e0e0;">Articole Necesare</h3>
        </a>
      </div>

    </div>

  </section>
  <!--footer-->
  <footer style="color:#012424;" class="footer">
    <div class="row container">
      <div class="col">
        <a style="color:#ba9a88;" href="index.php" class="site-brand">
          Mountain<span>Trip!</span>
        </a>

        <p class="text" style="color: #ffff;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>

      </div>
      <div class="col">
        <h2 style="color:#ba9a88;">Follow us on: </h2>
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
          <h2 style="color:#ba9a88;">Popular Places:</h2>
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
  </footer>
  <!--end of footer-->
  <!--js-->
  <script src="js/script.js"></script>
</body>

</html>