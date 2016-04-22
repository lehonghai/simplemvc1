<?php

function vidu_test() {
    $data = array();
    $data['template_file'] = 'index/vidu.php';
    render("layout.php", $data);
}
