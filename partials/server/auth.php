<?php

include __DIR__.'/settings.php';

$sql = "SELECT `name`, `surname` FROM users";
$result = $conn->query($sql);

function login($email, $password)
{
    echo $email.' '.$password; 
}

function register($name, $surname, $email, $password)
{

}

if (isset($_POST['loginemail']) && isset($_POST['loginpassword'])){
    login($_POST['loginemail'], $_POST['loginpassword']);
}

if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['loginemail']) && isset($_POST['loginpassword'])){
    register($_POST['name'], $_POST['surname'], $_POST['loginemail'], $_POST['loginpassword']);
}