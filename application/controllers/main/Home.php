<?php
class Home extends MY_Controller {
    function index() {
        $this->viewit('main/home');
    }
}