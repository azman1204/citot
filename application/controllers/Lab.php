<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Lab extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function lib() {
        // load custom lib
        $this->load->library('mylibrary');
        $data['v'] = 'lab/lib';
        $data['msg'] = $this->mylibrary->msg('Hello');
        $this->load->view('layout', $data);
    }
}