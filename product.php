<?php
    session_start();

    try {
        $con = mysqli_connect("localhost","root","","pwww");
    } catch (Exception $e) {
        echo "<script>alert('Connection Failed. --> check \"database name\"')</script>";
    }
    

    if (isset($_POST["add"])){
        if (isset($_SESSION["product"])){
            $item_array_id = array_column($_SESSION["product"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["product"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["product"][$count] = $item_array;
                echo '<script>window.location="product.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="product.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["product"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["product"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["product"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="product.php"</script>';
                }
            }
        }
    }
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pharmacy - Products</title>
    <link rel="stylesheet" type="text/css" href="Style/general.css">
    <link rel="stylesheet" type="text/css" href="Style/product.css">
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

                    $replace=str_replace('Archived news','Add Products','Archived news');

                    if (isset($_SESSION['email'])) {
                        echo "<span>$_SESSION[email]</span> |<a href='database/logout.php'>Logout</a> | <a href='#'>RSS Feed</a> | <a href='database/productsToDB.php'>$replace</a>";
                    } else {
                        echo "<a href='signup.php'>SignUp</a> |<a href='signIn.php'>Login</a> | <a href='#'>RSS Feed</a> | <a href='database/productsToDB.php'>$replace</a>";
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
        <div id="disclaimer">
            <p>Pharmacists are experts in medicines who can help you with minor health concerns.
                As qualified healthcare professionals, they can offer clinical advice and over-the-counter medicines for
                a range of minor illnesses, such as coughs, colds, sore throats, tummy trouble and aches and pains.
                If symptoms suggest it's something more serious, pharmacists have the right training to make sure you
                get the help you need. For example they will tell you if you need to see a GP, nurse or other</p>
                <a id="btn" href="#shop">SHOP NOW</a>
        </div>

        <div id="shop">
           
    <div>
        <table id="tableStock" cellspacing="1px" border="1">
                <caption><u><b>Products</b></u></caption>
                <thead>
                    <tr>
                        <th colspan="2">Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Add to Cart</th>
                    </tr>
                </thead>
                <tbody>
        <?php
            $query = "SELECT * FROM products ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div>
                    <tr>
                        <form method="post" action="product.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="product">
                            <td><img src="<?php echo $row['filename'];?>"></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['description'];?></td>
                        <td>&#36;<?php echo $row['price'];?></td>
                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" /> 
                        <td><input type="text" name="quantity" value="1" style="width:50px; height:30px;"></td>
                        <td>
                        
                        <input type="submit" name="add" value="Add to cart" style="background-color:grey;">
                        </td>
                            </div>
                        </form>
                        </tr>
                    </div>
                    <?php
                }
            }
        ?>
                        </tbody>
            </table>

       
        <div>
        <table id="tableStock" cellspacing="1px" border="1">
        <caption><u><b>Shopping Cart</b></u></caption>
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php
                if(!empty($_SESSION["product"])){
                    $total = 0;
                    foreach ($_SESSION["product"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td>$ <?php echo $value["product_price"]; ?></td>
                            <td>
                                $ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                            <td><a href="product.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">$ <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?>
        </table>

        </div>

    </div>
        </div>
        <div id="disclaimer">
            <h3>Dangers of Taking Medication Without a Prescription</h3>
            <img src="Images/products/alert.png" alt="alert">
            <p>Taking drugs not prescribed for you is very dangerous—even lethal. If the drug isn’t prescribed for you, you don't know what effects it may have. There are many variables that can put health at risk, including:</p>
            <ol>
                <li>Short- and long-term side effects</li>
                <li>Contradictions with certain health conditions</li>
                <li>Interactions with foods, vitamins, supplements, or other drugs (prescription or recreational) you’re taking</li>
                <li>Dosage for your size or weight, or titration (slowly increasing a dose to see how someone reacts to the drug)</li>
                <li>Drug allergies</li>
                <li>Expiration date of the drug</li>
            </ol>
            <p>If you take drugs not prescribed to you and have an unexpected serious reaction, no one will know what you took, which can delay treatment. Using someone else's prescription drug can lead to overdose and increase your risk of prescription drug use disorder.</p>
        </div>

        <div id="partners">
            <table> 
                <tr>
                    <td><figure><img src="Images/products/comp1.jpg" alt="">
                        <figcaption>Johnson&Johnson</figcaption></figure>
                    </td>
                    <td><figure><img src="Images/products/comp2.png" alt="">
                        <figcaption>Pfizer</figcaption></figure>
                    </td>
                    <td><figure><img src="Images/products/comp3.png" alt="">
                        <figcaption>Roche</figcaption></figure>
                    </td>
                    <td><figure><img src="Images/products/comp4.jpg" alt="">
                        <figcaption>Novartis</figcaption></figure>
                    </td>
                </tr>
            </table>
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