<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

echo $msg;
// once this lib is loaded in controller, will avail in view too
echo $this->mylibrary->msg('second msg');

