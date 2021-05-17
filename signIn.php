<!DOCTYPE html>
<?php
// $cookie_name = $name;
// $cookie_value = "1";
// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="Style/general.css">
   <link rel="stylesheet" type="text/css" href="Style/form.css">
     <script src="scripts/general.js"></script> 
</head>

<body>
    <header>

        <div class="kolonat">
            <div>
                <div id="ikonat">
                    <img id="logo" src="Images/pharmacylogo.png" alt="pharmaLogo" width="50" height="50">
                    <div id="titullilogo">
                        <h1 id="title">Pharmacy</h1>
                        <p id="moto">Making sure you feel as good as you look.</p>
                    </div>


                </div>


            </div>

            <div id="secondNav">
                <div class="social">
                    <a class="icon" href="https://www.linkedin.com/"><img src="Images/icon-linkedin.png" /></a>
                    <a class="icon" href="https://www.twitter.com"><img src="Images/icon-twitter.png" /></a>
                    <a class="icon" href="https://www.pinterest.com"><img src="Images/icon-pinterest.png" /></a>
                    <a class="icon" href="https://www.google.com"><img src="Images/icon-google-plus.png" /></a>
                    <a class="icon" href="https://www.rss.com"><img src="Images/icon-rss.png" /></a>
                </div>
                <p id="login">
                    <a href="signUp.php">Sign Up</a> | <a href="signIn.php">Login</a> | <a href="#">RSS Feed</a> | <a href="#">Archived
                        news</a>
                </p>
            </div>
        </div>
        <nav id="navigation">
            <div>
                <ul id="pages">
                    <li><a href="index.php">Homepage</a></li>
                    <li class="dropdown"><a class="dropbtn" href="product.php">Products</a>
                        <div class="dropdown-content">
                            <a href="product.php">Health</a>
                            <a href="fitness.php">Fitness</a>
                            <a href="HairCare.php">Hair</a>
                            <a href="https://www.amazon.in/Baby/b?ie=UTF8&node=1571274031">Baby</a>
                            <a href="https://www.sephora.com/shop/skincare">Skin</a>
                        </div>
                    </li>
                    <li><a href="#">Services</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

            <div id="search">
                <form method="GET">
                    <input id="search-label" type="search" placeholder="Search our website..." name="search">
                    <input id="search-button" type="submit" value="Search">
                </form>
            </div>
        </nav>
    </header>
    <main>

        <?php

        include 'database/config.php';

        session_start();

        error_reporting(0);

        if (isset($_SESSION['email'])) {
            header("Location: index.php");
        }

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password =$_POST['password'];

            $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
            $result = mysqli_query($conn, $sql);
            setcookie('email',$email,time()+60*60*7);
            if ($result->num_rows > 0) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['email'] = $row['email'];
                
                if(isset($_SESSION['email'])){
                    $myfile = fopen("database/log.txt", "a");
                    fwrite($myfile,"Email ".$_SESSION['email'] . " Is login " .date("Y-m-d h:i:sa") ."\n");
                    echo "new product was added";
                    fclose($myfile);
                }
            
                header("Location: index.php");
            } else {
                echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
            }
        }

        ?>

        <div id="signUp">
            <form method="POST" name="signInForm">
                <fieldset>
                    <legend>Log In</legend>
                    <div>
                        <label> Email: <input type="email" name="email" autocomplete="on" required></label> <br>
                        <label> Password: <input type="password" name="password" required></label> <br>
                    </div>

                    <div>
                        <input type="submit" name="submit" id="submit" value="Sign In">
                        <input type="reset" name="reset" value="Reset">
                    </div>
                </fieldset>
            </form>
            <!--<script src="scripts/login.js"></script>-->
        </div>
        <div id="tutorial">
            <video width="320" height="180" controls>
                <source src="audioAndVideo/Log_in_tutorial.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>

        </div>
    </main>
    <footer>
        <div id="foot">
            <div class="col contactDetails">
                <h4>Contact Deatils</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatibus eveniet corporis
                    mollitia sequi delectus atque ducimus nam rerum, esse quo reprehenderit, sed nulla quaerat
                    reiciendis?
                    Esse dolore veritatis ut.</p>
                <p>Tel: xxxxxxxxxx <br> Fax:xxxxxxxxxxxxx <br> Email:contact@mail.com</p>
            </div>

            <div class="col links">
                <h4>Quick Links</h4>
                <a href="#">Link Text here</a>
                <br>
                <hr>
                <a href="#">Link Text here</a>
                <br>
                <hr>
                <a href="#">Link Text here</a>
                <br>
                <hr>
                <a href="#">Link Text here</a>
                <br>
                <hr>
            </div>

            <div class="col blog">
                <h4>From the blog</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus nisi in quasi fugit temporibus
                    soluta
                    voluptate dicta cupiditate? Repudiandae, quisquam labore aspernatur quae placeat exercitationem
                    blanditiis quod obcaecati nisi consectetur! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Accusamus iste sit laudantium nesciunt voluptas quasi inventore modi labore, nam incidunt soluta
                    qui, cupiditate earum. Illum molestias neque eveniet est rem.</p>
                <a href="#">Read more >></a>
            </div>

            <div class="col newsletter">
                <h4>Grab our newsletter</h4>
                <form method="POST">
                    <input type="text" name="name" placeholder="Name"> <br>
                    <input type="email" name="email" placeholder="Email"> <br>
                    <textarea cols="26" rows="5"></textarea><br>
                    <button>SUBMIT</button>
                </form>
            </div>
        </div>
        <div id="rights">
            <p>Copyright © 2013 - All rights reserved - Domain name</p>
            <p>Code by <a href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
        </div>
    </footer>

</body>

</html>