<?php

class Customer extends Model {
    public $table = 'khach_hang';
    public $primary_key = 'ma_khach_hang';
    public function ThongTinChiTiet($maKH)
    {
     
        $sql="SELECT `ct_hoa_don`.`so_hoa_don`,`ngay_hd`,`hoa_don`.`ma_khach_hang`,`ten_khach_hang`, `phai`, `ngay_sinh`, `dia_chi`, `dien_thoai`, `email`,`hoa_don`.`tri_gia`, `ct_hoa_don`.`ma_san_pham`,`ten_san_pham` ,`so_luong`, `ct_hoa_don`.`don_gia` FROM `ct_hoa_don` 
        INNER JOIN `hoa_don` ON `ct_hoa_don`.`so_hoa_don`=`hoa_don`.`so_hoa_don` 
        INNER JOIN `khach_hang` ON `hoa_don`.`ma_khach_hang`=`khach_hang`.`ma_khach_hang` 
        INNER JOIN `san_pham` ON `san_pham`.`ma_san_pham`=`ct_hoa_don`.`ma_san_pham` Where `hoa_don`.`ma_khach_hang`=".$maKH;
        return   $data['Detail']=db_get_all($sql);;
    }
}
?>