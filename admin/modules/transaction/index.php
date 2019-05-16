
<?php require_once __DIR__."/../../autoload/autoload.php"; 
$open = "transaction";

  if(isset($_GET['page']))
  {
    $p = $_GET['page'];
  }else
  {
    $p = 1;
  }


  $sql = "SELECT transaction.*, user.name as nameuser, user.phone as phone from transaction LEFT JOIN user ON user.id = transaction.user_id order by id DESC ";
  $transaction = $db->fetchJone('transaction',$sql,$p,10,true);
  if(isset($transaction['page']))
  {
    $sotrang = $transaction['page'];
    unset($transaction['page']);
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
          <li class="breadcrumb-item active">Danh sách đơn hàng</li>
          <li class="breadcrumb-item"><a href="add.php">Thêm mới</a></li>
        </ol>
        <div class="clearfix"></div>
        <h1>Danh sách đơn hàng</h1>
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
                    <th>Tên khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Trạng thái</th>
                    <th>Lệnh</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $stt = 1; foreach ($transaction as $item): ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $item['nameuser'] ?></td>
                        <td><?php echo $item['phone'] ?></td>
                        <td>
                          <a href="status.php?id=<?php echo $item['id'] ?>" class="btn btn-info <?php echo $item['status'] == 0 ? 'btn-danger' : 'btn-info' ?>"><?php echo $item['status'] == 0 ? 'Chưa xử lý' : 'Đã xử lý' ?></a>
                        </td>
                        <td>
                          <a class="btn btn-xs btn-danger" href="delete.php?id=<?php echo $item['id'] ?>"><i class="fa fa-times"></i>Xóa</a>
                        </td>
                    </tr>
                  <?php $stt++; endforeach ?>
                  
      
                </tbody>               
              </table>
          
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->
  <!-- Scroll to Top Button-->
<?php require_once __DIR__."/../../layouts/footer.php"; ?>