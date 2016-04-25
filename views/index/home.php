 
<div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Danh sách sản phẩm</h3>
      </div>
      <div class="panel-body">
        <div class="row">        
             <?php 
if(isset($DSSanPham) && $DSSanPham|count>0)

    foreach($DSSanPham as $key=>$value)
    {
    

?>
             
               
                  <div class="col-xs-6 col-md-3">
                  <div class="thumbnail">
                 <?php if($value['don_gia_khuyen_mai']>0) 
                 echo'<img src="'. base_url().'public/img/kmicon.gif" style="right:20px; position:absolute"/>';
                 else
                  echo'<img src="'. base_url().'public/img/new-icon.gif" style="right:20px; position:absolute"/>';
                 ?> 
                            
                        
                         
                        
                        <a href="<?php echo base_url().'index.php?c=product&m=detail&id='.$value['ma_san_pham']?>" class="thumbnail">
                         <?php         echo'<img src="'.base_url().'public/hinh_san_pham/'.$value['hinh'].'" alt="' .$value['ten_san_pham'].'"/>';  ?>
                        </a>
                      <div class="caption">
                        <p style="height:30px"><b><?php echo $value['ten_san_pham']?></b></p>
                        <?php 
                        if ($value['don_gia_khuyen_mai']>0)
                        {
                            echo' <p>'.'<strike>'.'Giá:'.number_format($value['don_gia']).'</strike>'.'<br>'.
                            'Giá KM:' .number_format($value['don_gia_khuyen_mai']).' vnđ'.'</p>';
                        }
                           else 
                            echo 'Giá:'.number_format($value['don_gia']).'<br>';
                            
                      
                        ?>
                        
                       
                            
                        <p align="center"><a href="<?php echo base_url().'index.php?c=product&m=detail&id='.$value['ma_san_pham'] ?>" class="btn btn-primary" role="button">Chi tiết</a></p>
                      </div>
                    </div>                   
                  </div>
               <?php 
               }
               ?>
    </div>
   </div>
</div>
