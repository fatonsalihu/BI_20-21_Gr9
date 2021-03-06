<?php 
   session_start();
   require_once("database/DBCreate.php");
   
   $database = new CreateDb("Pwww", "users", "products");


?>

<html lang="en" manifest="manifest.appcache">

<head>
    <meta charset="UTF-8">
    <title>Pharmacy - Homepage</title>
    <link rel="stylesheet" type="text/css" href="Style/general.css">
    <link rel="stylesheet" type="text/css" href="Style/homepage.css">
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

                <?php
                    //session_start();

                    if (isset($_SESSION['email'])) {
                        echo "<span>$_SESSION[email]</span> |<a href='database/logout.php'>Logout</a> | <a href='#'>RSS Feed</a> | <a href='database/productsToDB.php'>AAdd Products</a>";
                    } else {
                        echo "<a href='signup.php'>SignUp</a> |<a href='signIn.php'>Login</a> | <a href='#'>RSS Feed</a> | <a href='database/productsToDB.php'>Add Products</a>";
                    }
                    ?>
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
        <div id="slider">
            <div id="sliderImg">
                <img src="Images/doc.jpg" alt="sliderImg" />
            </div>
            <div id="controls">
                <svg class="arrow" id="leftArrow" width="50" height="50">
                    <circle cx="25" cy="25" r="10" stroke="black" stroke-width="2" />
                    <polyline points="30 20, 20 25 , 30 30" style="stroke:white;stroke-width:2;fill:none;" />
                </svg>

                <span id="imgControls">

                </span>

                <svg class="arrow" id="rightArrow" width="50" height="50">
                    <circle cx="25" cy="25" r="10" stroke="black" stroke-width="2" />
                    <polyline points="20 20, 30 25 , 20 30" style="stroke:white;stroke-width:2;fill:none;" />
                </svg>
            </div>
        </div>
        <div id="time">

        </div>
        <section class="elementet el1">
            <article>
                <img src="Images/24hours.png">
                <h2><a href="#"></a>Opening Hours</h2>
                <p>If you need our help we are open 24/7.</p>
            </article>

            <article>
                <img src="Images/nomedic.png">
                <h2><a href="#"></a>Medication</h2>
                <p>Stop Taking Medication without Doctor Orders.</p>
            </article>

            <article>
                <img src="Images/lowprice.png">
                <h2>Low Price</h2>
                <p>We've saved our pation more than $36 million on their medications.</p>
            </article>

            <article>
                <img src="Images/virus.png">
                <h2></a>Coronavirus Update</h2>
                <p>To reduce the risk of COVID-19 exposure you should wear mask.</p>
            </article>
        </section>
        <hr>
        <section class="elementet">

            <article>
                <a href="Images/Workout.jpg"><img src="Images/Workout.jpg" alt="Workout" height="300" width="300" /></a>
                <h2><a href="fitness.php"></a>Fitness</h2>
                <p>Help your body get all the nutrients it needs with vitamins and supplements.
                    We can help find the right health vitamins for you.</p>
                <p class="al"><a href="fitness.php">View More &raquo;</a></p>
            </article>

            <article>
                <a href="Images/SkinCare.png"><img src="Images/SkinCare.png" alt="skinCare" height="300" width="300" /></a>
                <h2>Skin Care</h2>
                <p>We can help you ind the perfect face care and skincare products to meet your skin's
                    specific needs.</p>
                <p class="al"><a href="https://www.sephora.com/shop/skincare">View More &raquo;</a></p>
            </article>

            <article>
                <a href="Images/Baby.jpg"><img src="Images/Baby.jpg" alt="babyCare" height="300" width="300" /></a>
                <h2>Baby care</h2>
                <p>Your job is to keep your babies safe and happy. Our job is to make that easier.
                    Shop safe baby care products</p>
                <p class="al"><a href="https://www.amazon.in/Baby/b?ie=UTF8&node=1571274031">View More &raquo;</a></p>
            </article>

            <article>
                <a href="Images/HairCare.jpg"><img src="Images/HairCare.jpg" alt="hairCare" height="300" width="300" /></a>
                <h2><a href="HairCare.php"></a>Hair Care</h2>
                <p>Looking for hair styling products? We???re here to help.
                    Our range of hair care products provides all you need.</p>
                <p class="al"><a href="HairCare.php">View More &raquo;</a></p>
            </article>
        </section>
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
                    qui,
                    cupiditate earum. Illum molestias neque eveniet est rem.</p>
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
            <p>Copyright ?? 2013 - All rights reserved - Domain name</p>
            <p>Code by <a href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
        </div>
    </footer>
    <script src="scripts/home.js"></script>
</body>

</html>