
    <table class="table" style="">      
      <tbody>
        <tr>          
          <td colspan="2" align="center" style="font-size: 30px;color: green;" >
            CÔNG TY TNHH 1TV
            <br />
            CHUYÊN CUNG CẤP ...
          </td>
          <td colspan="4" align="center" style="font-size: 30px;color: green;" valign="center">ĐƠN ĐẶT HÀNG CỦA KHÁCH HÀNG</td>
        </tr>
        <tr>
          <td>Số hóa đơn:</td>
          <td colspan="2"><?php echo $HoaDon[0]['so_hoa_don']?></td>
          <td>Ngày hóa đơn:</td>
          <td  colspan="2"><?php echo $HoaDon[0]['ngay_hd']?></td>          
        </tr>
        <tr>
          <td>Mã khách hàng:</td>
          <td colspan="2" align="left"><?php echo $HoaDon[0]['ma_khach_hang'] ?></td>
          <td>Tên khách hàng:</td>
          <td  colspan="2" align="left"><?php echo $HoaDon[0]['ten_khach_hang'] ?></td>          
        </tr>
        <tr>
          <td>Địa chỉ:</td>
          <td colspan="2" align="left"><?php echo $HoaDon[0]['dia_chi']?></td>
          <td>Điện thoại:</td>
          <td  colspan="2" align="left"><?php echo $HoaDon[0]['dien_thoai'] ?></td>          
        </tr>    
        </tbody>
    </table>
        <table class="table table-striped">      
      <tbody>
       
        <tr><td>STT</td><td>Mã SP</td><td>Tên sản phẩm</td><td>Số lượng</td><td>Đơn giá</td><td>Thành tiền</td></tr>
        <?php
        $i=1;
        foreach($HoaDon as $item)
        {
         ?>
       
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $item['ma_san_pham'] ?></td>
                <td><?php echo $item['ten_san_pham'] ?></td>
                <td><?php echo $item['so_luong'] ?></td>
                <td align="right"><?php echo number_format($item['don_gia']) ?></td>
                <td align="right"><?php echo number_format($item['don_gia']*$item['so_luong']) ?></td>
            </tr>
                  
      <?php 
      $i=$i+1; 
      } 
      ?>
        <tr>
            <td colspan="5" align="right">Trị giá hóa đơn</td>
            <td align="right"><?php echo number_format($item['tri_gia']) ?></td>
        </tr>
      </tbody>
    </table>
    
   
  
