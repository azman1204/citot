<?php
class MY_Controller extends CI_Controller {
    // single door / entry
    function __construct() {
        parent::__construct();
        // guard
        if (!$this->session->userdata('logged_in')) {
            redirect('main/login/index');
        }
    }
    
    function viewit($arr = []) {
        $this->load->view('layout', $arr);
    }
}