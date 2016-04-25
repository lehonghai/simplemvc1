
<div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><?php  $ctsp['ten_san_pham'] ?></h3>
      </div>
      <div class="panel-body">
        <div class="col-md-5 thumbnail">
            <img src="<?php echo base_url() ?>/public/hinh_san_pham/<?php echo $ctsp['hinh'] ?>"/>
        </div>
        <div class="col-md-7">
            <h2><?php echo $ctsp['ten_san_pham'] ?></h2>
            
            <p><?php echo $ctsp['mo_ta_chi_tiet'] ?></p>
            <?php 
                        if ($ctsp['don_gia_khuyen_mai']>0)
                        {
                            echo' <p>'.'<strike>'.'Giá:'.number_format($ctsp['don_gia']).'</strike>'.'<br>'.
                            'Giá KM:' .number_format($ctsp['don_gia_khuyen_mai']).' vnđ'.'</p>';
                        }
                           else 
                            echo '<p>'.'Giá:'.number_format($ctsp['don_gia']).'</p>';
                            
                      
                        ?>
             <div class="form-inline">
                <input type="number" id="soluong" value="1" style="width: 70px; text-align:center" class="form-control" name="so_luong"/>
                <button class="btn btn-primary" id="btnMua" name="<?php echo $ctsp['ma_san_pham'] ?>">Thêm vào giỏ hàng</button>
            </div>
        </div>
        <!--tab-->
     
        <!--end tab -->
      </div>
     
    
          <div class="panel-heading">
        <h3 class="panel-title" style="text-align: center;">  Visitor Comment</h3>
      </div>
       <div class="panel-body">
        <div class="col-md-7">
   <?php 
        if(isset($comment))
        {
            foreach($comment as $key=>$cm)
            {
                echo '<b>Email: </b>'.$cm['email'];
                echo':<br>';
                echo'<b>Comment: </b>'.'<p>'. $cm['comment'].' </p>';
            }
        }
         ?>
        </div>
    
        
        
        <div class="col-md-7">
           
             <form class="form-horizontal" enctype="multipart/form-data" method="post">
             
               <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input class="form-control" id="email" name="email" type="email" value=""  placeholder="nhập email " required="true">
              <span style="color:#ff0000"><?php if(isset($error))
        echo $error;
        ?></span>
            </div>
          </div>
             
           
              <div class="form-group">
        <label class="col-sm-2 control-label" for="comment">Comment</label>
        <div class="col-sm-10">
            <textarea name="comment" rows="3" class="form-control" ></textarea>
        <span style="color:#ff0000"></span>
        </div>
      </div>
        <div class="form-group">
        
        <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" name="btncommentsp" value="Comment" class="btn btn-success"/> 
        </div>
      </div>  
              </form>
        </div>
    </div>
    </div>
