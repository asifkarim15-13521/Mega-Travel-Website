<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Agency</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- header section starts  -->
    <header>

        <div id="menu-bar" class="fas fa-bars"></div>
        <a href="#" class="logo"><span>Mega </span>Travel</a>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="book.php">Booking</a>
            <a href="package.php">Packages</a>
            <a href="contact/contact.php">Contact </a>
        </nav>

    
        </div>

        

    </header>
<!-- header section end  -->
<!-- booking section starts  -->
    <section class="book" id="book">
   <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
      <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
      <?php
      unset($_SESSION['success_message']);
   }
   ?>

        <h1 class="heading">
            <span>b</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span>n</span>
            <span>o</span>
            <span>w</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="images/book-img.jpg" alt="">
            </div>


            <form action="book_form.php" method="post" class="book-form">

                <div class="flex">
                    <div class="inputBox">
                        <span>name :</span>
                        <input type="text" placeholder="enter your name" name="name">
                    </div>
                    <div class="inputBox">
                        <span>email :</span>
                        <input type="email" placeholder="enter your email" name="email">
                    </div>
                    <div class="inputBox">
                        <span>phone :</span>
                        <input type="number" placeholder="enter your number" name="phone">
                    </div>
                    <div class="inputBox">
                        <span>address :</span>
                        <input type="text" placeholder="enter your address" name="address">
                    </div>
                    <div class="inputBox">
                        <span>where to :</span>
                        <input type="text" placeholder="place you want to visit" name="location">
                    </div>
                    <div class="inputBox">
                        <span>how many :</span>
                        <input type="number" placeholder="number of guests" name="guests">
                    </div>
                    <div class="inputBox">
                        <span>arrivals :</span>
                        <input type="date" name="arrivals">
                    </div>
                    <div class="inputBox">
                        <span>leaving :</span>
                        <input type="date" name="leaving">
                    </div>
                </div>

                <input type="submit" value="submit" class="btn" name="send">

            </form>

        </div>

    </section>

    <!-- footer section starts  -->
<section class="footer">

<div class="box-container">

    <div class="box">
        <h3>about us</h3>
        <p>Mega Travel are professional planners for your 
            vacations. We provide best destination 
            for you and your family at an affordable price.</p>
    </div>
    <div class="box">
        <h3>branch locations</h3>
        <a href="#">Bangladesh</a>
        <a href="#">USA</a>
        <a href="#">Maxico</a>
    </div>
    <div class="box">
        <h3>quick links</h3>
        <a href="#">home</a>
        <a href="#">book</a>
        <a href="#">packages</a>
        <a href="#">services</a>
        <a href="#">gallery</a>
        <a href="#">review</a>
        <a href="#">contact</a>
    </div>
    <div class="box">
        <h3>follow us</h3>
        <a href="#">facebook</a>
        <a href="#">instagram</a>
        <a href="#">twitter</a>
        <a href="#">linkedin</a>
    </div>
</div>


</section>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="script.js"></script>

</body>
</html>