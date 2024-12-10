<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <div class="section">

      <div class="text">

         <h1>New Colaboration</h1>
         <p> Halo Guyss <br>
            Tau ga kabar terbaru tentang kami? Pasti banyak yang belum tau yaa?
            Jadi saat ini iJabu Coffe menjalin kerjasama loh! <br>
            Kerja sama yang dilakukan tidak kalah menarik, mereka <br>
            adalah Vape town Balige.
            Tunggu Lagi keseruannya ya Guys. Info terbaru bakalan kami share disini kok.

      </div>

      <img src="images/Ptr1.png" alt="">

      </p>
   </div>

   <section class="about">

      <div class="row">

         <div class="image">
            <img src="images/ab-1.jpg" alt="">
         </div>

         <div class="content">
            <h3>why choose us?</h3>
            <p>We really want to know how you feel when we serve you. Please fill in this form if you have criticism or suggestions for our shop. Horass!</p>
            <a href="contact.php" class="btn">contact us</a>
         </div>

      </div>

   </section>

   <section class="reviews">

      <h1 class="heading">client's reviews</h1>

      <div class="swiper reviews-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <img src="images/rat-1.png" alt="">
               <p>Realy delicious</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>joe</h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/rat-2.png" alt="">
               <p>Garam Pas!</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Stevi</h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/rat-3.png" alt="">
               <p>Perfectoo</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Balmond</h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/rat-4.png" alt="">
               <p>Minumannya sangat enak dan terkesan mewah</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Lewi</h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/rat-5.png" alt="">
               <p>nice food</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Thamuz</h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/rat-6.png" alt="">
               <p>Big pluss team</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Nana</h3>
            </div>

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>









   <?php include 'components/footer.php'; ?>

   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".reviews-slider", {
         loop: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         breakpoints: {
            0: {
               slidesPerView: 1,
            },
            768: {
               slidesPerView: 2,
            },
            991: {
               slidesPerView: 3,
            },
         },
      });
   </script>

</body>

</html>