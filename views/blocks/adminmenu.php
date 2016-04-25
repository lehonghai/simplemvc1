<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url()?>">Trang Chủ</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url().'index.php?c=admin&m=listproduct'?>">Sản phẩm</a></li>
            <li><a href="<?php echo base_url().'index.php?c=admin&m=news'?>">Tin tức</a></li>
            <li><a href="<?php echo base_url().'index.php?c=admin&m=listcustomers'?>">Đơn Hàng</a></li>
          
          </ul>
          <ul class="nav navbar-nav navbar-right">
           
                <li><a href="">
                        <span class="glyphicon glyphicon-user">
                         <?php 
       if (isset($_SESSION['username']) && $_SESSION['username']){
           echo 'Xin chào '.$_SESSION['username']."<br/>";
       
       }
                   ?>     </span> 
                    </a>
                </li>
            
                <li><a href="<?php echo base_url().'index.php?c=admin&m=logout'?>">
                        <span class="glyphicon glyphicon-log-in"></span> Logout
                    </a>
                </li>
           
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>