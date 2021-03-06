<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pharmacy - HairCare</title>
    <link rel="stylesheet" type="text/css" href="Style/general.css">
    <link rel="stylesheet" type="text/css" href="Style/hair.css">
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

                <?php
                    session_start();

                    if (isset($_SESSION['email'])) {
                        echo "<span>$_SESSION[email]</span> |<a href='database/logout.php'>Logout</a> | <a href='#'>RSS Feed</a> | <a href='#'>Archived
                        news</a>";
                    } else {
                        echo "<a href='signup.php'>SignUp</a> |<a href='signIn.php'>Login</a> | <a href='#'>RSS Feed</a> | <a href='#'>Archived
                        news</a>";
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
        <h1>HairCare</h1>
        <div id="prod">
            <div id="listprod">
                <h2>Product</h2>
                <ul>
                    <li><a href="#cond">CONDITIONERS</a></li>
                    <li><a href="#curl">CURL/WAVE</a></li>
                    <li><a href="#loss">HAIR LOSS</a></li>
                    <li><a href="#vit">HAIR VITAMINS</a></li>
                </ul>

            </div>
            <div id="products">
                <ul>
                    <li>
                        <h3><a name="cond">CONDITIONERS</a></h3>
                        <ul>
                            <li>
                                <img src="Images/HairCare/Conditioners/Conditioner-Cantu.jpg" />
                                <p>Cantu Shea Butter Leave In Conditioning Repair Cream 16 oz <br>
                                    <strong>$6.95</strong></p>
                            </li>
                            <li>
                                <img src="Images/HairCare/Conditioners/Conditioner-Shea.jpg">
                                <p>Shea Moisture Jamaican Black Castor Oil Leave-In Conditioner Strengthen & Grow 11 oz
                                    <br>
                                    <strong>$15.95</strong></p>
                            </li>
                            <li>
                                <img src="Images/HairCare/Conditioners/Conditioner-Mielle.jpg" />
                                <p>Mielle Moisture RX Hawaiian Ginger Moisturizing Leave-In Conditioner 12 oz <br>
                                    <strong>$9.95</strong></p>
                            </li>
                            <li>
                                <img src="Images/HairCare/Conditioners/Conditioner-Aussie.jpg" />
                                <p>Aussie 3 Minute Miracle Curls Deep Conditioner 16 oz <br>
                                    <strong>$9.95</strong> </p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h3><a name="curl">CURL/WAVE PRODUCTS</a></h3>
                        <ul>
                            <li>
                                <img src="Images/HairCare/Culr/Curl-DevaCurl.jpg" />
                                <p>DevaCurl B'Leave-In Miracle Curl Plumper 6 oz<br>
                                    <strong>$20.00</strong></p>
                            </li>
                            <li>
                                <img src="Images/HairCare/Culr/Curl-Cantu.jpg" />
                                <p>Cantu Grapeseed Strengthening Curling Cream 12 oz<br>
                                    <strong>$7.95</strong></p>
                            </li>
                            <li>
                                <img src="Images/HairCare/Culr/Curl-Nzuri.jpg" />
                                <p>Nzuri Solutions Hair Regimen Avocado & Aloe 4 In 1 Curl Explosion Souffle 16 oz<br>
                                    <strong>$21.95</strong></p>
                            </li>
                            <li>
                                <img src="Images/HairCare/Culr/Curl-Curlisto.jpg" />
                                <p>Curlisto Structura Lotion 8 oz<br>
                                    <strong>$21.95</strong> </p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h3><a name="loss">HAIR LOSS PRODUCTS</a></h3>
                        <ul>
                            <li>
                                <img src="Images/HairCare/HairLoss/HairLoss-Dominican.jpg" />
                                <p>Dominican Magic Hair Follicle Anti-Aging Scalp Drops 4.4 oz<br>
                                    <strong>$24.95</strong></p>
                            </li>
                            <li>
                                <img src="Images/HairCare/HairLoss/HairLoss-Genuine.jpg" />
                                <p>Genuine African Formula Shea Butter Super-Lite 4 oz<br>
                                    <strong>$10.95</strong></p>
                            </li>
                            <li>
                                <img src="Images/HairCare/HairLoss/HairLoss-Africa.jpg" />
                                <p>Africa's Best Ultimate Originals Therapy Argan Oil Stimulating Growth Oil 4 oz<br>
                                    <strong>$6.95</strong></p>
                            </li>
                            <li>
                                <img src="Images/HairCare/HairLoss/HairLoss-Abril.jpg" />
                                <p>Abril Et Nature Fepean2000 Intensive Anti-Hair Loss Treatment Kit<br>
                                    <strong>$59.95</strong> </p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h3><a name="vit">HAIR VITAMINS</a></h3>
                        <ul>
                            <li>
                                <img src="Images/HairCare/Vitamins/Vitamins-Mane.jpg" />
                                <p>The Mane Choice Manetabolism Plus Hair Vitamins 60-count<br>
                                    <strong>$27.95</strong></p>
                            </li>
                            <li>
                                <img src="Images/HairCare/Vitamins/Vitamins-NouriTress.jpg" />
                                <p>NouriTress Perfect Hair Vitamins Plus 30 Tablets<br>
                                    <strong>$21.95</strong></p>
                            </li>
                            <li>
                                <img src="Images/HairCare/Vitamins/Vitamins-Mielle.jpg" />
                                <p>Mielle Organics Adult's Healthy Hair Formula Vitamins 60 Tablets<br>
                                    <strong>$19.95</strong></p>
                            </li>
                            <li>
                                <img src="Images/HairCare/Vitamins/Vitamins-Viviscal.jpg" />
                                <p>Viviscal Advanced Hair Growth Supplements 60 Tablets<br>
                                    <strong>$49.95</strong> </p>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
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
            <p>Copyright ?? 2013 - All rights reserved - Domain name</p>
            <p>Code by <a href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
        </div>
    </footer>

</body>

</html>