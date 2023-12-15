<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <section class="header">

        <a href="home.php" class="logo">Travelling</a>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>


        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <div class="heading" style="background:url(img/background.jpg) no-repeat;"></div>

    <!-- booking section start -->

    <section class="booking">
        <h1 class="heading-title">
            book your trip!
        </h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="name">
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
                    <input type="text" placeholder="please you want to visit" name="location">
                </div>
                <div class="inputBox">
                    <span>how many :</span>
                    <input type="number" placeholder="number of guests" name="guests">
                </div>
                <div class="inputBox">
                    <span>arrival :</span>
                    <input type="date" name="arrival">
                </div>
                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date" name="leaving">
                </div>

            </div>
            <input type="submit" value="submit" class="btn" name="send">
            <a href="tampil.php" class="btn"></a>
        </form>
    </section>
    <!-- booking section ends -->

    <!-- footer section starts -->

    <section class="footer">
        <div class="box-container">

            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
            </div>
            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>Ask Question</a>
                <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
                <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>terms of</a>
            </div>
            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i> +62-858-8886-8550</a>
                <a href="#"><i class="fas fa-phone"></i> +62-821-7612-4301</a>
                <a href="#"><i class="fas fa-envelope"></i> khadafiahmad01@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Pondok Aren,Tangerang Selatan 15222</a>
            </div>
            <div class="box">
                <h3>Follow Us</h3>
                <a href="https://www.facebook.com/khadafi.akiey"><i class="fa-brands fa-facebook" style="color: #2564d0;"></i> Khadafi Ahmad Alfarezi</a>
                <a href="https://www.instagram.com/disc_brake01/"><i class="fa-brands fa-instagram" style="color: #cd1d52;"></i></i> disc_brake01</a>
                <a href="#"><i class="fa-brands fa-square-x-twitter" style="color: #1a1a1a;"></i> khadafi01</a>
                <a href="#"><i class="fa-brands fa-linkedin" style="color: #0058b0;"></i> Khadafiahmd</a>
            </div>
        </div>

        <div class="credit">Created by<span> Khadafi Ahmad Alfarezi</span> | all rights reserved!</div>
    </section>




    <!-- footer section ends -->

    <script src="script.js"></script>
</body>

</html>