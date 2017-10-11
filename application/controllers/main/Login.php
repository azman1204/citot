<?php
class Login extends CI_Controller {
    function index() {
        $this->load->view('layout2', ['v' => 'main/index']);
    }
    
    // http://localhost/citot/index.php/main/login/enter
    function enter() {
        $input = $this->input->post();
        $this->load->model('Employee_model', 'emp');
        $ok = $this->emp->auth($input['userid'], $input['pwd']);
        if ($ok) {
            // set session $_SESSION['key'] = 'value'; (php biasa)
            $this->session->set_userdata('logged_in', true); 
            redirect('student/listing');
        } else {
            // show back login screen
            $this->load->view('layout2', ['v' => 'main/index', 'err' => 'Wrong ID or Pwd']);
        }
    }
    
    function logout() {
        // destroy all session
        $this->session->sess_destroy();
        redirect('main/login/index');
    }
}