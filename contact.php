<?php
require '_inc.php';

$errors = [];

$validate = new Validate($_POST);
$validate->check('name', 'required');
$validate->check('tel', 'required');
$validate->check('email', 'email');
$validate->check('message', 'required');
$errors = $validate->errors();


if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: index.php');
}
else{
    $_SESSION['success'] = 1;
    $message = $_POST['message'];
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $headers = 'FROM : '. $_POST['email'];
    mail('oihana.coulaud@outlook.fr', 'Formulaire de contact de' . $name, $message, $headers, $tel);
    header('Location: index.php');
}

