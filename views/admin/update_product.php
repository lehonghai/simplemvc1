<?php if(isset($update))?>
    <script src="<?php echo base_url() ?>/public/ckeditor/ckeditor.js"></script>
    <p align="center" style="color: #ff0000"></p>
    <form class="form-horizontal" enctype="multipart/form-data" method="post">
      <div class="form-group">
        <label class="col-sm-2 control-label" for="ma_san_pham">Mã sản phẩm</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="ma_san_pham" name="ma_san_pham" value="<?php echo $update['ma_san_pham']?>" readonly="readonly"/>
        
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="ten_san_pham">Tên sản phẩm</label>
            <div class="col-sm-10">
        <input type="text" class="form-control" id="ten_san_pham" name="ten_san_pham" value="<?php echo $update['ten_san_pham']?>" placeholder="nhập tên sản phẩm"/>
        <span style="color:#ff0000"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="ten_san_pham_url">Tên URL</label>
            <div class="col-sm-10">
        <input type="text" class="form-control" id="ten_san_pham_url" name="ten_san_pham_url" value="<?php echo $update['ten_san_pham_url']?>" placeholder="nhập tên URL"/>
         <span style="color:#ff0000"></span>
        </div>
      </div>
    
      <div class="form-group">
        <label class="col-sm-2 control-label" for="don_gia">Đơn giá</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="don_gia" name="don_gia" value="<?php echo $update['don_gia']?>" placeholder="nhập đơn giá"/>
         <span style="color:#ff0000"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="don_gia_khuyen_mai">Đơn giá khuyến mãi</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="don_gia_khuyen_mai" value="<?php echo $update['don_gia_khuyen_mai']?>" name="don_gia_khuyen_mai" placeholder="nhập đơn giá"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="hinh">Hình</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" id="hinh" name="hinh" value="<?php echo $update['hinh']?>"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="san_pham_moi">Sản phẩm mới</label>
        <div class="col-sm-2">
            <input type="checkbox" class="checkbox" id="san_pham_moi" name="san_pham_moi" value="1" 
            <?php if  ($update['san_pham_moi']==1 )?> checked="checked" />
        </div>
        <label class="col-sm-2 control-label" for="so_lan_xem">Số lần xem</label>
        <div class="col-sm-2">
            <input type="number" class="form-control" id="so_lan_xem" name="so_lan_xem" value="<?php echo $update['so_lan_xem']?>"/>
        </div>
        <label class="col-sm-2 control-label" for="ngay_tao">Ngày tạo</label>
        <div class="col-sm-2">
            <input type="date" class="form-control" id="ngay_tao" name="ngay_tao" value="<?php echo $update['ngay_tao']?>"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="mo_ta_tom_tat">Mô tả tóm tắt</label>
        <div class="col-sm-10">
            <textarea name="mo_ta_tom_tat" rows="3" class="form-control" ><?php echo $update['mo_ta_tom_tat']?></textarea>
        <span style="color:#ff0000"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="mo_ta_chi_tiet">Mô tả chi tiết</label>
        <div class="col-sm-10">
            <textarea name="mo_ta_chi_tiet" class="ckeditor"><?php echo $update['mo_ta_chi_tiet']?></textarea>
            <span style="color:#ff0000"></span>
        </div>
      </div>
      <div class="form-group">
        
        <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" name="btncapnhat" value="Cập Nhật" class="btn btn-success"/> 
        </div>
      </div>      
    </form>

