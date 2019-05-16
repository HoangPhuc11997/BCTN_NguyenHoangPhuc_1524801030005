
<?php require_once __DIR__."/../autoload/autoload.php";
$totalpro = 0;
    if(isset($_SESSION['cart']))
    {
        $totalpro = count($_SESSION['cart']);
    }
    $keyss = "";
    $sql = "SELECT * FROM product  
            ORDER BY created
            LIMIT 8  ";
    $sql1 = "SELECT * FROM product LIMIT 8  ";
    $product = $db->fetchsql($sql);
    $product2 = $db->fetchsql($sql);
    if(isset($_POST["btnsearch"]))
    {
        $keyss = $_POST['keys'];
    }

 ?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Trang chủ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="../public/frontend/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="../public/frontend/css/login_overlay.css" rel='stylesheet' type='text/css' />
    <link href="../public/frontend/css/style6.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="../public/frontend/css/shop.css" type="text/css" />
    <link rel="stylesheet" href="../public/frontend/css/owl.carousel.css" type="text/css" media="all">
    <link rel="stylesheet" href="../public/frontend/css/owl.theme.css" type="text/css" media="all">
    <link href="../public/frontend/css/style.css" rel='stylesheet' type='text/css' />
    <link href="../public/frontend/css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
        rel="stylesheet">
</head>

