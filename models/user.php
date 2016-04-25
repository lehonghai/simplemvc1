<?php

class User extends Model {
    public $table = 'nguoi_dung';
    public $primary_key = 'ma_nguoi_dung';
    
    public function Login($data)
    {                            
            $username=$data['ten_dang_nhap'];
            $password=$data['mat_khau'];
            $save=$data['ghinho'];
            $query = mysql_query("SELECT ten_dang_nhap, mat_khau FROM nguoi_dung WHERE ten_dang_nhap='$username'");
        
            if (mysql_num_rows($query) == 0) {
                $data['message']= "<h2>Tên đăng nhập này không tồn tại.<h/2>";
               $data['check']=false;
               return $data;
            }
            $row = mysql_fetch_array($query);
            if ($password == $row['mat_khau']) {
                
                     $_SESSION['username'] = $username;
                     $data['check']=true;
                     return $data;
                     
            }
            else {
                $data['message']= "<h2>Mật khẩu không đúng. </h2>";
                $data['check']=false;
                return $data;
            }

    }
    
    
    public function Logout() {
        if (isset($_SESSION['username'])){
 unset($_SESSION['username']);
    session_destroy(); // xóa session login
      }
        
    }
}