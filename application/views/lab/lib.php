<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

echo $msg;
// once this lib/helpers is loaded in controller, will avail in view too
echo $this->mylibrary->msg('second msg');
echo $label;
echo show([1,2,3,4,5]);
