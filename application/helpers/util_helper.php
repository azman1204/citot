<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function show($arr = []) {
    $str = '';
    foreach ($arr as $word) {
        $str = $str . '<br>' . $word; // $str .= '<br>...
    }
    return "<div class='alert alert-success'>$str</div>";
}