<?php
class Sample extends CI_Controller {
    function listPerson() {
        $this->load->model('Person');
        $arr = $this->Person->getAll();
        //echo $arr[1]->name;
        foreach($arr as $person) {
            echo $person->name . ' ' . $person->address . '<br>';
        }
    }
    
    function showNumber() {
        // call model, create obj, attach ke controller ini
        $this->load->model('Person'); 
        $arr = $this->Person->getData();
        echo $arr[0];
    }
}