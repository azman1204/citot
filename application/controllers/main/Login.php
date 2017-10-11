<?php
class Login extends CI_Controller {
    function index() {
        $this->load->view('layout2', ['v' => 'main/index']);
    }
    
    // http://localhost/citot/index.php/main/login/enter
    function enter() {
        $this->load->model('Employee_model', 'emp');
        $ok = $this->emp->auth('abu@yahoo.com', '1234');
        if ($ok) {
            echo 'ok';
        } else {
            echo 'ko';
        }
    }
}