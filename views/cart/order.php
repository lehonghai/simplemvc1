
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title" style="text-align: center;;">Thông tin khách hàng</h3>
      </div>
      <div class="panel-body">
      <?php if(isset($error))
      echo'<h2>'.$error.'</h2>'?>;
        <form class="form-horizontal" role="form" method="post">
          <div class="form-group">
            <label class="col-sm-2 control-label">Tên khách hàng</label>
                <div class="col-sm-10">
                     <input class="form-control" id="ten_khach_hang" name="ten_khach_hang" type="text" value=""  placeholder="nhập họ tên khách hàng" required="true">
               </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Phái</label>
            <div class="col-sm-10">
              <label><input id="phai" name="phai" type="radio" value="1"  checked="true" >Nam</label>
              <label><input id="phai" name="phai" type="radio" value="0"  checked="true"> Nữ</label>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Ngày sinh</label>
                 <div class="col-sm-10">
                    <input class="form-control" id="ngay_sinh" name="ngay_sinh" type="date" value="" required="true">
                 </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Địa chỉ</label>
            <div class="col-sm-10">
              <input class="form-control" id="dia_chi" name="dia_chi" type="text" value=""  placeholder="nhập địa chỉ" required="true">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Điện thoại</label>
            <div class="col-sm-10">
              <input class="form-control" id="dien_thoai" name="dien_thoai" type="text" value=""  placeholder="nhập điện thoại" required="true">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input class="form-control" id="email" name="email" type="email" value=""  placeholder="nhập email khách hàng" required="true">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input class="btn btn-primary" name="them_khach_hang" type="submit" value="Đặt Hàng">
            </div>
          </div>
        </form>
         </div>
    </div>
