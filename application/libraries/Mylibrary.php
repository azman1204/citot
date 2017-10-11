<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mylibrary {
    function __construct() {}
    
    function msg($str) {
        return "<div class='alert alert-danger'>$str</div>";
    }
}