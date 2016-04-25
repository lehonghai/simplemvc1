
    <h3>Danh sách tin tức </h3>
    <?php  if (isset($news) && $news|count>0)?> 
    <table class="table table-striped">
        <thead>
        <tr>
          <th>STT</th>
          <th>Mã bài viết</th>
          <th>Tiêu đề</th>
          <th>Nội dung tóm tắt</th>
        
          <th>Ngày gửi bài</th>
          <th>&nbsp;</th>   
          <th>&nbsp;</th>   
          <th>&nbsp;</th>       
        </tr>
        </thead>
        <tbody>
        <?php 
          $i=1;
          foreach ($news as $new)
          {
        ?>
      
        
            <tr>
              <td><?php echo $i; ?></td>
              <td> <?php echo $new['ma_bai_viet'];?></td>
              <td><?php echo $new['tieu_de']?> </td>
              <td><?php echo $new['noi_dung_tom_tat']?></td>
              
              <td><?php echo $new['ngay_gui_bai']?></td>
               <td> <a href="<?php echo base_url().'index.php?c=admin&m=addnews'?>" class="btn btn-danger">Thêm Tin Tức</a></td>
              <td>
              
                <a href="<?php echo base_url().'index.php?c=admin&m=updatenews&id='.$new['ma_bai_viet']?>" class="btn btn-success">Cập nhật</a>
                </td>
             <td>
                <a  onclick="return confirmAction()" href="<?php echo base_url().'index.php?c=admin&m=clearnews&id='.$new['ma_bai_viet']?>" class="btn btn-warning">Xóa</a>
                
              </td>
             
            </tr>    
            <?php $i=$i+1;
            }
            ?>           
        </tbody>
        </table>

