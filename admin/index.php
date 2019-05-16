

<?php 
$open = "info";
require_once __DIR__."/autoload/autoload.php";
$total = 0;
$totalMoney = 0;
$i = 0;
$i1 = 0;
$product = $db->fetchAll("product");
$tranc = $db->fetchAll("transaction");
foreach ($product as $item) 
{
  $total += $item['quantity'];
}
foreach ($tranc as $item) 
{
  $totalMoney += $item['amount'];
  if($item['status'] == 1)
  {
    $i++;
  }
  if($item['status'] == 0)
  {
    $i1++;
  }
}
?>
<?php require_once __DIR__."/layouts/header.php"; ?>
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        
       

        <!-- DataTables Example -->
        
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               
                    
                  <tr>
                    <td><h1>Chào mừng đến với trang quản trị</h1></td>                  
                  </tr>
                  <tr>
                    <td>Tổng số sản phẩm trong kho:</td>
                    <td><?php echo $total ?> sản phẩm</td>
                  </tr>
                  <tr>
                    <td>Tổng số tiền đơn hàng:</td>
                    <td><?php echo number_format($totalMoney)?> VNĐ</td>
                  </tr>
                  <tr>
                    <td>Đơn hàng đã xử lý</td>
                    <td><?php echo $i ?> đơn hàng</td>
                  </tr>
                  <tr>
                    <td>Đơn hàng chưa xử lý</td>
                    <td><?php echo $i1 ?> đơn hàng</td>
                  </tr>
                  <tr>
                    <td>Sản phẩm sắp hết</td>
                    <td>
                    <?php foreach ($product as $key): ?>
                      <?php if($key['quantity'] < 10 ) : ?>
                        <li style="color: red"><?php echo $key['name'] ?>: <?php echo $key['quantity'] ?></li>
                      <?php endif; ?>
                    <?php endforeach ?>
                    </td>
                  </tr>
               
              </table>
          
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->
  <!-- Scroll to Top Button-->
<?php require_once __DIR__."/layouts/footer.php"; ?>