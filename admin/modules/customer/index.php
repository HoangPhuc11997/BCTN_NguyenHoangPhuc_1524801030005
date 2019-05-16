
<?php require_once __DIR__."/../../autoload/autoload.php"; 
$open = "customer";

  if(isset($_GET['page']))
  {
    $p = $_GET['page'];
  }else
  {
    $p = 1;
  }


$sql = "SELECT * FROM user";

  $user = $db->fetchJone('user',$sql,$p,4,true);
  if(isset($user['page']))
  {
    $sotrang = $user['page'];
    unset($user['page']);
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
          <li class="breadcrumb-item active">Danh sách khách hàng</li>
        </ol>
        <div class="clearfix"></div>
        <h1>Danh sách khách hàng</h1>
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
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Adress</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $stt = 1; foreach ($user as $item): ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $item['name'] ?></td>
                        <td><?php echo $item['email'] ?></td>
                        <td><?php echo $item['phone'] ?></td>
                        <td><?php echo $item['address'] ?></td>
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