<?php
class Student extends CI_Controller {
    function listing() {
        $data['v'] = 'student/list'; // nama view sebenar
        $this->load->view('layout' , $data);
    }
}