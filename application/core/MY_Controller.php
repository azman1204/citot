<?php
class MY_Controller extends CI_Controller {
    function viewit($arr = []) {
        $this->load->view('layout', $arr);
    }
}