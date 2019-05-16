<?php require_once __DIR__."/../autoload/autoload.php";
    $totalcart = 0;
    if(!isset($_SESSION['cart']) ||  $_SESSION['cart'] == null )
    {
        echo "<script>alert('Không có sản phẩm nào trong giỏ hàng');location.href='index.php'</script>";
        $totalcart = count($_SESSION['cart']);
    }

 ?>
<link rel="stylesheet" type="text/css" href="../public/frontend/css/checkout.css">
<?php require_once __DIR__."/../layouts/main.php"; ?>

<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
	<div class="container">
        <div class="inner-sec-shop px-lg-4 px-3">
            <h3 class="tittle-w3layouts my-lg-4 mt-3">Giỏ hàng </h3>
            <div class="checkout-right">
                <h4>
                    Giỏ hàng của bạn bao gồm:
                    <span><?php echo $totalcart ?> sản phẩm</span>
                </h4>
                <?php require_once __DIR__."/../partials/notification.php"; ?>
                <table class="timetable_sub">
                    <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Hình sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Giá</th>
                            <th>Tổng tiền</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <?php $sum=0; $stt = 1; foreach ($_SESSION['cart'] as $key => $value): ?>
                        <tbody id="tbody">
                            <tr class="rem1">
                                <td class="invert"><?php echo $stt ?></td>
                                <td class="invert-image">
                                    <a href="#">
                                        <img src="<?php echo uploads() ?>product/<?php echo $value['image_link'] ?>" alt=" " class="img-responsive">
                                    </a>
                                </td>
                                <td>
                                    <input type="number" min="0" style="width: 50px" id="qty" class="qty" value="<?php echo number_format($value['qty']) ?>" />
                                </td>
                                <td class="invert"><?php echo $value['name'] ?></td>

                                <td class="invert"><?php echo number_format($value['price']) ?></td>
                                <td class="invert"><?php echo number_format(($value['price'] * $value['qty'])) ?></td>
                                <td class="invert">                                 
                                    <div class="rem">
                                        <a href="remove.php?key=<?php echo $key ?>" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i>Xóa</a>
                                        <a href="#" class="btn btn-xs btn-info updatecart" data-key="<?php echo $key ?>"><i class="fa fa-refresh"></i>Sửa</a>
                                    </div>

                                </td>
                            </tr>
                    </tbody>
                    <?php $sum += $value['price'] * $value['qty'];$_SESSION['tongtien'] = $sum; ?>
                    <?php $stt++; endforeach ?>
                </table>
            </div>
            <div class="checkout-left row">
                <div class="col-md-4 checkout-left-basket">
                    <h4>Thông tin đơn hàng</h4>               
                        <ul>
                            <li>
                                Tổng tiền
                                <i>-</i>
                                <span><?php echo number_format($_SESSION['tongtien']) ?> VNĐ</span>
                            </li>
                            <li>
                                VAT
                                <i>-</i>
                                <span class="badge">10%</span>
                            </li>  
                            <li>
                                Tổng tiền thanh toán
                                <i>-</i>
                                <span><?php $_SESSION['total'] = $_SESSION['tongtien'] *110/100; echo number_format($_SESSION['total'])?> VNĐ</span>
                            </li>                         
                        </ul>
                        <div class="checkout-right-basket">
                            <a href="payment.php">Thanh toán </a><br />
                        </div>
                </div>
                <div class="col-md-8 address_form">  
                    <div class="checkout-right-basket">
                        <a href="deleteallcart.php">Xóa giỏ hàng</a>
                    </div>                                                      
                    <div class="checkout-right-basket">
                        
                        <a href="index.php">Tiếp tục mua</a>                   
                    </div>                                        
                        
                    </div>             
                    
                    <div class="clearfix"> </div>

                </div>

        </div>

    </div>
</section>
<?php require_once __DIR__."/../layouts/footer.php"; ?>