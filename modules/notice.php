<?php require_once __DIR__."/../autoload/autoload.php";
	unset($_SESSION['cart']);
	unset($_SESSION['total']);
?>

<?php require_once __DIR__."/../layouts/main.php"; ?>
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
	<div class="container">
		<div class="header">
       		<h3 class="tittle-w3layouts my-lg-4 my-4">Thanh toán đơn hàng </h3>
    	</div>
    	<?php require_once __DIR__."/../partials/notification.php"; ?>
    	<a href="index.php" class="btn-btn-success">Trở về trang chủ</a>
	</div>
</section>
<?php require_once __DIR__."/../layouts/footer.php"; ?>