<?php


function admin_login() 
{
    
    $data = array();
    if(isset($_POST['btndangnhap']))
    {   

     $data =model('user')->Login($_POST);

    }
     if($data!=null)
     {
        if($data['check'])
        {
           redirect('index.php?c=admin&m=manager');
        }
     }
     $data['template_file'] = 'admin/login.php'; 
            render("layout_login.php", $data);
        //san pham cung loai
   
     }
    
      


function admin_logout() 
{
    
        $data=model('user')->Logout();
         redirect('index.php?c=admin&m=login');
    
    
}
function admin_manager() 
{
    
   $data = array();
    
     
    
     

    
      $data['template_file'] = 'admin/layout_admin_content.php'; 
            render("layoutadmin.php", $data);
    
     
    
     
    
      
}

function admin_listproduct() 
{
    
   $data = array();
    
     
    $data['DSSanPham'] = model('Product')->paginate(1,10);
     
    
      $data['template_file'] = 'admin/layout_product.php'; 
            render("layoutadmin.php", $data);
    
     
    
     
    
      
}
function admin_updateproduct() 
{
    
   $data = array();
    
     $id=$_GET['id'];
  $data['update']=model('Product')->getOneBy($id);
    if(isset($_POST['btncapnhat']))
    {
          
          
          $aray = array(
                'ma_san_pham'=>$_POST['ma_san_pham'], 
                'ten_san_pham'=>$_POST['ten_san_pham'], 
                'ten_san_pham_url'=>$_POST['ten_san_pham_url'], 
                'mo_ta_tom_tat'=>$_POST['mo_ta_tom_tat'], 
                'mo_ta_chi_tiet'=>$_POST['mo_ta_chi_tiet'], 
                'don_gia'=>$_POST['don_gia'], 
                'don_gia_khuyen_mai'=>$_POST['don_gia_khuyen_mai'], 
                'hinh'=>'', 
                'san_pham_moi'=>isset($_POST['san_pham_moi'])?$_POST['san_pham_moi']:0, 
                'so_lan_xem'=>$_POST['so_lan_xem'], 
                'ngay_tao'=>$_POST['ngay_tao']
                );
                
           $data=db_update('san_pham',$aray,"`ma_san_pham` = $id");
        
            
                            redirect('index.php?c=admin&m=listproduct');
                       
    }
    
    
      $data['template_file'] = 'admin/update_product.php'; 
            render("layoutadmin.php", $data);
    
     
    
     
    
      
}
function admin_clear() 
{
    
   $data = array();
    
     $id=$_GET['id'];
   
  $data['clear']=model('Product')->getOneBy($id);

  $data=db_delete('san_pham', "`ma_san_pham` = $id");
   redirect('index.php?c=admin&m=listproduct');
   }
   
    
    
      


