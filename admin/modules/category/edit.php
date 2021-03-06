
<?php 
  $open = "category";
  require_once __DIR__."/../../autoload/autoload.php";

  $id = intval(getInput('id'));

  $EditCategory = $db->fetchID("catalog",$id);
  if(empty($EditCategory)){
    $_SESSION['error'] = "Dữ liệu không tồn tại";
    redirectAdmin("category");
  }

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $data = 
    [
      "name" => postInput('txtname')
    ];

    $error = [];

    if(postInput('txtname') == ''){
      $error['txtname'] = "Mời bạn nhập đầy đủ tên danh mục";
    }

    if(empty($error))
    {
      if($EditCategory['name'] != $data['name'])
      {
        $isset =$db->fetchOne("catalog"," name = '".$data['name']."' ");
        if(count($isset) > 0)
        {
          $_SESSION['error'] = "Tên danh mục đã tồn tại ! ";
        }
        else
        {
          $id_update = $db->update("catalog",$data,array("id"=>$id));
          if($id_update > 0)
          {
            $_SESSION['success'] = "Cập nhật thành công";
            redirectAdmin("category");
          }else
          {
            $_SESSION['error'] = "Dữ liệu không thay đổi";
            redirectAdmin("category");
          }
        } 
      }else
      {
        $id_update = $db->update("catalog",$data,array("id"=>$id));
          if($id_update > 0)
          {
            $_SESSION['success'] = "Cập nhật thành công";
            redirectAdmin("category");
          }else
          {
            $_SESSION['error'] = "Dữ liệu không thay đổi";
            redirectAdmin("category");
          }
      }   
    }
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
          <li class="breadcrumb-item active"><a href="index.php">Danh mục</a></li>
        </ol>
       <div class="clearfix"></div>
        
       <?php require_once __DIR__."/../../../partials/notification.php"; ?>
        <!-- DataTables Example -->
        
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               
                    
                  <tr>
                    <td><div class="card-header">Sửa danh mục</div>
      <div class="card-body">
        <form action="" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputEmail" class="form-control" name ="txtname" placeholder="Tên danh mục" value="<?php echo $EditCategory['name'] ?>" autofocus>
              <label for="inputEmail">Tên danh mục</label>
              <?php 
                if(isset($error['txtname'])): ?>
                  <p class="text-danger"><?php echo $error['txtname']; ?></p>
                <?php endif ?>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <button type="submit" class="btn btn-success">Sửa</button>
              
            </div>
          </div>
          <a class="btn btn-prim"> </a>  
        </form>

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
<?php require_once __DIR__."/../../layouts/footer.php"; ?>