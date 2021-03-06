<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pharmacy - Fitness</title>
    <link rel="stylesheet" type="text/css" href="Style/general.css">
    <link rel="stylesheet" type="text/css" href="Style/fitness.css">
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
                <<p id="login">

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
        <section id="info">
            <h1>Vitamins and supplements advice</h1>
            <p>Help your body get all the nutrients it needs with vitamins and supplements. We can help find the right
                health vitamins for you, whether you???re looking to boost your energy, encourage hair growth or care for
                your bones.</p>
            <div id="buttons">
                <a class="btn" href="https://lloydspharmacy.com/blogs/vitamins-and-supplement-advice/vitamin-d-deficiency-symptoms">Vitamin
                    D deficiency &nbsp;&nbsp;&nbsp; &#x2192;</a>
                <a class="btn" class="btn" href="https://lloydspharmacy.com/blogs/vitamins-and-supplement-advice/vitamin-c-deficiency-symptoms">Vitamin
                    C deficiency &nbsp;&nbsp;&nbsp; &#x2192;</a>
                <a class="btn" href="https://lloydspharmacy.com/blogs/vitamins-and-supplement-advice/sources-vitamin-d">Sources of
                    vitamin D &nbsp;&nbsp;&nbsp; &#x2192;</a>
                <a class="btn" href="https://lloydspharmacy.com/blogs/vitamins-and-supplement-advice/vitamin-b-complex-benefits">Vitamin
                    B complex? &nbsp;&nbsp;&nbsp; &#x2192;</a>
            </div>
        </section>

        <section id="safety">
            <div id="lSide">
                <h1>Taking vitamins and supplements safely</h1>
                <p>If you???re looking to introduce vitamins and supplements into your daily routine there???s a few things
                    you should be aware of first. Depending on your own personal circumstances and health or even age
                    some vitamins may not be suitable for you. So, to ensure that they???re safe for you to take you can
                    speak to one of our pharmacists or your doctor about what may be right for you. Make sure to read
                    the label for dosage advice as well as online guides and the <a href="https://nhs.uk" target="blank"><abbr title="National Helath Service">NHS</abbr></a> website. <span>There may also be ingredients that aren't safe for you to
                        have, or you may choose not to eat</span>, for example if you have a seafood allergy or want
                    halal vitamins and supplements instead. </p>
            </div>
            <div id="rSide">
            </div>
        </section>

        <section id="podcast">
            <details>
                <summary>Listen to our podcast on fitness nutrition and questions</summary>
                <table border="1" cellspacing="1.3px" cellpadding="3px">
                    <thead>
                        <tr>
                            <th>Episode nr.</th>
                            <th>Date first aired</th>
                            <th>Title</th>
                            <th>Audio</th>
                            <th>Audience reach</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>12/07/2020</td>
                            <td>Foundations of Fitness Nutrition</td>
                            <td>
                                <audio controls>
                                    <source src="audioAndVideo/0s_to_180s_Foundations_of_Fitness_Nutrition___Podc.mp3" type="audio/mpeg">
                                    Your browser does not support audio files.
                                </audio>
                            </td>
                            <td>330k</td>
                        </tr>

                        <tr>
                            <td>2.</td>
                            <td>12/08/2020</td>
                            <td>Answering your fitness nutrition questions</td>
                            <td>
                                <audio controls>
                                    <source src="audioAndVideo/0s_to_180s_Living_Superhuman_Fitness_Podcast_Ep_.mp3" type="audio/mpeg">
                                    Your browser does not support audio files.
                                </audio>
                            </td>
                            <td>420k</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th align="right" style="padding-right: 40px;" colspan="5">750k</th>
                        </tr>
                    </tfoot>
                </table>
            </details>
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