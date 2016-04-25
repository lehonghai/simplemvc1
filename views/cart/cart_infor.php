

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Thông tin giỏ hàng</h3>
      </div>
      <div class="panel-body" id="divGioHang">
      <span id="ttmh">
        </span>
      
       <?php if($ttgh!=false) ?>
        <form action="" method="post">        
        <table class="table table-striped">
            <thead>
              <tr>
                <th>STT</th>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
              </tr>
            </thead>
            <tbody>
           <?php 
           $i=1;
           foreach($ttgh as $msp=>$tt)
           {
           ?>
              <tr>
                <th scope="row"><?php 
                echo $i;
                ?></th>
                
                <td><?php echo $msp?></td>
                <td><?php echo $tt['2']?></td>
                <td><?php echo number_format($tt['0']) ?></td>
                <td><input type="number" value="<?php echo $tt['1']?>" name="sl_<?php echo $msp?>" style="width: 70px; text-align:center" class="form-control"/></td>
                <td><?php echo number_format($tt['1']*$tt['0']) ?></td>
              </tr>
              <?php 
              $i=$i+1;
              }
              ?>
                
            <tr>
                <td colspan="5" style="color: red; ">Tổng tiền:</td>
                        <td>
                        <?php echo  number_format( $_SESSION['TongSoTien']);?>
                         </td>
             </tr>
            <tr>
                <td colspan="6" align="center">
                       <a href="<?php echo base_url().'index.php?c=cart&m=order'?>" class="btn btn-success">Đặt hàng</a>
                    <input type="submit" value="Cập nhật" name="btnCapNhat" class="btn btn-primary"/>
             
                    
                     <a href="<?php echo base_url();?>" class="btn btn-success">Tiếp Tục Mua Hàng</a>
                     <a id="btnHuy" onclick="return false;" href="" class="btn btn-warning">Hủy giỏ hàng</a>
                </td>
            </tr>
            <tr>
                <td colspan="6" align="center">
                                     
                </td>
            </tr>
            </tbody>
            </table>
        </form>
       
      </div>
    </div>
