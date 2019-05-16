<?php
require_once __DIR__."/../autoload/autoload.php";

$data = 
    [
      "username" => postInput('username'),
      "password" => postInput('password'),
    ];

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
         $error = [];

        if(postInput('username') == '')
        {
            $error['username'] = "Mời bạn nhập email";
        }

        if(postInput('password') == '')
        {
            $error['password'] = "Mời bạn nhập mật khẩu";
        }

        if(empty($error))
        {
            $is_check = $db->fetchOne("admin"," username = '".$data['username']."' AND password = '".MD5($data['password'])."'");
            if($is_check!=null)
            {
                $_SESSION['admin_name'] = $is_check['username'];
                $_SESSION['admin_id'] = $is_check['id'];
                echo "<script>alert('Đăng nhập thành công');location.href='/WebPHP/admin/'</script>";
            }else
            {
                $_SESSION['error'] = "Đăng nhập thất bại";
            }
        }
    }

?>

<link href="../public/login/css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<body>
    <div class="padding-all">
        <div class="header">
            <h1><img src="../public/login/images/5.png" alt=" ">Admin Login</h1>
        </div>

        <form method="POST">
            <div class="design-w3l">
            <div class="mail-form-agile">
               <?php require_once __DIR__."/../partials/notification.php"; ?>
                    <input type="text" name="username" autofocus="autofocus" placeholder="Tên đăng nhập">
                    <?php 
                        if(isset($error['username'])): ?>
                        <p class="text-danger"><?php echo $error['username']; ?></p>
                    <?php endif ?>
                    <input type="Password" name="password" autofocus="autofocus" placeholder="Mật khẩu" >
                    <?php 
                        if(isset($error['password'])): ?>
                        <p class="text-danger"><?php echo $error['password']; ?></p>
                    <?php endif ?>
                    <input type="submit" name="btndn" value="Đăng nhập">               
            </div>
            <div class="clear"> </div>
        </div>
        </form>

    </div>
</body>