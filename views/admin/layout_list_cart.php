
    <h3 style="text-align: center;">Danh sách khách hàng đặt hàng</h3>
    <?php  if (isset($customers) && $customers|count>0)?> 
    <table class="table table-striped">
        <thead>
        <tr>
          <th>STT</th>
          <th>Mã Khách Hàng</th>
          <th>Tên Khách Hàng</th>
          <th>Địa Chỉ </th>
        
          <th>Điện Thoại</th>
          <th>Email</th>   
          <th>&nbsp;</th>   
          <th>&nbsp;</th>       
        </tr>
        </thead>
        <tbody>
        <?php 
          $i=1;
          foreach ($customers as $key)
          {
        ?>
      
        
            <tr>
              <td><?php echo $i; ?></td>
              <td> <?php echo $key['ma_khach_hang'];?></td>
              <td><?php echo $key['ten_khach_hang']?> </td>
              <td><?php echo $key['dia_chi']?></td>
              <td><?php echo $key['dien_thoai']?></td>
                <td><?php echo $key['email']?></td>
               <td> <a href="<?php echo base_url().'index.php?c=admin&m=itemsdetail&id='.$key['ma_khach_hang']?>" class="btn btn-danger">Xem Chi Tiết Đơn Hàng</a></td>
              
             <td>
             

                <a onclick="return confirmAction()" href="<?php echo base_url().'index.php?c=admin&m=deletecustomers&id='.$key['ma_khach_hang']?>" class="btn btn-warning">Xóa</a>
                
              </td>
             
            </tr>    
            <?php $i=$i+1;
            }
            ?>           
        </tbody>
        </table>

