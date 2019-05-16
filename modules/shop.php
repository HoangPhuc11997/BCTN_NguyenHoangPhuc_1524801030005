<?php require_once __DIR__."/../autoload/autoload.php";
    
    $sqlhomecate = "SELECT * FROM catalog WHERE home = 1 ORDER BY id DESC";
    $categoryhome = $db->fetchsql($sqlhomecate);

  if(isset($_GET['p']))
	{
	    $p = $_GET['p'];
	}else
	{
	    $p = 1;
	}


   $sql = "SELECT * FROM product";

   $total = count($db->fetchsql($sql));
   $product = $db->fetchJones("product",$sql,$total,$p,24,true);
	$sotrang = $product['page'];
	unset($product['page']);

	$path = $_SERVER['SCRIPT_NAME'];

  $sql1 = "SELECT * FROM product  
            WHERE pay >= 1
            LIMIT 8  ";

    $product2 = $db->fetchsql($sql1);

    $sql2 = "SELECT * FROM product  
            ORDER BY RAND()
            LIMIT 8  ";

    $product3 = $db->fetchsql($sql2);

 ?>

 <?php require_once __DIR__."/../layouts/main.php"; ?>

 <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
<div class="container-fluid">
				<div class="inner-sec-shop px-lg-4 px-3">
					<h3 class="tittle-w3layouts my-lg-4 mt-3">Danh sách sản phẩm </h3>
					<div class="row">
						<!-- product left -->
						<div class="side-bar col-lg-3">
							<div class="search-hotel">
								<h3 class="agileits-sear-head">Search Here..</h3>
								<form action="#" method="post">
										<input class="form-control" type="search" name="search" placeholder="Search here..." required="">
										<button class="btn1">
												<i class="fas fa-search"></i>
										</button>
										<div class="clearfix"> </div>
									</form>
							</div>
							<!-- price range -->
							<div class="range">
								<h3 class="agileits-sear-head">Danh mục</h3>
								<ul>
								<?php foreach ($categoryhome as $item1) : ?>
									<li>
										<a href="category.php?id=<?php echo $item1['id'] ?>"><span class="span" style="font-size: 18px"><?php echo $item1['name'] ?></span></a>
									</li>
									<hr>
								<?php endforeach ?>
								</ul>
							</div>
							<!-- //price range -->
							<!-- discounts -->
							<!-- //discounts -->
							<!-- deals -->
							<div class="deal-leftmk left-side">
								<h3 class="agileits-sear-head">Special Deals</h3>
								<?php foreach($product2 as $item2) : ?>
									<div class="special-sec1">
									<div class="img-deals">
										<a href="detail.php?id=<?php echo $item2['id'] ?>"><img src="<?php echo uploads()?>product/<?php echo $item2['image_link']?>" alt=""></a>
									</div>
									<div class="img-deal1">
										<h3><?php echo $item2['name'] ?></h3>
										<a href=""><?php echo number_format($item2['price']) ?> VNĐ</a>
									</div>
									<div class="clearfix"></div>
								</div>
								<?php endforeach; ?>
							</div>
							<!-- //deals -->
						</div>
						<!-- //product left -->
						<!--/product right-->
						<div class="left-ads-display col-lg-9">
							<div class="wrapper_top_shop">
								<div class="row">
										<div class="col-md-6 shop_left">
												<img src="../public/frontend/images/banner3.jpg" alt="">
												<h6>40% off</h6>
											</div>
											<div class="col-md-6 shop_right">
												<img src="../public/frontend/images/banner4.jpg" alt="">
												<h6>50% off</h6>
											</div>
						
								</div>
								<div class="row">
									<!-- /womens -->
									<?php foreach ($product as $item): ?>
										<div class="col-md-3 product-men women_two shop-gd">
										<div class="product-googles-info googles" style="height: 350px;">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="<?php echo uploads()?>product/<?php echo $item['image_link']?>" class="img-fluid" alt="">
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
									<?php endforeach ?>
								</div>
								<nav class="text-center" style="padding-top: 10px">
					            <ul class="pagination">
					              <?php for ($i=1; $i <= $sotrang; $i++) : ?>
					                <li class="page-link"><a href="<?php $path ?>?p=<?php echo $i ?>"><?php echo $i ?></a></li>
					              <?php endfor; ?>
					            </ul>
					          </nav>
							</div>
						</div>
						<!--//product right-->
					</div>
					<!--/slide-->
				<div class="slider-img mid-sec mt-lg-5 mt-2">
						<!--//banner-sec-->
						<h3 class="tittle-w3layouts text-left my-lg-4 my-3">Sản phẩm khác</h3>
						<div class="mid-slider">
							<div class="owl-carousel owl-theme row">
							<?php foreach($product3 as $item3) : ?>
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd" style="height: 350px">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="<?php echo uploads()?>product/<?php echo $item3['image_link']?>" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="detail.php?id=<?php echo $item3['id'] ?>" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">
	
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="detail.php?id=<?php echo $item3['id'] ?>"><?php echo $item3['name'] ?> </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money "><?php echo number_format($item3['price']) ?></span>
																	</div>
																</div>
															</div>
															<div class="googles single-item hvr-outline-out">
																	<button type="submit" class="googles-cart pgoogles-cart" onclick="location.href='addcart.php?id=<?php echo $item3['id'] ?>'">
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

							<?php endforeach; ?>
							</div>
						</div>
					</div>
					<!--//slider-->
				</div>
</div>
 </section>

 <?php require_once __DIR__."/../layouts/footer.php"; ?>
