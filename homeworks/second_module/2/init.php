<?php

ini_set('display_errors', 'On');
ini_set('display_startup_errors', 'On');
error_reporting(E_ALL);

# path to views
const VIEWS_PATH = __DIR__ . "/views/";
# array for validating errors
$errors = [];
# variable for check when form is validated success
$validated = true;
