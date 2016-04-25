

<?php
if(isset($news))

    foreach($news as $key=>$value)
    {
   

?>
 <div class="list-group">
  <a href="<?php echo base_url().'index.php?c=news&m=detail&id='.$value['ma_bai_viet']?>" class="list-group-item active">
    <h3 class="list-group-item-heading">
   <?php echo $value['tieu_de']?> </h3>
    <p class="list-group-item-text">
        <?php echo $value['noi_dung_tom_tat']?>
      
    </p>
  </a>
  <a href="<?php echo base_url().'index.php?c=news&m=detail&id='.$value['ma_bai_viet']?>">xem thêm</a>
  </div>
  <?php 
  }
  ?>
