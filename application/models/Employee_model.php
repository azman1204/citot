<?php
class Employee_model extends CI_Model {
    function one($userid) {
        return $this->db
                ->from('employee')
                ->join('person', "employee.person_id = person.id")
                ->where('user_id', $userid)
                ->get()
                ->row();
    }
    
    function auth($userid, $pwd) {
        $rs =   $this->db
                ->where('user_id', $userid)
                ->get('employee')
                ->row();
        if ($rs) {
            // userid wujud
            $ok = password_verify($pwd, $rs->pwd);
            if ($ok) {
                // password match
                return true;
            }
        }
        return false;
    }
}