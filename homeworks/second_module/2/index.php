<?php
require_once __DIR__ . "/init.php";
if (isset($_POST['send-btn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    if ($name === "") {
        $errors['name'] = "Field Name must be not empty";
    }
    if ($email === "") {
        $errors['email'] = "Field Email must be not empty";
    }
    if ($subject === "") {
        $errors['subject'] = "Field Subject must be not empty";
    }
    if ($message === "") {
        $errors['message'] = "Field Message must be not empty";
    }
    if ($email !== "") {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid Email format";
        }
    }
    if (count($errors) >= 1) {
        $validated = false;
    }
}

require_once VIEWS_PATH . "/master.php";