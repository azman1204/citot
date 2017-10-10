<?php
class Student_model extends CI_Model {
    function insert($data) {
        $this->db->insert('student', $data);
    }
    
    // return all data from student table
    function all() {
        return $this->db
                ->get('student')
                ->result();
    }
}