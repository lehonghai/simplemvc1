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
        <label class="col-sm-2 control-label" for="ten_san_pham">Tên sản phẩm</label>
            <div class="col-sm-10">
        <input type="text" class="form-control" id="ten_san_pham" name="ten_san_pham" value="" placeholder="nhập tên sản phẩm" required="true/>
        <span style="color:#ff0000"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="ten_san_pham_url">Tên URL</label>
            <div class="col-sm-10">
        <input type="text" class="form-control" id="ten_san_pham_url" name="ten_san_pham_url" value="" placeholder="nhập tên URL" required="true/>
         <span style="color:#ff0000"></span>
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-sm-2 control-label" for="don_gia">Đơn giá</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="don_gia" name="don_gia" value="" placeholder="nhập đơn giá" required="true/>
         <span style="color:#ff0000"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="don_gia_khuyen_mai">Đơn giá khuyến mãi</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="don_gia_khuyen_mai" value="" name="don_gia_khuyen_mai" placeholder="nhập đơn giá" required="true/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="hinh">Hình</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" id="hinh" name="hinh"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="san_pham_moi">Sản phẩm mới</label>
        <div class="col-sm-2">
            <input type="checkbox" class="checkbox" id="san_pham_moi" name="san_pham_moi" value="1" 
             checked="checked" />
        </div>
        <label class="col-sm-2 control-label" for="so_lan_xem">Số lần xem</label>
        <div class="col-sm-2">
            <input type="number" class="form-control" id="so_lan_xem" name="so_lan_xem" value=""/>
        </div>
        <label class="col-sm-2 control-label" for="ngay_tao" >Ngày tạo</label>
        <div class="col-sm-2">
            <input type="date" class="form-control" id="ngay_tao" name="ngay_tao" value=""/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="mo_ta_tom_tat" >Mô tả tóm tắt</label>
        <div class="col-sm-10">
            <textarea name="mo_ta_tom_tat" rows="3" class="form-control" ></textarea>
        <span style="color:#ff0000"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="mo_ta_chi_tiet">Mô tả chi tiết</label>
        <div class="col-sm-10">
            <textarea name="mo_ta_chi_tiet" class="ckeditor"></textarea>
            <span style="color:#ff0000"></span>
        </div>
      </div>
      <div class="form-group">
        
        <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" name="btnthem" value="Thêm Sản Phẩm" class="btn btn-success"/> 
        </div>
      </div>      
    </form>
    <?php
    } 
    ?>

<!--`ma_san_pham`, `ten_san_pham`, `ten_san_pham_url`, `ma_loai`, `mo_ta_tom_tat`, `mo_ta_chi_tiet`, `don_gia`, `don_gia_khuyen_mai`, `hinh`, `san_pham_moi`, `so_lan_xem`, `ngay_tao`-->