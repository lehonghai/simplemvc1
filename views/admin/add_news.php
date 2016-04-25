<?php if(isset($errMss))
echo $errMss;
?>
    <script src="<?php echo base_url() ?>/public/ckeditor/ckeditor.js"></script>
    <p align="center" style="color: #ff0000"></p>
    <?php if(isset($add))
{
    

    

?>
    <form class="form-horizontal" enctype="multipart/form-data" method="post">
      <div class="form-group">
        <label class="col-sm-2 control-label" for="ma_san_pham">Mã sản phẩm</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="ma_san_pham" name="ma_san_pham" value="" readonly="readonly"/>
        
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="ten_san_pham">Tiêu đề</label>
            <div class="col-sm-10">
        <input type="text" class="form-control" id="tieu_de" name="tieu_de" value="" placeholder="nhập tiêu đề" required="true/>
        <span style="color:#ff0000"></span>
        </div>
      </div>
          
      <div class="form-group">
        <label class="col-sm-2 control-label" for="noi_dung_tom_tat">Nội dung tóm tắt</label>
        <div class="col-sm-10">
            <textarea name="noi_dung_tom_tat" rows="3" class="form-control" ></textarea>
        <span style="color:#ff0000"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="noi_dung_chi_tiet">Nội dung chi  chi tiết</label>
        <div class="col-sm-10">
            <textarea name="noi_dung_chi_tiet" class="ckeditor"></textarea>
            <span style="color:#ff0000"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="ngay_gui_bai">Ngày Tạo</label>
        <div class="col-sm-2">
            <input type="date" class="form-control" id="ngay_gui_bai" name="ngay_gui_bai" value="" required="true/>
        </div>
      </div>
      <div class="form-group">
        
        <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" name="btnthem" value="Thêm tin tức" class="btn btn-success"/> 
        </div>
      </div>      
    </form>
    <?php
    } 
    ?>

<!--`ma_san_pham`, `ten_san_pham`, `ten_san_pham_url`, `ma_loai`, `mo_ta_tom_tat`, `mo_ta_chi_tiet`, `don_gia`, `don_gia_khuyen_mai`, `hinh`, `san_pham_moi`, `so_lan_xem`, `ngay_tao`-->