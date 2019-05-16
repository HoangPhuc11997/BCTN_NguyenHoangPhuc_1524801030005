<?php require_once __DIR__."/../autoload/autoload.php"; 

    if(isset($_SESSION['name_id']))
    {
        echo "<script>alert('Bạn đã đăng nhập');location.href='index.php'</script>";
    }
    
$name = $email = $password =$address = $phone = '';
    $data = 
    [
      "name" => postInput('name'),
      "email" => postInput('email'),
      "address" => postInput('address'),
      "phone" => postInput('phone'),
      "password" => MD5(postInput('password')),
    ];

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    
    $error = [];

    if(postInput('name') == ''){
      $error['name'] = "Mời bạn nhập tên người dùng";
    }

    if(postInput('email') == ''){
      $error['email'] = "Mời bạn nhập email";
    }
    else
    {
      $is_check = $db->fetchOne("user"," email = '".$data['email']."' ");
      if($is_check != null)
      {
        $error['email'] = "Email đã tồn tại";
      }
    }
    if(postInput('address') == ''){
      $error['address'] = "Mời bạn nhập địa chỉ";
    }
    if(postInput('phone') == ''){
      $error['phone'] = "Mời bạn nhập số điện thoại";
    }
    if(postInput('password') == ''){
      $error['password'] = "Mời bạn nhập mật khẩu";
    }

    if(empty($error))
    {

      $id_insert = $db->insert("user",$data);
      if($id_insert)
      {
        $_SESSION['success'] = "Đăng ký thành công, mời bạn đăng nhập";
        header("location: login.php");
      }else
      {
        $_SESSION['error'] = "Đăng ký thất bại";
      }

    }
  }


?>


<link href="../public/login/css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<?php require_once __DIR__."/../layouts/main.php"; ?>
<section class="banner-bottom-wthreelayouts py-lg-5 py-3" style="background-image: url(../public/login/images/1.jpg);">
    <div class="padding-all">
        <div class="header">
            <h1 style="color: red"><img src="../public/login/images/5.png" alt=" "> Đăng ký thành viên</h1>
        </div>

       <form method="POST">
            <div class="design-w3l">
            <div class="mail-form-agile">
                    <input type="text" name="name" autofocus="autofocus" placeholder="Tên thành viên" value="<?php echo $name ?>" >
                    <?php 
                        if(isset($error['name'])): ?>
                        <p class="text-danger"><?php echo $error['name']; ?></p>
                    <?php endif ?>
                    <input type="text" name="address" autofocus="autofocus" placeholder="Địa chỉ" value="<?php echo $address ?>" >
                    <?php 
                        if(isset($error['address'])): ?>
                        <p class="text-danger"><?php echo $error['address']; ?></p>
                    <?php endif ?>
                    <input style="padding: 13px 10px;
                    width: 92.5%;
                    font-size: 16px;
                    outline: none;
                    background:transparent;
                    border:0px;
                    border-bottom: 1px solid #fff;
                    border-radius: 0px;
                    font-family: 'Asap-Regular';
                    letter-spacing:1.6px;
                    color:#fff;"
                     type="email" name="email" autofocus="autofocus" placeholder="Email" value="<?php echo $email ?>" >
                    <?php 
                        if(isset($error['email'])): ?>
                        <p class="text-danger"><?php echo $error['email']; ?></p>
                    <?php endif ?>
                    <input style="padding: 13px 10px;
                    width: 92.5%;
                    font-size: 16px;
                    outline: none;
                    background:transparent;
                    border:0px;
                    border-bottom: 1px solid #fff;
                    border-radius: 0px;
                    font-family: 'Asap-Regular';
                    letter-spacing:1.6px;
                    color:#fff;" type="number" name="phone" autofocus="autofocus" placeholder="Số điện thoại" value="<?php echo $phone ?>" >
                    <?php 
                        if(isset($error['phone'])): ?>
                        <p class="text-danger"><?php echo $error['phone']; ?></p>
                    <?php endif ?>
                    <input type="Password" name="password" autofocus="autofocus" placeholder="Mật khẩu"  >
                    <?php 
                        if(isset($error['password'])): ?>
                        <p class="text-danger"><?php echo $error['password']; ?></p>
                    <?php endif ?>
                    <input type="submit" name="btndk" value="Đăng ký">               
            </div>
            <div class="clear"> </div>
        </div>
       </form>

    </div>
</section>
<?php require_once __DIR__."/../layouts/footer.php"; ?>