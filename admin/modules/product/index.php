
<?php require_once __DIR__."/../../autoload/autoload.php"; 
$open = "product";

  if(isset($_GET['page']))
  {
    $p = $_GET['page'];
  }else
  {
    $p = 1;
  }

  if(isset($_POST['search']))
  {
    $searchkey = $_POST['search'];
    $sql = "SELECT product.*,catalog.name as namecate
        from product LEFT JOIN catalog on catalog.id = product.catalog_id WHERE product.name LIKE '%$searchkey%' ";
  }
  else
  {
    $sql = "SELECT product.*,catalog.name as namecate
        from product LEFT JOIN catalog on catalog.id = product.catalog_id ";
  }



  $product = $db->fetchJone('product',$sql,$p,10,true);
  if(isset($product['page']))
  {
    $sotrang = $product['page'];
    unset($product['page']);
  }


?>
<?php require_once __DIR__."/../../layouts/header.php"; ?>
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Danh sách sản phẩm</li>
          <li class="breadcrumb-item"><a href="add.php">Thêm mới</a></li>
        </ol>
        <div class="clearfix"></div>
        <h1>Danh sách sản phẩm</h1>
        <hr>
        
       <?php require_once __DIR__."/../../../partials/notification.php"; ?>
       <form method="post" action="">
          <input type="text" name="search" placeholder="Tìm kiếm theo tên..."><button class="btn btn-primary" type="submit">Tìm kiếm</button>
          <hr>
        </form>
        <!-- DataTables Example -->
        
              <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Thông tin</th>
                    <th>Thể loại</th>
                    <th>Hình ảnh</th>
                    <th>Lệnh</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $stt = 1; foreach ($product as $item): ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $item['name'] ?></td>
                        <td>
                          <ul>
                            <li>Giá: <?php echo number_format($item['price']) ?> VNĐ</i>
                            <li>Số lượng: <?php echo $item['quantity'] ?></i>
                          </ul>
                        </td>
                        <td><?php echo $item['namecate'] ?></td>
                        <td><img src="<?php echo uploads() ?>product/<?php echo $item['image_link'] ?>" width="80px" height="80px"></td>
                        <td>
                          <a class="btn btn-xs btn-info" href="edit.php?id=<?php echo $item['id'] ?>"><i class="fa fa-edit"></i>Sửa</a>
                          <a class="btn btn-xs btn-danger" href="delete.php?id=<?php echo $item['id'] ?>"><i class="fa fa-times"></i>Xóa</a>
                        </td>
                    </tr>
                  <?php $stt++; endforeach ?>
                  
      
                </tbody>               
              </table>
          <nav class="text-center" >
            <ul class="pagination" >
              <?php for ($i=1; $i <= $sotrang; $i++) : ?>
                <?php 
                  if(isset($_GET['page']))
                  {
                    $p = $_GET['page'];
                  }
                  else
                  {
                    $p = 1;
                  }
                ?>
                <li class="page-link <?php echo ($i == $p) ? 'active' : '' ?>">
                  <a href="?page=<?php echo $i ; ?>"><?php echo $i; ?></a>
                </li>
              <?php endfor ?>
            </ul>

          </nav>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->
  <!-- Scroll to Top Button-->
<?php require_once __DIR__."/../../layouts/footer.php"; ?>