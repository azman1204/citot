<?php
class Employee_model extends CI_Model {
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