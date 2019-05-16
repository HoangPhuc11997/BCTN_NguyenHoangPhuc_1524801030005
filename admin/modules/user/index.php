
<?php require_once __DIR__."/../../autoload/autoload.php"; 
$open = "admin";
$admin = $db->fetchAll("admin");

  if(isset($_GET['page']))
  {
    $p = $_GET['page'];
  }else
  {
    $p = 1;
  }


  $sql = "SELECT admin.* from admin";
  $admin = $db->fetchJone('admin',$sql,$p,10,true);
  if(isset($admin['page']))
  {
    $sotrang = $admin['page'];
    unset($admin['page']);
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
          <li class="breadcrumb-item active">Admin</li>
          <li class="breadcrumb-item"><a href="add.php">Thêm mới</a></li>
        </ol>
        <div class="clearfix"></div>
        <h1>Danh sách người dùng</h1>
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
                    <th>Tên người dùng</th>
                    <th>Tên tài khoản</th>
                    <th>Mật khẩu</th>
                    <th>Lệnh</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $stt = 1; foreach ($admin as $item): ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $item['name'] ?></td>
                        <td><?php echo $item['username'] ?></td>
                        <td><?php echo $item['password'] ?></i></td>
                        <td>
                          <a class="btn btn-xs btn-info" href="edit.php?id=<?php echo $item['id'] ?>"><i class="fa fa-edit"></i>Sửa</a>
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