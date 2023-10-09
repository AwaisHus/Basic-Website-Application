<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <link href="" type="text/css" rel="stylesheet"> <!--Bootstrap Font Style-->
        <title>Flower Cart</title>
        <link rel="stylesheet" type="text/css" href="userhomepage.css"> <!--CSS for userhomepage-->
    </head>

    <body>

        <header>
            <div class="logo"><h1>FLOWER-<span>CART</span></h1></div>
                <div class="cx">
                    <div class="head"> <!--Implementing header bar with bootstrap-->
                        <ul>
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Where to find us</a></li>
                        </ul>
                        <ul>
                            <li><a href="#"><i class="fa fa-phone"></i>Call us: +44 7777777777</a></li>
                            <li><a href="logout.php"><i class="fa fa-map-maker"></i>Log Out</a></li> <!--Returns you back to the login/registration page-->
                            <li><a href="admin-CRUD.php"><i class="fa fa-user">My Account</a></li> <!--Directs you to the admin panel for CRUD-->
                        </ul>
                    </div>
                    <div class="search"> <!--Search Bar implementation-->
                        <input type="text">
                        <a href="#"><i class="fa fa-search"></i>Search</a> <!---->
                        <a href="#"><i class="fa fa-angle-down"></i>Category</a>
                        <a href="#"><i class="fa fa-shopping-cart"></i>Cart</a>
                    </div>
                </div>           
        </header>

        <nav>
            <ul> <!--Home bar banner-->
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="#"><i class="fa fa-suitcase"></i>Flowers</a></li>
                <li><a href="#"><i class="fa fa-plus-circle"></i>Bouqets</a></li>
                <li><a href="#"><i class="fa fa-tv"></i>Baskets</a></li>
                <li><a href="#"><i class="fa fa-plug"></i>Accessories</a></li>
                <li><a href="#"><i class="fa fa-laptop"></i>Extras</a></li>
            </ul>
        </nav>

        <main> <!--Main content-->
            <section class="banner">
                <div>
                    <h1>50%</h1>
                    <h1>OFF</h1>
                    <h1>Today</h1>
                    <button style="color:white;"><a href="#">Buy Now</a></button>
                </div>
                <img src="flowers/daisy.jpg" alt=""> <!--IMAGE-->
            </section>

            <section class="cl">
                <h1>BEST SELLERS</h1>
                <section class="seller">
                    <div class="inner-seller">
                        <img src="flowers/africanviolet.jpg" alt=""> <!--IMAGE-->
                        <div class="inner-left">
                            <div>
                                <p>African Voiolet</p>
                                <h5>$29.99</h5>
                                <del>$34.99</del>
                            </div>
                            </button> </button>
                        </div>
                    </div>
                    <div class="inner-seller">
                        <img src="flowers/sunflower.jpg" alt=""> <!--IMAGE-->
                        <div>
                            <div>
                                <p>Sunflowers</p>
                                <h5>$5:00 - $15:00</h5>
                                <del>$7:00 - $20:00</del>
                            </div>
                            </button> </button>
                        </div>
                    </div>
                    <div class="inner-seller">
                        <img src="flowers/flower.jpg" alt=""> <!--IMAGE-->
                        <div>
                            <div>
                                <p>Lily Flowers</p>
                                <h5>$2:00</h5>
                                <del>$3:00</del>
                            </div>
                            </button> </button>
                        </div>
                    </div>
                    <div class="inner-seller">
                        <img src="flowers/green-rose.jpg" alt=""> <!--IMAGE-->
                        <div>
                            <div>
                                <p>Green Rose</p>
                                <h5>$30:00</h5>
                                <del>$40:00</del>
                            </div>
                            </button> </button>
                        </div>
                    </div>
                </section>    
            </section>

            <section class="large">
                <div class="inner-large">
                    <img src="flowers/small1.jpg" alt=""> <!--IMAGE-->
                    <div>
                        <h1>BOUQETS</h1>
                    </div>
                </div>
                <div class="inner-large">
                    <img src="flowers/small2.jpg" alt=""> <!--IMAGE-->
                    <div>
                        <h1>PETALS</h1>
                    </div>
                </div>
                <div class="inner-large">
                    <img src="flowers/small3.jpg" alt=""> <!--IMAGE-->
                    <div>
                        <h1>FLOWERS</h1>
                    </div>
                </div>
            </section>

            <section class="cl">
                <h1>LATEST ARRIVAL</h1>
                <section class="seller">
                    <div class="inner-seller">
                        <img src="flowers/orange-flower.jpg" alt=""> <!--IMAGE-->
                        <div class="inner-left">
                            <div>
                                <p>Orange Flower</p>
                                <h5>$12:00</h5>
                                <del>$14:00</del>
                            </div>
                            </button></button>
                        </div>
                    </div>
                    <div class="inner-seller">
                        <img src="flowers/rainbow-rose.jpg" alt=""> <!--IMAGE-->
                        <div>
                            <div>
                                <p>Rainbow Bouqet</p>
                                <h5>$50:50</h5>
                                <del>$70:00</del>
                            </div>
                            </button></button>
                        </div>
                    </div>
                    <div class="inner-seller">
                        <img src="flowers/rose.jpg" alt=""> <!--IMAGE-->
                        <div>
                            <div>
                                <p>Rose Bunch</p>
                                <h5>$29:99</h5>
                                <del>$32:99</del>
                            </div>
                            </button></button>
                        </div>
                    </div>
                    <div class="inner-seller">
                        <img src="flowers/wolfbane.jpg" alt=""> <!--IMAGE-->
                        <div>
                            <div>
                                <p>Wolfbane</p>
                                <h5>$13:99</h5>
                                <del>$17:99</del>
                            </div>
                            </button></button>
                        </div>
                    </div>
                </section>    
            </section>
        
        </main>

        <footer> <!--Footer Content: Social media links-->
            <div>
                <p>SUBSCRIPTION</p>
                <input type="text" placeholder="Email">
                <button>SUBSCRIBE</button>
                <p>Connect with us</p>
                <i class="fa fa-facebook">Facebook</i>
                <i class="fa fa-twitter">Twitter</i>
                <i class="fa fa-instagram">Instagram</i>
                <i class="fa fa-youtube">YouTube</i>
                <i class="fa fa-linkedin">LinkedIn</i>
                <i class="fa fa-pinterest">Pinterest</i>
            </div>
            
            <div>
                <p>HOW TO BUY</p> <!--Footer Content: Additional links-->
                <ul>
                    <li><a href="#">Create an account</a></li>
                    <li><a href="#">Delivery options</a></li>
                    <li><a href="#">Making Payments</a></li>
                    <li><a href="#">Buyer Protection</a></li>
                    <li><a href="#">New User Guide</a></li>
                </ul>
            </div>
            <div>
                <p>CUSTOMER SERVICES</p> <!--Footer Content: Customer support links-->
                <ol>
                    <li><a href="#">Online services</a></li>
                    <li><a href="#">Secure</a></li>
                    <li><a href="#">Responsible</a></li>
                    <li><a href="#">Refund</a></li>
                </ol>
            </div>
            <div>
                <p>CONTACT US</p> <!--Footer Content: Contact support links-->
                <ol>
                    <li><a href="#"><i class=""></i>9787-address city state</a></li>
                    <li><a href="#"><i class=""></i>0777 7777 777</a></li>
                    <li><a href="#"><i class=""></i>contactus@mail.com</a></li>
                </ol>
            </div>

        </footer>

    </body>

</html>