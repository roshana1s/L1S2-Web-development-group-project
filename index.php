<!DOCTYPE html>
<html>

<head>
    <title>Home - Fabrix</title>
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="images/test.png">
</head>

<body>
    <div class="header">
        <div class="head-nav">
            <div class="nav-bar">
                <a href="index.php" class="nav-bar-logo"><img src="images/logo/logo-w.png" alt="logo-white.png" width="180px"></a>
                <a href="everything/everything.php" class="nav-bar-links-everything">EVERYTHING</a>
                <a href="women/women.php" class="nav-bar-links">WOMEN</a>
                <a href="men/men.php" class="nav-bar-links">MEN</a>
                <a href="about.php" class="nav-bar-links-about">ABOUT</a>
                <a href="contacts.php" class="nav-bar-links-contact">CONTACT US</a>
                <div class="nav-search">
                    <form role="search" id="form">
                        <input type="search" id="query" name="q" placeholder="Search..." aria-label="Search through site content">
                        <button>
                            <svg viewBox="0 0 1024 1024">
                                <path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z"></path>
                            </svg>
                        </button>
                    </form>
                </div>
                <div class="nav-bar-icons">
                    <button href="" class="nav-bar-night" title="dark mode">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill" viewBox="0 0 16 16">
                            <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
                            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.73 1.73 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.73 1.73 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.73 1.73 0 0 0 1.097-1.097zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z" />
                        </svg>
                    </button>
                    <button class="nav-bar-day">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun-fill" viewBox="0 0 16 16">
                            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708" />
                        </svg>
                    </button>
                    <a href="" class="nav-bar-wishlist" title="whishlist">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                        </svg>
                    </a>
                    <a href="" class="nav-bar-cart" title="cart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4z" />
                        </svg>
                    </a>
                    <a href="" class="nav-bar-user" title="user profile">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="head-content">
            <div class="head-main-text">Dive Into A Shower<br>Of Offers!</div>
            <br>
            <div class="head-second-text">40% Off For New Users!</div>
            <br><button class="head-shop">SHOP NOW</button>
            <a href="#main-content-4"><button class="head-find">FIND MORE</button></a>
        </div>
    </div>

    <div class="main-content">
        <div class="main-content-2">
            <div class="main-content-2-box1"></div>
            <div class="main-content-2-box2"></div>
            <div class="main-content-2-box3"></div>
        </div>
        <div class="main-content-4" id="main-content-4">
            <div class="new-user-offer">
                <div class="text1">40% OFF For New Users!</div>
                <div class="text2">Apply Coupon Code</div>
                <div class="text3">FAB40NEW</div>
                <div class="text4">(only applicable for the first purchase)</div>
                <br><button class="shop-offer">SHOP NOW</button>
            </div>
        </div>
        <div class="main-content-5">
            <div class="main-content-5-box1"></div>
            <div class="main-content-5-box2"></div>
            <div class="main-content-5-box3"></div>
        </div>
        <div class="box">
            <div class="box1">
                <img src="images/world.jpg" alt="world" width="50px" height="50px"><br>
                <div class="image-tittle1">Worldwide Shipping</div>
                <div class="tittle1-info"></div>
            </div>
            <div class="box2">
                <img src="images/best-quality.png" alt="quality" width="50px" height="50px"><br>
                <div class="image-tittle2">Best Quality</div>
                <div class="tittle2-info"></div>
            </div>
            <div class="box3">
                <img src="images/best-offer.png" alt="offers" width="40px" height="50px"><br>
                <div class="image-tittle3">Best Offers</div>
                <div class="tittle3-info"></div>
            </div>
            <div class="box4">
                <img src="images/paymant.jpg" alt="payment" width="40px" height="40px"><br>
                <div class="image-tittle4">Secure Payments</div>
                <div class="tittle4-info"></div>
            </div>
        </div>
    </div>
    <br><br>

    <div class="footer">
        <div class="ul1">
            <div class="li1">MAY WE HELP YOU?</div><br>
            <div>Contact Us</div>
            <div>My Order</div>
            <div>FAQs</div>
            <div>Email Unsubscribe</div>
            <div>Sitemap</div>
        </div>
        <div class="ul2">
            <div class="li1">THE COMPANY</div><br>
            <div>About Fabrix</div>
            <div>Code of Ethics</div>
            <div>Careers</div>
            <div>Legal</div>
            <div>Corporate Information</div>
        </div>
        <div class="ul3">
            <div class="li1">Fabrix SERVICES</div><br>
            <div>Discover our services</div>
            <div>Book an Appointment</div>
            <div>Collect In-Store</div>
        </div><br><br>
        <div class="footer-logo">
            <div>F</div>
            <div>A</div>
            <div>B</div>
            <div>R</div>
            <div>I</div>
            <div>X</div>
        </div>
        <div>
            <a href="#"><img src="images/icons/twiiter.png" alt="twitter" width="70px" height="40px"></a>
            <a href="#" class="footer-icon1"><img src="images/icons/facebook.png" alt="facebook" width="70px" height="50px"></a>
            <a href="#" class="footer-icon2"><img src="images/icons/youtube.png" alt="youtube" width="55px" height="45px"></a>
            <a href="#" class="footer-icon3"><img src="images/icons/insragram.png" alt="instragram" width="70px" height="50px"></a>
        </div>
        <div class="footer-last">© 2023 Fabrix, Inc. All Rights Reserved</div>
    </div>
</body>

</html>