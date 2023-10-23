 <?php
  include 'config.php';
  $sql = "SELECT * FROM trips where id='" . $_GET['id'] . "'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
  $row =  $row[0];
  $latitude_center = $row['lat'];
  $longitude_center = $row['longtitude'];
  ?>
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

 <body>
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
           <img src="<?php echo $row['thumnail']; ?>" alt="hero image" />
         </div>
       </div>
     </div>

     <div class="content">
       <h1>
         <?php echo $row['city'] . ' ' . $row['country']; ?> , <?php echo $row['region']; ?>
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
     <section style="background-color:#fffdfd;" class="section about" id="about">
       <div class="row container">
         <div class="col">
           <div class="title">
             <h1><?php echo $row['name']; ?></h1>
           </div>
           <p>
             <?php echo $row['description']; ?>
           </p>
         </div>
         <div class="col">
           <p>
           <div class="contact-left">
             <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyCQKZD2ZWlHAFN3hcM22yQcd4EjpQZ6bHM&libraries=geometry&callback=init_map"></script>
             <div style="overflow:hidden;height:400px;width:500px;">
               <div id="gmap_canvas" style="height:400px;width:500px;"></div>
               <style>
                 #gmap_canvas img {
                   max-width: none !important;
                   background: none !important
                 }
               </style>
               <p><a class="google-map-code" href="http://www.themecircle.net/business/" id="get-map-data">Apel Industries</a>
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
           </p>
         </div>
       </div>
     </section>
     <!--service section-->
     <!--footer-->
     <footer style="color:#012424;" class="footer">
       <div class="row container">
         <div class="col">
           <a style="color:#ba9a88;font-size: 45px;" href="index.html" class="site-brand">
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
 </body>

 </html>