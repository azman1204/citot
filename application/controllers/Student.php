<?php
class Student extends CI_Controller {
    function save() {
        // input - obj auto load. guna utk baca val dr form
        //echo $this->input->post('name');
        //var_dump($this->input->post());
        $data = $this->input->post(); // return data dlm bentuk assoc. array
        $this->load->model('Student_model', 'stud'); // rename model
        $this->stud->insert($data);
        redirect('sudent/listing');
    }
    
    function form() {
        $data['v'] = 'student/form'; // /views/student/form.php
        $this->load->view('layout', $data);
    }
    
    function listing() {
        $this->load->model('Student_model', 'stud'); // rename model
        $data['students'] = $this->stud->all();
        $data['v'] = 'student/list'; // nama view sebenar
        $this->load->view('layout' , $data);
    }
}