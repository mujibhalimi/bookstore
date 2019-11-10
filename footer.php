<?php
include_once "admin_4/config.php";
include_once "admin_4/core.php";
$db=new core();
if (isset($_POST['btn']))
{
    $email=$_POST['email'];

    $query="insert into subscribe(email) VALUES('$email') ";
    $run=$db->insert($query);

    header('location:index.php');
}
?>

<footer id="footer">

    <!-- Footer columns -->
    <div class="footer-columns">
        <div class="container">

            <!-- Add banner
            <div class="footer-ad-banner">
                <a href="#"><img src="images/footer-ad-banner.jpg" alt=""></a>
            </div>
            <!-- Add banner -->

            <!-- Columns Row -->
            <div class="row">

                <!-- Footer Column -->
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-column logo-column">
                        <a href="index.php"><img src="images/footerlogo.png" alt=""></a>
                        <p>Find out how to prepare your book for an editor with these 4 writing tips! The editing process can be a wonderful opportunity for writers.</p>
                        <ul class="address-list">
                            <li><i class="fa fa-home"></i>888 South Avenue Street, New York City.</li>
                            <li><i class="fa fa-phone"></i>0093(0)777-626-161 & 0093(0)700-626-161 </li>
                            <li><i class="fa fa-envelope"></i>Momand.books@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Column -->

                <!-- Footer Column -->
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-column footer-links">
                        <h4>Information</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Recommended our site</a></li>
                            <li><a href="#">FAQS</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Column -->

                <!-- Footer Column
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-column footer-links">
                        <h4>Shipping info</h4>
                        <ul>
                            <li><a href="#">New Products</a></li>
                            <li><a href="#">top Sellers</a></li>
                            <li><a href="#">Manufactirers</a></li>
                            <li><a href="#">Suppliers</a></li>
                            <li><a href="#">Special</a></li>
                            <li><a href="#">Imported</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Column -->

                <!-- Footer Column -->
                <div class="col-lg-6 col-sm-12">
                    <div class="footer-column newsletter">
                        <h4>Weekly Newsletter</h4>
                        <p>Get our awesome releases and latest updates with exclusive news and offers in your inbox.</p>
                        <form action="footer.php" method="post" class="newsletter-input">
                            <i class="fa fa-envelope-o"></i>
                            <input class="form-control.newsletter" name="email" type="text" placeholder="Enter Your Email">
                            <button type="submit" name="btn">SUBSCRIBE</button>
                        </form>
                        <p>We're on Social Networks. Follow us &amp; get in touch!</p>
                        <ul class="social-icons">
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                            <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Column -->

            </div>
            <!-- Columns Row -->

        </div>
    </div>
    <!-- Footer columns -->

    <!-- Sub Footer -->
    <div class="sub-foorer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p>Copyright <i class="fa fa-copyright"></i> <?php echo date('Y'); ?> <span class="theme-color">Momand Book Store</span> All Rights Reserved.</p>
                </div>
                <div class="col-sm-6">
                    <a class="back-top" href="#">Back to Top<i class="fa fa-caret-up"></i></a>
                    <ul class="cards-list">
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Footer -->

</footer>