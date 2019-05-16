<?php require_once __DIR__."/../autoload/autoload.php";

    $data = 
    [
      "email" => postInput('email'),
      "password" => postInput('password'),
    ];

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
         $error = [];

        if(postInput('email') == '')
        {
            $error['email'] = "Mời bạn nhập email";
        }

        if(postInput('password') == '')
        {
            $error['password'] = "Mời bạn nhập mật khẩu";
        }

        if(empty($error))
        {
            $is_check = $db->fetchOne("user"," email = '".$data['email']."' AND password = '".MD5($data['password'])."'");
            if($is_check!=null)
            {
                $_SESSION['user_name'] = $is_check['name'];
                $_SESSION['name_id'] = $is_check['id'];
                echo "<script>alert('Đăng nhập thành công');location.href='index.php'</script>";
            }else
            {
                $_SESSION['error'] = "Đăng nhập thất bại";
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
            <h1 style="color: red"><img src="../public/login/images/5.png" alt=" "> Đăng nhập</h1>
        </div>

       <form method="Post">
            <div class="design-w3l">
            <div class="mail-form-agile">
                    <?php require_once __DIR__."/../partials/notification.php"; ?>
                    <input type="text" name="email" autofocus="autofocus" placeholder="Email">
                    <?php 
                        if(isset($error['email'])): ?>
                        <p class="text-danger"><?php echo $error['email']; ?></p>
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
</section>
<?php require_once __DIR__."/../layouts/footer.php"; ?>