<body>
    <div class="banner-top container-fluid" id="home">
        <!-- header -->
        <header>
            <div class="row">
                <div class="col-md-3 top-info text-left mt-lg-4">
                    <a href="register.php">Đăng ký</a>
                    <h6>Cần giúp đỡ</h6>
                    <ul>
                        <li>
                            <i class="fas fa-phone"></i> Gọi</li>
                        <li class="number-phone mt-3">12345678099</li>
                    </ul>
                </div>
                <div class="col-md-6 logo-w3layouts text-center">
                    <h1 class="logo-w3layouts">
                        <a class="navbar-brand" href="index.php">
                            GameShop </a>
                    </h1>
                </div>

                <div class="col-md-3 top-info-cart text-right mt-lg-4">
                    <ul class="cart-inner-info">
                        <?php if( !isset($_SESSION['name_id'])) : ?>
                            <li class="">
                            <a class="btn-open" href="login.php">
                                <span class="fa fa-user" aria-hidden="true"></span>
                            </a>
                            </li>
                        <?php else : ?>
                            <li class="button-log">
                            <a class="btn-open" href="#">
                                <span class="fa fa-user" aria-hidden="true"></span>
                            </a>
                            </li>
                        <?php endif ?>
                        <li class="galssescart galssescart2 cart cart box_1">
                                <button class="top_googles_cart" type="submit" name="submit" onclick="location.href='cart.php'" value="">
                                    Giỏ Hàng (<?php echo $totalpro ?>)
                                    <i class="fas fa-cart-arrow-down"></i>
                                </button>
                        </li>
                    </ul>
                    <!---->
                    <div class="overlay-login text-left">
                        <?php if(isset($_SESSION['user_name'])) : ?>
                            <p style="margin: 10px 10px 10px 10px;padding-top: 20px;color: red">Xin chào , <?php echo $_SESSION['user_name'] ?><a style="margin: 10px 10px 10px 10px;" href="logout.php">Đăng xuất</a></p>
                        <?php endif ?>
                        <button type="button" class="overlay-close1">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                        <div class="wrap">
                            <h5 class="text-center mb-4">Thông tin khách hàng</h5>
                            <div class="login p-5 bg-dark mx-auto mw-100">
                                <form action="#" method="post">
                                     <a href="" class="btn btn-primary submit mb-4">Xem thông tin</a>
                                     <a href="" class="btn btn-primary submit mb-4">Xem đơn hàng</a>

                                </form>
                            </div>
                            <!---->
                        </div>
                    </div>
                    <!---->
                </div>
            </div>
            <div class="search">
                <div class="mobile-nav-button">
                    <button id="trigger-overlay" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <!-- open/close -->
                <div class="overlay overlay-door">
                    <form action="search.php" method="get" class="d-flex">
                        <input class="form-control" type="text" name="search" placeholder="Search here...">
                        <button type="submit" name="btnsearch" class="btn btn-primary submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>

                </div>
                <!-- open/close -->
            </div>
            <label class="top-log mx-auto"></label>
            <nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

                <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-mega mx-auto">
                        <li class="nav-item ">
                            <a class="nav-link ml-lg-0" href="index.php">Trang Chủ
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Giới thiệu</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="shop.php">
                                Shop
                            </a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#">
                                Sản phẩm
                            </a>
                            <ul class="dropdown-menu mega-menu ">
                                <li>
                                    <div class="row">
                                        <?php foreach ($category as $item1) : ?>
                                            <div class="col-sm-4">
                                                <ul class="multi-column-dropdown">
                                                    <li class="fa fa-search" style="padding-bottom: 20px;"><a href="category.php?id=<?php echo $item1['id'] ?>"><?php echo $item1['name'] ?></a></li>   
                                                </ul>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Liên hệ</a>
                        </li>
                    </ul>

                </div>
            </nav>
        </header>
        <!-- //header -->
        <!-- banner -->
        <div class="banner">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="carousel-caption text-center">
                            <h3>Final Fantasy Game
                                <span>World Of Fantasy</span>
                            </h3>
                            <a href="shop.php" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
                        </div>
                    </div>
                    <div class="carousel-item item2">
                        <div class="carousel-caption text-center">
                            <h3>Lower Price Game
                                <span>Want to Look Your Best?</span>
                            </h3>
                            <a href="shop.php" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

                        </div>
                    </div>
                    <div class="carousel-item item3">
                        <div class="carousel-caption text-center">
                            <h3>Final Fantasy Game
                                <span>World Of Fantasy</span>
                            </h3>
                            <a href="shop.php" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

                        </div>
                    </div>
                    <div class="carousel-item item4">
                        <div class="carousel-caption text-center">
                            <h3>Lower Price Game
                                <span>Want to Look Your Best?</span>
                            </h3>
                            <a href="shop.php" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!--//banner -->
        </div>
    </div>
    <!--//banner-sec-->
    <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
        <div class="container-fluid">
            <div class="inner-sec-shop px-lg-4 px-3">
                <h3 class="tittle-w3layouts my-lg-4 my-4">Sản phẩm mới </h3>
                <div class="row">
                    <!-- /womens -->

                    <?php foreach ($product2 as $item) :?>
                        <div class="col-md-3 product-men women_two">
                        <div class="product-googles-info googles" style="height:400px">
                            <div class="men-pro-item">
                                <div class="men-thumb-item">
                                    <img src="../public/uploads/product/<?php echo $item['image_link']?>" class="img-fluid" alt="">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="detail.php?id=<?php echo $item['id'] ?>" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>
                                </div>
                                <div class="item-info-product">
                                    <div class="info-product-price">
                                        <div class="grid_meta">
                                            <div class="product_price">
                                                <h4>
                                                    <a href="detail.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a>
                                                </h4>
                                                <div class="grid-price mt-2">
                                                    <span class="money "><?php echo number_format($item['price']) ?> VNĐ</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="googles single-item hvr-outline-out">
                                             <button type="submit" class="googles-cart pgoogles-cart" onclick="location.href='addcart.php?id=<?php echo $item['id'] ?>'">
                                                        <i class="fas fa-cart-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <!-- //womens -->
                <!-- /mens -->
                <!--//row-->
                <!--/meddle-->
                <div class="row">
                    <div class="col-md-12 middle-slider my-4">
                        <div class="middle-text-info ">

                            <h3 class="tittle-w3layouts two text-center my-lg-4 mt-3">Bla bla bla ...</h3>
                            <div class="simply-countdown-custom" id="simply-countdown-custom"></div>

                        </div>
                    </div>
                </div>
                <!--//meddle-->
                <!--/slide-->
                <div class="slider-img mid-sec">
                    <!--//banner-sec-->
                    <div class="mid-slider">
                        <div class="owl-carousel owl-theme row">
                            <?php foreach ($product as $item ): ?>
                                <div class="item">
                                <div class="gd-box-info text-center">
                                    <div class="product-men women_two bot-gd">
                                        <div class="product-googles-info slide-img googles" style="height: 400px">
                                            <div class="men-pro-item">
                                                <div class="men-thumb-item">
                                                    <img src="<?php echo uploads() ?>product/<?php echo $item['image_link'] ?>" class="img-fluid" alt="">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="detail.php?id=<?php echo $item['id'] ?>" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                </div>
                                                <div class="item-info-product">

                                                    <div class="info-product-price">
                                                        <div class="grid_meta">
                                                            <div class="product_price">
                                                                <h4>
                                                                    <a href="detail.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?> </a>
                                                                </h4>
                                                                <div class="grid-price mt-2">
                                                                    <span class="money "><?php echo number_format($item['price']) ?> VNĐ</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="googles single-item hvr-outline-out">
                                                                <button type="submit" class="googles-cart pgoogles-cart" onclick="location.href='addcart.php?id=<?php echo $item['id'] ?>'">
                                                                    <i class="fas fa-cart-plus"></i>
                                                                </button>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>

                <div class="row galsses-grids pt-lg-5 pt-3">
                    <div class="col-lg-6 galsses-grid-left">
                        <figure class="effect-lexi">
                            <img src="../public/frontend/images/Banner-2-512x512.png" style="height: 500px;" alt="" class="img-fluid">
                            <figcaption>
                                <p>
                                    <a href="game.php"><p style="color: red;">Bấm để xem.</p></a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-6 galsses-grid-left">
                        <figure class="effect-lexi">
                            <img src="../public/frontend/images/Banner-2-512x512.png" alt="" class="img-fluid">
                            <figcaption>
                                <h3>Editor's
                                    <span>Pick</span>
                                </h3>
                                <p>Express your style now.</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!-- /grids -->
                <div class="bottom-sub-grid-content py-lg-5 py-3">
                    <div class="row">
                        <div class="col-lg-4 bottom-sub-grid text-center">
                            <div class="bt-icon">

                                <span class="far fa-hand-paper"></span>
                            </div>

                            <h4 class="sub-tittle-w3layouts my-lg-4 my-3">HỖ TRỢ TẬN TÌNH</h4>
                            <p>Hệ thống support online liên tục từ 8h-24h.</p>
                            <p>
                                <a href="shop.php" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
                            </p>
                        </div>
                        <!-- /.col-lg-4 -->
                        <div class="col-lg-4 bottom-sub-grid text-center">
                            <div class="bt-icon">
                                <span class="fas fa-rocket"></span>
                            </div>

                            <h4 class="sub-tittle-w3layouts my-lg-4 my-3">GIAO HÀNG CỰC NHANH</h4>
                            <p>Hệ thống giao hàng tự động chỉ 5 phút.</p>
                            <p>
                                <a href="shop.php" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
                            </p>
                        </div>
                        <!-- /.col-lg-4 -->
                        <div class="col-lg-4 bottom-sub-grid text-center">
                            <div class="bt-icon">
                                <span class="far fa-sun"></span>
                            </div>

                            <h4 class="sub-tittle-w3layouts my-lg-4 my-3">✯ UY TÍN 5✩</h4>
                            <p>Được bình chọn là Shop Game Uy Tín nhất VN !</p>
                            <p>
                                <a href="shop.php" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
                            </p>
                        </div>
                        <!-- /.col-lg-4 -->
                    </div>
                </div>
                <!-- //grids -->
                <!-- /clients-sec -->
                <!-- //clients-sec -->
            </div>
        </div>
    </section>
    <!-- about -->
    <!--footer -->
    <footer class="py-lg-5 py-3">
        <div class="container-fluid px-lg-5 px-3">
            <div class="row footer-top-w3layouts">
                <div class="col-lg-3 footer-grid-w3ls">
                    <div class="footer-title">
                        <h3>Tổng quan</h3>
                    </div>
                    <div class="footer-text">
                        <p>Bla bla bla... .</p>
                        <ul class="footer-social text-left mt-lg-4 mt-3">

                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-facebook-f"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-google-plus-g"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-linkedin-in"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fas fa-rss"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-vk"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 footer-grid-w3ls">
                    <div class="footer-title">
                        <h3>Liên hệ</h3>
                    </div>
                    <div class="contact-info">
                        <h4>Địa chỉ :</h4>
                        <p>Đại Học Thủ Dầu Một.</p>
                        <div class="phone">
                            <h4>Hotline :</h4>
                            <p>Phone : +121 098 8907 9987</p>
                            <p>Email :
                                <a href="mailto:info@example.com">info@example.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 footer-grid-w3ls">
                    <div class="footer-title">
                        <h3>Thông tin</h3>
                    </div>
                    <ul class="links">
                        <li>
                            <a href="#">Giới thiệu</a>
                        </li>
                        <li>
                            <a href="#">Game bản quyền là gì?</a>
                        </li>
                        <li>
                            <a href="#">Chính sách bảo mật</a>
                        </li>
                        <li>
                            <a href="#">Điều khoản dịch vụ</a>
                        </li>
                    </ul>
                </div>
                   <div class="col-lg-3 footer-grid-w3ls">
                    <div class="footer-title">
                        <h3>Chăm sóc khách hàng</h3>
                    </div>
                    <ul class="links">
                        <li>
                            <a href="#">Liên hệ</a>
                        </li>
                        <li>
                            <a href="#">Sơ đồ trang</a>
                        </li>
                        <li>
                            <a href="#">Chế độ bảo hành</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="copyright-w3layouts mt-4">
                <p class="copy-right text-center ">&copy; Copyright 2018 W3layout
                </p>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!--jQuery-->
    <script src="../public/frontend/js/jquery-2.2.3.min.js"></script>
    <!-- newsletter modal -->
    <!-- Modal -->
    <!-- Modal -->
    
    </div>
    <script>
        $(document).ready(function () {
            $("#myModal").modal();
        });
    </script>
    <!-- // modal -->

    <!--search jQuery-->
    <script src="../public/frontend/js/modernizr-2.6.2.min.js"></script>
    <script src="../public/frontend/js/classie-search.js"></script>
    <script src="../public/frontend/js/demo1-search.js"></script>
    <!--//search jQuery-->
    <!-- cart-js -->
    <script src="../public/frontend/js/minicart.js"></script>
    <script>
        googles.render();

        googles.cart.on('googles_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->
    <script>
        $(document).ready(function () {
            $(".button-log a").click(function () {
                $(".overlay-login").fadeToggle(200);
                $(this).toggleClass('btn-open').toggleClass('btn-close');
            });
        });
        $('.overlay-close1').on('click', function () {
            $(".overlay-login").fadeToggle(200);
            $(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
            open = false;
        });
    </script>
    <!-- carousel -->
    <!-- Count-down -->
    <script src="../public/frontend/js/simplyCountdown.js"></script>
    <link href="../public/frontend/css/simplyCountdown.css" rel='stylesheet' type='text/css' />
    <script>
        var d = new Date();
        simplyCountdown('simply-countdown-custom', {
            year: d.getFullYear(),
            month: d.getMonth() + 2,
            day: 25
        });
    </script>
    <!--// Count-down -->
    <script src="../public/frontend/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    900: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: 4,
                        nav: true,
                        loop: false,
                        margin: 20
                    }
                }
            })
        })
    </script>

    <!-- //end-smooth-scrolling -->


    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
  <script src="../public/frontend/js/move-top.js"></script>
    <script src="../public/frontend/js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
                                    var defaults = {
                                          containerID: 'toTop', // fading element id
                                        containerHoverID: 'toTopHover', // fading element hover id
                                        scrollSpeed: 1200,
                                        easingType: 'linear' 
                                     };
                                    */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->

    <script src="../public/frontend/js/bootstrap.js"></script>
    <!-- js file -->
</body>

</html>

