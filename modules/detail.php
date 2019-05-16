<?php require_once __DIR__."/../autoload/autoload.php"; ?>
<link rel="stylesheet" type="text/css" href="../public/frontend/css/checkout.css">
<?php 
	$id = intval(getInput('id'));
      
	$product = $db->fetchID("product",$id);
    if(empty($product)){
        echo "<script>alert('Dữ liệu không tồn tại');location.href='index.php'</script>";
      }
	$cateid = intval($product['catalog_id']);
	$sql = "SELECT * FROM product WHERE id != $id && catalog_id = $cateid ";
	$relatedproduct = $db->fetchsql($sql);

?>
<?php require_once __DIR__."/../layouts/main.php"; ?>
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
	<div class="container">
    <div class="inner-sec-shop pt-lg-4 pt-3">
        <div class="row">
            <div class="col-lg-4 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider1">
                        <ul class="slides">
                            <li data-thumb="<?php echo uploads() ?>product/<?php echo $product['image_link'] ?>">
                                <div class="thumb-image"> <img src="<?php echo uploads() ?>product/<?php echo $product['image_link'] ?>" data-imagezoom="true" class="img-fluid" alt=" "> </div>
                            </li>
                            <li data-thumb="<?php echo uploads() ?>product/<?php echo $product['image_link'] ?>">
                                <div class="thumb-image"> <img src="<?php echo uploads() ?>product/<?php echo $product['image_link'] ?>" data-imagezoom="true" class="img-fluid" alt=" "> </div>
                            </li>
                            <li data-thumb="<?php echo uploads() ?>product/<?php echo $product['image_link'] ?>">
                                <div class="thumb-image"> <img src="<?php echo uploads() ?>product/<?php echo $product['image_link'] ?>" data-imagezoom="true" class="img-fluid" alt=" "> </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 single-right-left simpleCart_shelfItem">
                <h3><?php echo $product['name'] ?></h3>
                <p>
                    <span class="item_price"><?php echo number_format($product['price']) ?> VNĐ</span>
                </p>
                <div class="description">
                    <h5>Có mã </h5>
                    <form action="#" method="post">
                        <input class="form-control" type="text" name="Email" placeholder="Please enter..." required="">
                        <input type="submit" value="Check">
                    </form>
                </div>            
                <div class="occasion-cart">
                    <div class="googles single-item singlepage">
                        <input type="submit" class="btn btn-info" value="Thêm vào giỏ hàng" onclick="location.href='addcart.php?id=<?php echo $product['id'] ?>'">
                    </div>
                </div>
                <ul class="footer-social text-left mt-lg-4 mt-3">
                    <li>Chia sẻ : </li>
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

                </ul>

            </div>
            <div class="clearfix"> </div>
            <!--/tabs-->
            <div class="responsive_tabs">
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li>Mô tả</li>
                        <li>Cấu hình</li>
                    </ul>
                    <div class="resp-tabs-container">
                        <!--/tab_one-->
                        <div class="tab1">

                            <div class="single_page">
                                <h6><?php echo $product['name'] ?></h6>
                                <p class="para">
                                    <?php echo $product['content'] ?>
                                </p>
                            </div>
                        </div>
                        <div class="tab2">

                            <div class="single_page">
                                <h6>@Model.Name</h6>
                                <p>
                                    @Model.Description;
                                </p>
                                <p class="para">
                                    MINIMUM:
									Requires a 64-bit processor and operating system
									OS: Windows 7 SP1 with Platform Update
									Processor: AMD FX-4350, 4.2 GHz / Intel Core i5-2300, 2.80 GHz
									Memory: 6 GB RAM
									Graphics: AMD HD 7870, 2 GB / NVIDIA GTX 660, 2 GB
									DirectX: Version 11
									Network: Broadband Internet connection
									Storage: 70 GB available space
									Additional Notes: X64 required
                                </p>
                            </div>
                        </div>
                        <!--//tab_one-->
                    </div>
                </div>
            </div>
            <!--//tabs-->

        </div>
    </div>
</div>
<div class="container-fluid">
    <!--/slide-->
    <div class="slider-img mid-sec mt-lg-5 mt-2 px-lg-5 px-3">
        <!--//banner-sec-->
        <h3 class="tittle-w3layouts text-left my-lg-4 my-3">Sản phẩm liên quan</h3>
        <div class="mid-slider">
            <div class="owl-carousel owl-theme row">
                <?php foreach($relatedproduct as $item) : ?>
                	<div class="item">
                        <div class="gd-box-info text-center">
                            <div class="product-men women_two bot-gd">
                                <div class="product-googles-info slide-img googles" style="height: 375px">
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
                                                            <span class="money ">Giá: <?php echo number_format($item['price']) ?> VNĐ</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="googles single-item hvr-outline-out">
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="cmd" value="_cart">
                                                        <input type="hidden" name="add" value="1">
                                                        <input type="hidden" name="googles_item" value="<?php echo $item['name'] ?>">
                                                        <input type="hidden" name="amount" value="<?php echo number_format($item['price']) ?>">
                                                        <button type="submit" class="googles-cart pgoogles-cart">
                                                            <i class="fas fa-cart-plus"></i>
                                                        </button>
                                                    </form>

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
    <!--//slider-->
</div>
</section>
<?php require_once __DIR__."/../layouts/footer.php"; ?>