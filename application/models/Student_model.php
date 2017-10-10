<?php
class Student_model extends CI_Model {
    var $id;
    var $name;
    var $email;
    var $matric_no;
    
    function update($data, $id) {
        $this->db
                ->where('id', $id)
                ->update('student', $data);
    }
    
    function one($id) {
        // return an object represent a record
        return $this->db
                ->where('id', $id)
                ->get('student')
                ->row();
    }
    
    function remove($id) {
        $this->db->delete('student', "id=$id");
    }
    
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