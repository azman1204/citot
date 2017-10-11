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
    
    // $data['v'] = 'main/home'
    // $this->load->view('layout', $data)
    function viewit($v, $arr = []) {
        $arr['v'] = $v;
        $this->load->view('layout', $arr);
    }
}