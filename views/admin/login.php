<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Đăng nhập</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>public/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>public/dist/css/signin.css" rel="stylesheet">

   
  </head>

  <body>
  <?php

session_start();
 

?>

    <div class="container">
   
        <p align='center' style="color:#ff0000"></p>
        <?php if(isset($data['message'])) echo $data['message']; ?>
      <form class="form-signin" method="post" action="<?php echo base_url().'index.php?c=admin&m=login'?>">
        <h2 class="form-signin-heading">Đăng nhâp</h2>
        <label for="tendn" class="sr-only">Tên đăng nhập</label>
        <input type="text" id="ten_dang_nhap" name="ten_dang_nhap" value="" class="form-control" placeholder="tên đăng nhập" required autofocus>
        <label for="inputPassword" class="sr-only">Mật khẩu</label>
        <input type="password" id="mat_khau" name="mat_khau" class="form-control" placeholder="mật khẩu" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"  checked="checked" name="ghinho" value="true"> Ghi nhớ
          </label>
        </div>
        <input type="submit" class="btn btn-primary" value="Đăng nhập" name="btndangnhap"/>
      </form>

    </div> <!-- /container -->
  </body>
</html>
