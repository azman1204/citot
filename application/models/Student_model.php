<?php
class Student_model extends CI_Model {
    // return all data from student table
    function all() {
        return $this->db
                ->get('student')
                ->result();
    }
}