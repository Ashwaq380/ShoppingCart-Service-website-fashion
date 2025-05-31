<?php
session_start();
if (isset($_SESSION['admin'])) {
    header("location: adminHome.php");
} 
	require_once 'DbOperation.php';
	$db = new DbOperation(); 
	$rows = $db->getProducts();
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Clothes_Store</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/css/swiper-icons.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Black-Navbar.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/MUSA_carousel-product-cart-slider-carousel-product-cart-slider.css">
    <link rel="stylesheet" href="assets/css/MUSA_carousel-product-cart-slider.css">
    <link rel="stylesheet" href="assets/css/Portfolio-with-Category-switcher.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider-swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light" style="background: rgb(77,114,141);border-radius: 20;border-top-left-radius: 20;border-top-right-radius: 20;border-bottom-right-radius: 20;border-bottom-left-radius: 20;border-style: none;padding-top: 0;padding-bottom: 10px;">
        <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div></div>
            <div class="collapse navbar-collapse" id="navcol-1" style="color: rgb(255,255,255);">
                <ul class="navbar-nav nav-right">
                    <li class="nav-item"><a class="nav-link active" href="index.php" style="color: rgba(224,217,217,0.9);">Home </a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php" style="color: rgba(224,217,217,0.9);">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="orders.php" style="color: rgba(224,217,217,0.9);">Orders</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html" style="color: rgba(224,217,217,0.9);">Contact </a></li>
                </ul>
               
                <p class="ms-auto navbar-text actions">
                <?php if(!isset($_SESSION['customerID'])){?>    
                <a class="login" href="login.php" style="color: rgba(224,217,217,0.9);">Login</a>
                <a class="login" href="signup.php" style="color: rgba(224,217,217,0.9);">Signup</a> 
                <?php }
                else{ ?>
                <a class="login" href="logout.php" style="color: rgba(224,217,217,0.9);">Logout</a> <?php } ?>

                <a href="cart.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-cart3" style="color: var(--bs-body-color);font-size: 14px;width: 30px;height: 30px;">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"></path>
                        </svg></a></p>
                        
            </div>
        </div>
    </nav>
    <div class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper" style="background: rgb(77,114,141);">
                <div class="swiper-slide" style="background: rgb(77,114,141);">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 my-auto">
                                <div class="text_header">
                                    <h1 class="heading_text">Online<br>Fashion</h1><button class="btn btn-dark" type="button"><em>Shop Now</em></button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img_div"><img id="img_head" src="assets/img/lady-poses-dressing-room-with-bright-clothes-shoes-girl-beret-lilac-blouse-looking-camera-pink-background_197531-17602.avif"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background: rgb(77,114,141);">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 my-auto">
                                <div class="text_header">
                                    <h1 class="heading_text">Online<br>Fashion</h1><button class="btn btn-dark" type="button"><em>Shop Now</em></button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img_div"><img id="img_head-1" src="assets/img/fashion-photo-graceful-brunette-woman-spring-outfit-posing-holding-white-bag_273443-4124.avif"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background: rgb(77,114,141);">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 my-auto">
                                <div class="text_header">
                                    <h1 class="heading_text">Online<br>Fashion</h1><button class="btn btn-dark" type="button"><em>Shop Now</em></button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img_div"><img id="img_head-2" src="assets/img/lady-poses-dressing-room-with-bright-clothes-shoes-girl-beret-lilac-blouse-looking-camera-pink-background_197531-17602.avif"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination" style="color: rgb(0,0,0);"></div>
            <div class="swiper-button-prev" style="color: var(--bs-emphasis-color);"></div>
            <div class="swiper-button-next" style="color: var(--bs-emphasis-color);"></div>
        </div>
    </div>
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="section-title pt-4 pb-4">
                <h2>Products</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li class="filter-active" data-filter="*" style="border-color: rgb(0,0,0);">all</li>
                        <li data-filter=".men">men</li>
                        <li data-filter=".women">Women</li>
                        <li data-filter=".kids">kids</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container justify-content-center row-cols-lg-2">
                <?php
                foreach ($rows as $row) {
                    
               ?>
                <div class="col portfolio-item <?php echo $row["category"] ?> col-lg-3 col-md-4 col-sm-6 px-2 mb-4"><img class="img-fluid rounded-1" style="height: 380px;width:314px" src="<?php echo $row["image"] ?>">
                    <div class="portfolio-info">
                        <h4><?php echo $row["productName"] ?></h4>
                        <p><?php echo $row["price"] ?> SAR</p><a class="details-link" href="cart.php?id=<?php echo $row["id"] ?>&image=<?php echo $row["image"] ?>&pname=<?php echo $row["productName"] ?>&cate=<?php echo $row["category"] ?>&price=<?php echo $row["price"] ?>"><i class="fas fa-cart-plus"></i></a>
                    </div>
                </div>
                <?php
                 }
                 ?>
            </div>
        </div>
    </section>
    <footer class="text-center" style="background: rgb(77,114,141);">
        <div class="container text-white py-4 py-lg-5" style="background: rgb(77,114,141);">
            <p class="text-muted mb-0">تم تصميم الواقع بواسطة</p>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/Portfolio-with-Category-switcher-main.js"></script>
    <script src="assets/js/Simple-Slider-swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>