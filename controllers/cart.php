<?php

function cart_infor() {
    $gio_hang = new Gio_hang();
    if(isset($_POST['btnCapNhat']))
    {
        $ttgh=$gio_hang->ThongTinGioHang();
        if($ttgh)
        {
            foreach($ttgh as $msp=>$tt)
            
            {
                $somoi=$_POST['sl_'.$msp];
                if($somoi!=$tt[1])
                {
                    $gio_hang->CapNhatGioHang($msp,$somoi);
                }
            }
        }
    }
    
    $ttgh=$gio_hang->ThongTinGioHang();
    
    $data['ttgh']=$ttgh;
    $data['template_file'] = 'cart/cart_infor.php';
    render("layout.php", $data);
}

function cart_manager() {
    
     $data['template_file'] = 'admin/layout_list_cart.php'; 
            render("layoutadmin.php", $data);
    
}
//`ma_khach_hang`, `ten_khach_hang`, `phai`, `ngay_sinh`, `dia_chi`, `dien_thoai`, `email`
function cart_order() {
  
  
    if(isset($_POST['them_khach_hang']))
    {
        $arraykh=array(
        'ten_khach_hang' => $_POST['ten_khach_hang'],
        'phai' => $_POST['phai'],
        'ngay_sinh' => $_POST['ngay_sinh'],
        'dia_chi' => $_POST['dia_chi'],
         'dien_thoai' => $_POST['dien_thoai'],
          'email' => $_POST['email'],
        );
         $makh=db_insert('khach_hang',$arraykh);
        
      $arrayhd=array(
            'ngay_hd'=>date('Y-m-d'),
            'ma_khach_hang'=>$makh,
            'tri_gia'=>$_SESSION['TongSoTien']
      );
      
      $SoHD=db_insert('hoa_don',$arrayhd);
        $gio_hang= new Gio_hang();
        $thongtingiohang=$gio_hang->ThongTinGioHang();
        var_dump($thongtingiohang);exit;
        foreach($thongtingiohang as $msp=>$ttmh)
        {
              $arraycthd=array(
      'so_hoa_don'=>$SoHD,
       'ma_san_pham'=>$makh,
      'so_luong' =>$ttmh['1'],
     'don_gia' =>$ttmh['0'],
      );
        $cthd=db_insert('ct_hoa_don',$arraycthd);
        
        }
  
   
     $gio_hang->HuyGioHang();
      
       redirect('index.php?c=cart&m=inforitem&key='.$SoHD);
       
    }

     $data['error']=$errMss;
     $data['template_file'] = 'cart/order.php'; 
            render("layout.php", $data);
    
}
function cart_inforitem()
{
     $SoHD=$_GET['key'];
        
        $data['HoaDon']=model('Invoice')->DonDatHang($SoHD);
   
    
 $data['template_file'] = 'cart/infor_items.php'; 
            render("layout.php", $data);
    
    
}


function cart_additem() {
    $msp=$_POST['masanpham'];
        $sl=$_POST['soluong'];

        $sanpham=model('Product')->getOneBy($msp);
         if($sanpham['don_gia_khuyen_mai']>0)
            $dg=$sanpham['don_gia_khuyen_mai'];
        else
           $dg=  $sanpham['don_gia'];
        $gio_hang= new Gio_hang();
        //var_dump($sanpham);die;
        $gio_hang->them($msp,$sanpham['ten_san_pham'],$dg,$sl);
        
        echo $gio_hang->TongSoLuong().'|'.$gio_hang->TongSoTien();
        
        
     
    
    
}





function cart_delete() {
    $gio_hang= new Gio_hang();
    $gio_hang->HuyGioHang();
    
     
    
}
  



?>
