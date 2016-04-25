<?php

function news_news() {
    $data = array();
    
    $data['news']=Model('news')->paginate(1,5);
    $data['template_file'] = 'news/v_news.php';
    render("layout.php", $data);
}

function news_detail() {
    $data = array();
    $id=$_GET['id'];
     if(isset($_POST['btncommentnews']))
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
            $binhluan=db_insert('binh_luan_tin_tuc',$aray);
             
           }
           
                 
                         
             
    }
    $data['error']=$emailer;
    $data['news_detail']=model('news')->getOneBy($id);
    $data['comment']=model('Commentnews')->all();
    $data['template_file'] = 'news/v_news_detail.php';
    render("layout.php", $data);
}

?>
