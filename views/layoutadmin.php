<!DOCTYPE html>
<html lang="en">
  <!--head-->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?php include ROOT . DS . 'views' . DS . 'blocks' . DS . 'header.php'; ?>
  <body>
    <!-- Fixed navbar -->
    <!--menu-->
     <?php include ROOT . DS . 'views' . DS . 'blocks' . DS . 'adminmenu.php'; ?>
    <!-- Begin page content -->
    
     <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
         <?php include ROOT . DS . 'views' . DS . 'blocks' . DS . 'menuleft_admin.php'; ?>
  <body>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
           <?php 
            if(isset($template_file))
    
       
        
             include ROOT . DS . 'views' . DS . $template_file; 
        
   
    ?>
        </div>
      </div>
    </div>
    <!--footer-->
     <?php include ROOT . DS . 'views' . DS . 'blocks' . DS . 'footer.php'; ?>
    <!--javascript-->
     <?php include ROOT . DS . 'views' . DS . 'blocks' . DS . 'javascript.php'; ?>
  </body>
</html>

