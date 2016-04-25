<?php

function index_index() {
    $data = array();
    
   $data['DSSanPham'] = model('Product')->paginate(1,12);
    $data['template_file'] = 'index/home.php';
    render("layout.php", $data);
}


?>
