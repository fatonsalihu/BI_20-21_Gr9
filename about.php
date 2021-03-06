<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="Style/general.css">
    <link rel="stylesheet" type="text/css" href="Style/about.css">
    <script src="scripts/general.js"></script>
    <script>
        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));
        }
    </script>

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
        <section id="story">
            <h3>Our Story</h3>
            <img src="Images/about/doc1.jpg" alt="doci">
            <blockquote>"The essence of our culture is built on meeting global standards in every aspect of our
                business."</blockquote>
            <p>We have established world-class manufacturing facilities by leveraging state-of-the-art technology,
                incorporating best practices and adhering to stringent regulatory compliances. Our plants are approved
                by prestigious US FDA, UK MHRA, Australian TGA and other foreign health authorities.

                Our R&D capabilities include dossier development, chemical synthesis, process optimization, formulation
                development, analytical development and conducting stability studies. We have a team of over 50
                experienced scientists specializing in formulation development and analytical development.

                We possess end-to-end capabilities ??? from Lab scale development to Pilot scale up and from
                commercializing the product for large scale manufacturing to marketing globally.

                The company has achieved global recognition within a very short span of time and has major global
                expansion plans for the near future.</p>
        </section>

        <section id="staff">
            <h3>Our Staff</h3>
            <table>
                <tr>
                    <td><img src="Images/about/photo1.jpg"></td>
                    <td>
                        <dl>
                            <dt>Name:</dt>
                            <dd>Keneth Frazier</dd>
                            <dt>Position:</dt>
                            <dd>CEO of Pharmacy</dd>
                            <dt>Email:</dt>
                            <dd><a href="mailto:k.frazer@mail.com">k.frazer@mail.com</a></dd>
                            <dt>Phone:</dt>
                            <dd>0043223</dd>
                        </dl>
                    </td>
                </tr>
                <tr>
                    <td><img src="Images/about/photo2.jpg"></td>
                    <td>
                        <dl>
                            <dt>Name:</dt>
                            <dd>John Doe</dd>
                            <dt>Position:</dt>
                            <dd>Lead Researcher</dd>
                            <dt>Email:</dt>
                            <dd><a href="mailto:johndoe@mail.com">johndoe@mail.com</a></dd>
                            <dt>Phone:</dt>
                            <dd>0043223</dd>
                        </dl>
                    </td>
                </tr>
                <tr>
                    <td><img src="Images/about/photo3.jpg" alt=""></td>
                    <td>
                        <dl>
                            <dt>Name:</dt>
                            <dd>Filan Fisteku</dd>
                            <dt>Position:</dt>
                            <dd>CPO</dd>
                            <dt>Email:</dt>
                            <dd><a href="mailto:fisteku@mail.com">fisteku@mail.com</a></dd>
                            <dt>Phone:</dt>
                            <dd>0043223</dd>
                        </dl>
                    </td>
                </tr>
            </table>
            <table id="secondT">
                <tr>
                    <td>
                        <dl>
                            <dt>Name:</dt>
                            <dd>Keneth Frazier</dd>
                            <dt>Position:</dt>
                            <dd>CEO of Pharmacy</dd>
                            <dt>Email:</dt>
                            <dd><a href="mailto:k.frazer@mail.com">k.frazer@mail.com</a></dd>
                            <dt>Phone:</dt>
                            <dd>0043223</dd>
                        </dl>
                    </td>
                    <td><img src="Images/about/photo1.jpg"></td>
                </tr>
                <tr>
                    <td>
                        <dl>
                            <dt>Name:</dt>
                            <dd>John Doe</dd>
                            <dt>Position:</dt>
                            <dd>Lead Researcher</dd>
                            <dt>Email:</dt>
                            <dd><a href="mailto:johndoe@mail.com">johndoe@mail.com</a></dd>
                            <dt>Phone:</dt>
                            <dd>0043223</dd>
                        </dl>
                    </td>
                    <td><img src="Images/about/photo2.jpg"></td>
                </tr>
                <tr>
                    <td>
                        <dl>
                            <dt>Name:</dt>
                            <dd>Filan Fisteku</dd>
                            <dt>Position:</dt>
                            <dd>CPO</dd>
                            <dt>Email:</dt>
                            <dd><a href="mailto:fisteku@mail.com">fisteku@mail.com</a></dd>
                            <dt>Phone:</dt>
                            <dd>0043223</dd>
                        </dl>
                    </td>
                    <td><img src="Images/about/photo3.jpg" alt=""></td>
                </tr>
            </table>
        </section>

        <section id="location">
            <h3>Our Location</h3>
            <address>
                Rruga &#x000C7;er&#x000E7;iz Topulli <br>
                &#x000CB;ndrra &#x000EB;sht&#x000EB; k&#x000EB;tu Complex<br>
                Shkod&#x000EB;r , Albania
            </address>
            <div id="map">

            </div>

            <script src="scripts/location.js"></script>
        </section>

        <section id="game">
            <h3>Play our game while you wait</h3>
            <canvas id="gamePad" width="600" height="600" style="border:1px solid #000000;background:white">
            </canvas>
            <button id="playButton" onclick="startWorker()">PLAY</button>
            <img id="mario" src="Images/about/mario.png" width="50px" height="50px" style="display: none;">
            <p id="result"></p>
            <script>
                var w;
                function startWorker() {
                    try {
                        if (typeof (Worker) !== "undefined") {
                            if (typeof (w) == "undefined") {
                                w = new Worker("scripts/worker.js");
                            }
                            w.onmessage = function (event) {
                                document.getElementById("result").innerHTML = event.data + " seconds passed since game first started";
                            };
                        } else {
                            document.getElementById("result").innerHTML = "Sorry! No Web Worker support.";
                        }
                    } catch (error) {
                        document.getElementById("result").innerHTML = error.message;
                    }

                }
            </script>
            <script src="scripts/game.js"></script>
        </section>
        <div id="draganddrop">
            <h2>Drag and Drop</h2>
            <h3>Sort leters and numbers</h3>
            <div id="box">
                <div class="ln">
                    <h4>Letters</h4>
                    <div id="dragdiv1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                </div>
                <div class="ln">
                    <h4>Numbers</h4>
                    <div id="dragdiv2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                </div>
            </div>

            <div id="characters">
                <p draggable="true" ondragstart="drag(event)" id="drag1">a</p>
                <p draggable="true" ondragstart="drag(event)" id="drag2">3</p>
                <p draggable="true" ondragstart="drag(event)" id="drag3">2</p>
                <p draggable="true" ondragstart="drag(event)" id="drag4">c</p>
                <p draggable="true" ondragstart="drag(event)" id="drag5">1</p>
                <p draggable="true" ondragstart="drag(event)" id="drag6">b</p>
            </div>
            <p id="funFact"></p>
        </div>
        <script>
            document.getElementById('funFact').innerHTML = `Did you know that the maximum number you can represent in JS is ${Number.MAX_VALUE.toExponential().toString()}. Meanwhile the lowest is ${Number.MIN_VALUE.toFixed()}`;
        </script>
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
                    <button>SUBMIT</button>
                </form>
            </div>
        </div>

        <div id="rights">
            <p>Copyright ?? 2013 - All rights reserved - Domain name</p>
            <p>Code by <a href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
        </div>
    </footer>



    <script src="scripts/background.js"></script>

</body>

</html>