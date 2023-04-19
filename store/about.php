<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>Kenapa memilih kami?</h3>
         <p>Unpad Official Merch Store hadir untuk memenuhi kebutuhan mu! Dapatkan merch official dengan kualitas terbaik di toko kami!</p>
         <a href="contact.php" class="btn">Kontak kami!</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>Apa yang kami tawarkan?</h3>
         <p>Kami menawarkan garansi produk berkualitas dan gratis ongkir pada pengiriman produk kami.</p>
         <a href="shop.php" class="btn">Toko kami</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Apa kata para konsumen?</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>"Pelayanannya memuaskan bangetttt, gak nyesel beli disini".</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Tom Holland</h3>
      </div>

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>"Udah beberapa kali beli disini, selalu puas sama barangya"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John Wick</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>"Cocok banget buat dipake ke kampus! Thank u so muchh"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kendall Jenner</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>