<?php
class Test extends CI_Controller {
    // passing data through URL
    // http://localhost/citot/index.php/test/url/123/ABC
    // dlm kes ini, $id=123 $ic=ABC
    function url($id, $ic) {
        echo "$id $ic";
    }
    
    function hello() {
        // normal array vs assoc. array
        // [1,2,3] vs ['one'=>1,'two'=>2]
        // call view
        //$this->load->view('say_hello'); // /views/say_hello.php
        $data['nama']   = 'John Doe';
        $data['alamat'] = 'London';
        $this->load->view('home/main', $data); // /views/home/main.php
    }
    
    // route
    // http://localhost/citot/index.php/test/index
    // Test = nama controller / index = nama function
    // index is default method i.e ../test, run index()
    public function index() {
        echo "Hello Codeigniter";
    }
    
    // http://localhost/citot/index.php/test/hola
    public function hola() {
        echo "Hola";
    }
}