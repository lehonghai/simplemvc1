
    <h3>Danh sách sản phẩm</h3>
    <?php  if (isset($DSSanPham) && $DSSanPham|count>0)?> 
    <table class="table table-striped">
        <thead>
        <tr>
          <th>STT</th>
          <th>Mã sản phẩm</th>
          <th>Tên sản phẩm</th>
          <th>Tên URL</th>
          <th>Đơn giá</th>
          <th>Sản phẩm mới</th>
          <th>&nbsp;</th>   
          <th>&nbsp;</th>   
          <th>&nbsp;</th>       
        </tr>
        </thead>
        <tbody>
        <?php 
          $i=1;
          foreach ($DSSanPham as $sp)
          {
        ?>
      
        
            <tr>
              <td><?php echo $i; ?></td>
              <td> <?php echo $sp['ma_san_pham'];?></td>
              <td><?php echo $sp['ten_san_pham']?> </td>
              <td><?php echo $sp['ten_san_pham_url']?></td>
              <td><?php echo number_format($sp['don_gia']);?></td>
              <td><?php echo $sp['san_pham_moi']?></td>
               <td> <a href="<?php echo base_url().'index.php?c=admin&m=addproduct'?>" class="btn btn-danger">Thêm sản phẩm</a></td>
              <td>
              
                <a href="<?php echo base_url().'index.php?c=admin&m=updateproduct&id='.$sp['ma_san_pham']?>" class="btn btn-success">Cập nhật</a>
                </td>
             <td>
                <a onclick="return confirmAction()" href="<?php  echo base_url().'index.php?c=admin&m=clear&id='.$sp['ma_san_pham']?>" class="btn btn-warning">Xóa</a>
                
              </td>
             
            </tr>    
            <?php $i=$i+1;
            }
            ?>           
        </tbody>
        </table>

<!--`ma_san_pham`, `ten_san_pham`, `ten_san_pham_url`, `ma_loai`, `mo_ta_tom_tat`, `mo_ta_chi_tiet`, `don_gia`, `don_gia_khuyen_mai`, `hinh`, `san_pham_moi`, `so_lan_xem`, `ngay_tao`-->