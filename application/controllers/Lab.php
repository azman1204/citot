<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Lab extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function lib() {
        // load custom lib
        $this->load->helper('util'); // /libraries/util_helper.php
        $arr = ['message 1', 'message 2'];
        $data['label'] = show($arr);
         
        $this->load->library('mylibrary');
        $data['v'] = 'lab/lib';
        $data['msg'] = $this->mylibrary->msg('Hello');
        $this->load->view('layout', $data);
    }
}