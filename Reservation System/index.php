<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation System</title>
    <script src="https://kit.fontawesome.com/0c3ddd4ac2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/navbot.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <div class="nav-cont">
        <nav class="navbar">
            <div class="navimg">
                <a href="">
                    <img src="images/logo.png" alt="cdmlogo">
                    <h1>CDM RESERVATION SYSTEM</h1>
                </a>
            </div>
            <div class="navlinks">
                <a href="index.php" id="link1"><i class="fa-solid fa-house"></i></a>
                <div class="ddown">
                    <a href="menu.php" id="link2"><i class="fa-solid fa-store"></i></a>
                    <div class="ddown-content">
                        <a href="menu.php#breakfast" id="l1">Breakfast <i class="fa-solid fa-angles-right" style="float: right;"></i></a>
                        <a href="menu.php#lunch" id="l2">Lunch <i class="fa-solid fa-angles-right" style="float: right;"></i></a>
                        <a href="menu.php#snacks" id="l3">Snacks <i class="fa-solid fa-angles-right" style="float: right;"></i></a>
                        <a href="menu.php#drinks" id="l4">Drinks <i class="fa-solid fa-angles-right" style="float: right;"></i></a>
                    </div>
                </div>
                <a href="cart.php" id="link3"><i class="fa-solid fa-cart-shopping"></i></a>
                <a href="users.php" id="link4"><i class="fa-regular fa-user"></i></a>
                <a href="menu.php" id="link5"><i class="fa-solid fa-bars"></i></a>
            </div>
        </nav>
    </div>

    
    <main class="main-content">
        <div class="banner">
            <img src="images/banner2.png" alt="">
        </div>
        <P id="tagline">WE AIM TO GIVE THE BEST</P>
        <div class="grid">
            <i class="gridbox" id="grid1">
                <img src="images/Breakfast/tnail.png">
                <a href="prod1.php"><button class="ordnow">ORDER NOW</button></a>
            </i>
            <i class="gridbox" id="grid2">
                <img src="images/Noon/tnail.png">
                <a href=""><button class="ordnow">ORDER NOW</button></a>
            </i>
            <i class="gridbox" id="grid3">
                <img src="images/Snacks/tnail.png">
                <a href=""><button class="ordnow">ORDER NOW</button></a>
            </i>
            <i class="gridbox" id="grid4">
                <img src="images/Drinks/tnail.png">
                <a href=""><button class="ordnow">ORDER NOW</button></a>
            </i>
        </div>

        <div class="welcome">WE'RE HAPPY TO HAVE YOU <p><?php echo "{$_SESSION['username']}"; ?></p>!
        </div>
    </main>

    <footer>
        <div class="details">
            <div class="dets">
                <div class="det" id="det1">
                    <h3 id="res">About CDM</h3>
                    <a href="">About Us</a>
                    <a href="">Contact Us</a>
                    <a href="">Terms and Conditions</a>
                    <a href="">Privacy Notice</a>
                </div>
                <div class="det" id="det2">
                    <h3>FOLLOW US</h3>
                    <div class="follow">
                        <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.twitter.com/"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
                <div class="det" id="det3"></div>
            </div>
        </div>
        </div>
    </footer>


</body>


</html>