
<?php 
session_start();
?><ul class="nav nav-sidebar">
    <li class="active"><a href="#">Giỏ hàng <span class="sr-only">(current)</span></a></li>
    <li><a href="<?php echo base_url().'index.php?c=cart&m=infor'?>">
        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
        <span id="ttgh">
        <?php echo $_SESSION['TongSoLuong'].' Sản Phẩm'.'( '.number_format($_SESSION['TongSoTien']).' VND)'?>
        </span>
        </a>
    </li>
  </ul>
  <ul class="nav nav-sidebar">
    <li class="active"><a href="#">Danh mục sản phẩm <span class="sr-only">(current)</span></a></li>    
  </ul>
 
  <div class="panel panel-default" style="border: 0px; padding:0px">

  </div>
