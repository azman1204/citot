<?php
class Student extends CI_Controller {
    function listing() {
        $this->load->model('Student_model', 'stud'); // rename model
        $data['students'] = $this->stud->all();
        $data['v'] = 'student/list'; // nama view sebenar
        $this->load->view('layout' , $data);
    }
}