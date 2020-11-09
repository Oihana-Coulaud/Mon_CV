<?php
session_start();

function dd($var){
    var_dump($var);
    die();
}
require 'Class/Form.php';
require 'Class/Validate.php';