<?php
class Student extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Student_model', 'stud');
        // form validation
        $this->load->library('form_validation');
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
        // echo $this->input->post('name');
        // var_dump($this->input->post());
        $data = $this->input->post(); // return data dlm bentuk assoc. array
        $id = $this->input->post('id');
        
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Emel', 'required|valid_emails');
        $this->form_validation->set_rules('matric_no', 'No Matrik', 'required|exact_length[3]');
        
        if ($this->form_validation->run() == FALSE) {
            // validation tak lepas
            $dat['v'] = 'student/form';
            $this->stud->name      = $data['name'];
            $this->stud->email     = $data['email'];
            $this->stud->matric_no = $data['matric_no'];
            $this->stud->id        = $data['id'];
            $dat['student'] = $this->stud;
            $this->load->view('layout', $dat);
            return;
        }

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
        $data['student'] = $this->stud;
        $this->load->view('layout', $data);
    }
    
    function listing() {
        $this->load->model('Student_model', 'stud'); // rename model
        $data['students'] = $this->stud->all();
        $data['v'] = 'student/list'; // nama view sebenar
        $this->load->view('layout' , $data);
    }
}