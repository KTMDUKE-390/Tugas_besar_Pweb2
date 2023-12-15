<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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


    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url(img/background-content.jpg);">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide" style="background-image: url(img/background-content2.jpg);">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url(img/background-content3.jpg);">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <section class="services">
        <h1 class="heading-title"> Our Services</h1>
        <div class="box-container">
            <div class="box">
                <img src="img/adventure.png" alt="" height="70px" width="100px"><br>
                <h3>adventure</h3>
            </div>

            <div class="box">
                <img src="img/tour guide.png" alt="" height="70px" width="100px"><br>
                <h3>tour guide</h3>
            </div>

            <div class="box">
                <img src="img/tracking.png" alt="tracking" height="70px" width="100px"><br>
                <h3>tracking</h3>
            </div>

            <div class="box">
                <img src="img/campfire.png" alt="" height="70px" width="100px"><br>
                <h3>campfire</h3>
            </div>

            <div class="box">
                <img src="img/offroad.png" alt="" height="70px" width="100px"><br>
                <h3>offroad</h3>
            </div>

            <div class="box">
                <img src="img/camping.png" alt="" height="70px" width="100px"><br>
                <h3>camping</h3>
            </div>
        </div>
    </section>

    <!-- services section ends -->

    <!-- home about section start -->
    <section class="home-about">
        <div class="image">
            <img src="img/al-jabbar.jpg" alt="" height="500px" width="500px">
        </div>
        <div class="content">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, consequatur amet. Reiciendis quasi,
                culpa </p>
            <a href="package.php" class="btn">Read More</a>
        </div>
    </section>

    <!-- home about section ends -->

    <!-- Home Packages section stars -->


    <section class="home-packages">
        <h1 class="heading-title">Our Packages</h1>
        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="img/al-jabbar.jpg" alt="" height="500px" width="500px">
                </div>

                <div class="content">
                    <h3>Masjid Raya Al Jabbar</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/Austria.jpg" alt="" height="500px" width="500px">
                </div>

                <div class="content">
                    <h3>Austria</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>


            <div class="box">
                <div class="image">
                    <img src="img/Venezia - Italy.jpg" alt="" height="500px" width="500px">
                </div>


                <div class="content">
                    <h3>Venezia</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <a href="book.php" class="btn">book now</a>

                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/Rinjani.jpg" alt="" height="500px" width="500px">
                </div>


                <div class="content">
                    <h3>Gunung Rinjani</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <a href="book.php" class="btn">book now</a>

                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/Pulau Seribu.jpg" alt="" height="500px" width="500px">
                </div>


                <div class="content">
                    <h3>Pulau Seribu</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <a href="book.php" class="btn">book now</a>

                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/Madasari.jpg" alt="" height="500px" width="500px">
                </div>


                <div class="content">
                    <h3>Pantai Madasari Pangandaran</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <a href="book.php" class="btn">book now</a>

                </div>
            </div>

        </div>
        </div>

        <div class="load-more">
            <a href="package.php" class="btn">Load More</a>
        </div>

    </section>
    <!-- Home Packages section ends -->

    <!-- home offer section start -->
    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Autem voluptatum ipsa ab cum perferendis dignissimos
                et eum earum assumenda veniam saepe illum, maiores aliquam eaque!</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </section>


    <!-- home offer section ends -->




    <!-- footer section starts -->

    <section class="footer">
        <div class="box-container">

            <div class="box">
                <h3>Quick Links</h3>
                <a href="index.php"><i class="fas fa-angle-right"></i>Home</a>
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




    <script src="script.js">

    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>