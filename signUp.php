
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="Style/general.css">
    <link rel="stylesheet" type="text/css" href="Style/form.css">
    <!--<script src="scripts/utils.js"></script>-->
    <!-- <script src="scripts/general.js"></script>-->
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
                    <li><a href="about.php\
                    ">About Us</a></li>
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

        error_reporting(0);

        session_start();

        if (isset($_SESSION['email'])) {
            header("Location: index.php");
        }

        if (isset($_POST['submit'])) {

            $firstname = trim($_POST['firstname']," ");
            $lastname = trim($_POST['lastname']," ");
            $email = $_POST['email'];
            $password = $_POST['password'];
            $passwordConfirm = $_POST['passwordConfirm'];
        
            if(!empty($firstname) || !empty($lastname) || !empty($email) || !empty($password)){
                if(vname($firstname)){
                    if(vname($lastname)){
                     if(vemail($email)){
                         if(vpass($password)){
                             if ($password == $passwordConfirm) {
                                 $sql = "SELECT * FROM users WHERE email='$email'";
                                 $result = mysqli_query($conn, $sql);
                                 echo "<script>alert('User Registred.')</script>";
                                 if (!$result->num_rows > 0) {
                 
                                     $sql = "INSERT INTO users (firstname,lastname,email, password)
                                     VALUES ('$firstname', '$lastname','$email','$password')";
                 
                                     $_SESSION['email'] = $_POST['email'];
                                     if(isset($_SESSION['email'])){
                                        $myfile = fopen("database/log.txt", "a");
                                        fwrite($myfile,"New User ".$_SESSION['email'] . " Is Created " .date("Y-m-d h:i:sa") ."\n");
                                        echo "new product was added";
                                        fclose($myfile);
                                    }                
                                     session_start();
                 
                                     if (isset($_SESSION['email'])) {
                                        setcookie('email',$email,time()+60*60*7);
                                         header("Location: index.php");
                                     }
                                     $result = mysqli_query($conn, $sql);
                                     if ($result) {
                                         echo "<script>alert('Good')</script>";
                                         $username = "";
                                         $email = "";
                                         $_POST['password'] = "";
                                         $_POST['passwordConfirm'] = "";
                                     } else {
                                         echo "<script>alert('Woops! Something Wrong Went.')</script>";
                                     }
                                 } else {
                                     echo "<script>alert('This email alredy exists')</script>";
                                 }
                             } else {
                                 echo "<script>alert('Password Not Matched.')</script>";
                             }
                         }
                         else{
                             echo "<script>alert('Passwordi duhet te kete se paku 1 shkronj te madhe , 1 simbol ')</script>";
                         }
                     }
                     else{
                         echo "<script>alert('Sheno emailin mir /n shembul (filanfisteku1@example.com) !')</script>";
                         
                     }
     
                    }
                    else {
                        echo "<script>alert('Sheno Mbiemrin mir!')</script>";
                        
                    }
                    
                 }
                 
                 
                 else{
                     echo "<script>alert('Sheno Emrin mir!')</script>";
                 }
            }
            else{
                echo "<script>alert('Mbushi te dhenat!')</script>";
            }

            if (isset($_SESSION['email'])) {
                header("Location: index.php");
            }
        }

        ?>

        <div id="signUp">
            <form method="POST" name="signUpForm" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <fieldset>
                    <legend>Sign Up</legend>
                    <div id="form">
                        <label> Name: </label>
                        <input type="text" name="firstname" autofocus>
                        <label> Surname: </label>
                        <input type="text" name="lastname">
                        <label> Email: </label>
                        <input type="email" name="email" autocomplete="on" >
                        <label> Password: </label>
                        <input id="password" type="password" name="password" >
                        <label> Repeat Password: </label>
                        <input type="password" name="passwordConfirm"><br>
                        <input type="checkbox" value="Yes" id="termsOfConditions" class="glab" name="termsOfConditions"> By creating an account
                        you agree to our <a href="#" id="terms" style="color:dodgerblue">Terms & Privacy</a>
                    </div>

                    <div>
                        <input type="submit" name="submit" value="Sign Up" id="submit">
                        <input type="reset" name="reset" value="Reset">
                    </div>
                </fieldset>
            </form>
        </div>
        <div id="tutorial1">
            <video width="480" height="280" controls>
                <source src="audioAndVideo/Sign_up_tutorial.mp4" type="video/mp4">
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