function admin_addproduct() 
{
    
   
    
     $data = array();
  $id=$_GET['id'];
  $data['add']=model('Product')->getOneBy($id);
    if(isset($_POST['btnthem']))
    {
          
          
          $aray = array(
                'ma_san_pham'=>$_POST['ma_san_pham'], 
                'ten_san_pham'=>$_POST['ten_san_pham'], 
                'ten_san_pham_url'=>$_POST['ten_san_pham_url'], 
                'ma_loai'=>$_POST['ma_loai'], 
                'mo_ta_tom_tat'=>$_POST['mo_ta_tom_tat'], 
                'mo_ta_chi_tiet'=>$_POST['mo_ta_chi_tiet'], 
                'don_gia'=>$_POST['don_gia'], 
                'don_gia_khuyen_mai'=>$_POST['don_gia_khuyen_mai'], 
                'hinh'=>'', 
                'san_pham_moi'=>isset($_POST['san_pham_moi'])?$_POST['san_pham_moi']:0, 
                'so_lan_xem'=>$_POST['so_lan_xem'], 
                'ngay_tao'=>$_POST['ngay_tao']
                );
                
           $data['add']=db_insert('san_pham',$aray);
            $kg=$data;
            if($kq)
                            redirect('index.php?c=admin&m=addproduct');
                        else
                            $errMss='Thêm không thành công, vui lòng kiểm tra lại dữ liệu';
    }
    
     
    
      $data['template_file'] = 'admin/add_product.php'; 
            render("layoutadmin.php", $data);
    
     
    
     
    
      
}
function admin_news() 
{
    
   $data = array();
    
     
    $data['news'] = model('news')->paginate(1,8);
     
    
      $data['template_file'] = 'admin/layout_list_news.php'; 
            render("layoutadmin.php", $data);
    
     
    
     
    
      
}
function admin_addnews() 
{
    
   
    
     $data = array();
  $id=$_GET['id'];
  $data['add']=model('news')->getOneBy($id);
    if(isset($_POST['btnthem']))
    {
          $tieude= $_POST['tieu_de'];
          $tomtat=$_POST['noi_dung_tom_tat'];
          $chitiet= $_POST['noi_dung_chi_tiet'];
          $ngaygui= $_POST['ngay_gui_bai'];
          
          $aray = [
            'tieu_de' => $tieude,
             'noi_dung_tom_tat' => $tomtat,
             'noi_dung_chi_tiet'=>$chitiet,
             'ngay_gui_bai'=>$ngaygui
          ];
           $data['add']=db_insert('bai_viet',$aray);
           $kg=$data;
            if($kq)
                            redirect('index.php?c=admin&m=addnews');
                        else
                            $errMss['errMss']='Thêm không thành công, vui lòng kiểm tra lại dữ liệu';
    }
    
     
    
      $data['template_file'] = 'admin/add_news.php'; 
            render("layoutadmin.php", $data);
    
     
    
     
    
      
}
function admin_updatenews() 
{
    
   $data = array();
    
     $id=$_GET['id'];
  $data['update']=model('news')->getOneBy($id);
   
     if(isset($_POST['btncapnhat']))
    {
          $tieude= $_POST['tieu_de'];
          $tomtat=$_POST['noi_dung_tom_tat'];
          $chitiet= $_POST['noi_dung_chi_tiet'];
          $ngaygui= $_POST['ngay_gui_bai'];
          
          $aray = [
            'tieu_de' => $tieude,
             'noi_dung_tom_tat' => $tomtat,
             'noi_dung_chi_tiet'=>$chitiet,
             'ngay_gui_bai'=>$ngaygui
          ];
           $data=db_update('bai_viet',$aray,"`ma_bai_viet` = $id");
           $kq=$data;
            if($kq){
                
                redirect('index.php?c=admin&m=news');
               
                     }
                                  else
                            {
                                  $errMss='Cập Nhật không thành công, vui lòng kiểm tra lại dữ liệu';
                            }
                          
    }
    
     
   
      $data['template_file'] = 'admin/update_news.php'; 
            render("layoutadmin.php", $data);
    
     
    
     
    
      
}
function admin_clearnews() 
{
    
   $data = array();
    
     $id=$_GET['id'];
   
  $data['clear']=model('news')->getOneBy($id);

  $data=db_delete('bai_viet', "`ma_bai_viet` = $id");
     redirect('index.php?c=admin&m=news');
    
}
function admin_listcustomers() 
{
    
   $data = array();
    
     
    $data['customers'] = model('Customer')->paginate(1,10);
     
    
      $data['template_file'] = 'admin/layout_list_cart.php'; 
            render("layoutadmin.php", $data);
    
     
    
     
    
      
}
function admin_itemsdetail() 
{
    
  
     
   
       $maKH=$_GET['id'];
           $data['Detail']=model('Customer')->ThongTinChiTiet($maKH);
      $data['template_file'] = 'admin/items_detail.php'; 
            render("layoutadmin.php", $data);
    
     
    
     
    
      
}
function admin_deletecustomers() 
{
    
   $data = array();
    
     $id=$_GET['id'];
   
  $data['clear']=model('Customer')->getOneBy($id);

  $data=db_delete('khach_hang', "`ma_khach_hang` = $id");
      redirect('index.php?c=admin&m=listcustomers');
    
}



?>