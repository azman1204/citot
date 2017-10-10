<?php
class Sample extends CI_Controller {
    // constructor. will run first on every request
    function __construct() {
        parent::__construct();
        $this->load->model('Person');
    }
    
    function update() {
        $data = ['address' => 'Cyber Jaya'];
        $this->Person->update($data, $id=4);
    }
    
    //http://localhost/citot/index.php/sample/insert
    function insert() {
        $data = [
            'name'    => 'Abu', 
            'address' => 'P.Jaya'
        ];
        $this->Person->insert($data);
    }
    
    function listPerson() {
        //$this->load->model('Person');
        $arr = $this->Person->getAll();
        //echo $arr[1]->name;
        foreach($arr as $person) {
            echo $person->name . ' ' . $person->address . '<br>';
        }
    }
    
    function showNumber() {
        // call model, create obj, attach ke controller ini
        //$this->load->model('Person'); 
        $arr = $this->Person->getData();
        echo $arr[0];
    }
}