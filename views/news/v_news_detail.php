<div class="panel panel-primary"> 
 
    <div class="panel-heading"> 
        <h3 class="panel-title">
     <?php 
             if(isset($news_detail))
         {
           echo '<h1>'.$news_detail['tieu_de'].'</h1>';
           
     }
     ?>
      </h3>
    </div>
     <div class="panel-body"> 
       <?php echo $news_detail['noi_dung_chi_tiet']; ?>
       <p>
       Ngày Viết Bài: <?php echo $news_detail['ngay_gui_bai']; ?>
       </p>
     </div> 
        <div class="panel-heading">
        <h3 class="panel-title" style="text-align: center;">Comment</h3>
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
        <label class="col-sm-2 control-label" for="mo_ta_tom_tat">Comment</label>
        <div class="col-sm-10">
            <textarea name="comment" rows="3" class="form-control" ></textarea>
        <span style="color:#ff0000"></span>
        </div>
      </div>
        <div class="form-group">
        
        <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" name="btncommentnews" value="Comment" class="btn btn-success"/> 
        </div>
      </div>  
              </form>
        </div>
</div>
</div>
 