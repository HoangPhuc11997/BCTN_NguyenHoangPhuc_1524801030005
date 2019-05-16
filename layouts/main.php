
<?php require_once __DIR__."/../autoload/autoload.php";
$totalpro = 0;
    if(isset($_SESSION['cart']))
    {
        $totalpro = count($_SESSION['cart']);
    }
 ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>GameShop</title>
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
    <link rel="stylesheet" type="text/css" href="../public/frontend/css/jquery-ui1.css">
    <link href="../public/frontend/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="../public/frontend/css/flexslider.css" type="text/css" media="screen" />
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
                            <i class="fas fa-phone"></i> Gọi
                        </li>
                        <li class="number-phone mt-3">12345678099</li>
                    </ul>
                </div>
                <div class="col-md-6 logo-w3layouts text-center">
                    <h1 class="logo-w3layouts">
                        <a class="navbar-brand" href="../modules/index.php">
                            GameShop
                        </a>
                    </h1>
                </div>

                <div class="col-md-3 top-info-cart text-right mt-lg-4">
                    <ul class="cart-inner-info">
                        <li class="button-log">
                            <a class="btn-open" href="#">
                                <span class="fa fa-user" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li class="galssescart galssescart2 cart cart box_1">
                                <button class="top_googles_cart" type="submit" onclick="location.href='cart.php'" name="submit" value="">
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
                            <h5 class="text-center mb-4">Login Now</h5>
                            <div class="login p-5 bg-dark mx-auto mw-100">
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <label class="mb-2">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-2">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                                    </div>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>

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
                        <li class="nav-item">
                            <a class="nav-link ml-lg-0" href="../modules/index.php">
                                Trang chủ
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Giới thiệu</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="shop.php">
                                Shop
                            </a>
                        </li>
                        <li class="nav-item dropdown active">
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
                            <a class="nav-link" href="contact.html">Liên lạc</a>
                        </li>

                    </ul>

                </div>
            </nav>
        </header>
        <!-- banner -->
        <div class="banner_inner">
            <div class="services-breadcrumb">
                <div class="inner_breadcrumb">

                    <ul class="short">
                        <li>
                            <a href="index.html">Home</a>
                            <i>|</i>
                        </li>
                        <li>Single Page</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
    <!--//banner -->
    <!--/shop-->
    
    <!--footer -->
<!--/.navbar-->