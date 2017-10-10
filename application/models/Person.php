<?php
class Person extends CI_Model {
    function insert($data) {
        $this->db->insert('person', $data);
    }
    
    
    function getAll() {
        $this->load->database(); // manually load library database
        // vs automatic load (config/autoload.php)
        // return an array of object person
        return $this->db->get('person')->result(); // SELECT * FROM person
    }
    
    function getData() {
        return [1,2,3,4,5];
    }
}