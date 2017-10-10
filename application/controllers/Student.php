<?php
class Student extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Student_model', 'stud');
    }
    
    function edit($id) {
        $data['student'] = $this->stud->one($id);
        //var_dump($data['student']);exit;
        $data['v'] = 'student/form';
        $this->load->view('layout', $data);
    }
    
    function del($id) {
        $this->stud->remove($id);
        redirect('student/listing');
    }
    
    function save() {
        // input - obj auto load. guna utk baca val dr form
        //echo $this->input->post('name');
        //var_dump($this->input->post());
        $data = $this->input->post(); // return data dlm bentuk assoc. array
        $id = $this->input->post('id');
        if ($id === '') {
            // insert
            $this->stud->insert($data);
        } else {
            // update
            $this->stud->update($data, $id);
        }
        
        //$this->load->model('Student_model', 'stud'); // rename model
        redirect('student/listing');
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