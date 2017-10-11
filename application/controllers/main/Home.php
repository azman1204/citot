<?php
class Home extends MY_Controller {
    function index() {
        $this->load->model('Employee_model', 'emp');
        $userid = $this->session->userdata('userid');
        $data['employee'] = $this->emp->one($userid);
        //var_dump($data['employee']);exit;
        $this->viewit('main/home', $data);
    } 
}