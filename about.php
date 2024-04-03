<?php

include 'config.php';

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
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/Store/lounge.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>We are the best book store in Uganda and our continued existence and service proves that.</p>
         <p>Choose us as your only bookstore and experience the joy of discovering new worlds through the pages of a book.</p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Client's Reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/Review/jim.jpg" alt="">
         <p>I can't say enough good things about this bookstore. The user-friendly interface makes browsing a breeze, and the customer service is top-notch. I've never had any issues with my orders, and the books always arrive in perfect condition. Highly recommend!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>James Munji</h3>
      </div>

      <div class="box">
         <img src="images/Review/lei.jpg" alt="">
         <p>Absolutely love this online bookstore! The selection is incredible, and the prices are unbeatable. I always find exactly what I'm looking for, and the shipping is super fast. A must-visit for any book lover!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Christine Namara</h3>
      </div>

      <div class="box">
         <img src="images/Review/albert.jpg" alt="">
         <p>10/10 would recommend this bookstore to anyone and everyone! The website is intuitive, the prices are competitive, and the shipping is fast. Plus, they offer great deals and discounts regularly. I've never been disappointed with my purchases!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ian Akampa</h3>
      </div>

      <div class="box">
         <img src="images/Review/zuena.jpg" alt="">
         <p>I've been a loyal customer of this online bookstore for years, and for good reason. The selection is vast, the prices are unbeatable, and the customer service is exceptional. Whether I'm looking for a bestseller or a hidden gem, I know I can find it here.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Diana Nansubuga</h3>
      </div>

      <div class="box">
         <img src="images/Review/mo.jpg" alt="">
         <p>This bookstore is a gem! I love the curated collections and the ability to discover new authors and genres. The website is well-designed and easy to navigate, and the checkout process is seamless. A fantastic experience from start to finish!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Martin Kananura</h3>
      </div>

      <div class="box">
         <img src="images/Review/baya.jpg" alt="">
         <p>Incredible selection, competitive prices, and lightning-fast shipping. What more could you ask for? This online bookstore has become my go-to for all of my reading needs. I've never been disappointed</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Gabriel Baya</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Great Authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/Authors/DanBrown.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Dan Brown</h3>
      </div>

      <div class="box">
         <img src="images/Authors/GeorgeRRMartin.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>George R. R. Martin</h3>
      </div>

      <div class="box">
         <img src="images/Authors/RobertT.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Robert T. Kiyosaki</h3>
      </div>

      <div class="box">
         <img src="images/Authors/Chinua.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Chinua Achebe</h3>
      </div>

      <div class="box">
         <img src="images/Authors/Nelson.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Nelson Mandela</h3>
      </div>

      <div class="box">
         <img src="images/Authors/Ngugi.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Ngugi wa Thiong'o</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>