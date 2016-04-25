<?php


function product_detail() 
{
    
   $data = array();
    
     $id=$_GET['id'];

    

     if(isset($_POST['btncommentsp']))
     {
        $email=$_POST['email'];
        $comment=$_POST['comment'];
          
          $aray = [
            'email' => $email,
             'comment' => $comment,
             
          ];
          if($email=='')
          {
            $emailer='Vui Lòng Nhập Email ';
            
          }
           else
           {
            $binhluan=db_insert('binh_luan',$aray);
             
           }
           
                 
                         
             
    }
    $data['error']=$emailer;
    
     $data['ctsp']=model('product')->getOneBy($id);
      $data['comment']=model('Comment')->all();
      $data['template_file'] = 'product/detail_product.php'; 
            render("layout.php", $data);
        //san pham cung loai
        
}
?>