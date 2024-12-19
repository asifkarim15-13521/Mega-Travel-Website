<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Agency</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    
    <link rel="stylesheet" type="text/css" href="../style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery -->
    
    <script>
        $(document).ready(function(){
            // Handle form submission
            $("form").submit(function(e){
                e.preventDefault(); // Prevent the default form submission

                // Get the form data
                var formData = $(this).serialize(); 

                // Send the form data using AJAX
                $.ajax({
                    type: "POST",
                    url: "submit.php", // Submit data to submit.php
                    data: formData,
                    success: function(response) {
                        // Show the success or error message inside the #message div
                        $("#message").html(response);

                        // Optionally, clear the form after submission
                        $("form")[0].reset(); 
                    },
                    error: function() {
                        // Show error message in case of failure
                        $("#message").html("There was an error. Please try again.");
                    }
                });
            });
        });
    </script>
   
</head>
<body>
    
<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>Mega </span>Travel</a>

    <nav class="navbar">
        <a href="../index.php">Home</a>
        <a href="../book.php">Book</a>
        <a href="../package.php">Packages</a>
        
        
    </nav>
</header>

    <!-- header section ends -->
    <!-- contact section starts  -->


    <section class="contact" id="contact">

        <h1 class="heading">
            <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="../images/contact-img.jpg" alt="" action=" ">
            </div>

            <form action="submit.php" method="POST">
                <div class="inputBox">
                    <input type="text" placeholder="name" name="name" required>
                    <input type="email" placeholder="email" name="email" required>
                </div>
                <div class="inputBox">
                    <input type="number" placeholder="number" name="number" required>
                    <input type="text" placeholder="subject" name="subject" required>
                </div>
                <textarea placeholder="message" name="message" cols="30" rows="10" required></textarea>
                <input type="submit" class="btn" value="send message">
            </form>
        </div>



    </section>

    <div id="message" style="font-size: 22px;text-align:center;color: green;"></div>

    <!-- contact section ends -->
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
    <!-- footer section ends -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="script.js"></script>

</body>

</html>