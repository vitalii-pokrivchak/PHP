<?php
require_once 'config.php';
$note = $_GET['note'];
$file_path = sprintf('%s%s.txt',NOTE_STORAGE,$note);
$home = SERVER_URL;
if(unlink($file_path)){
    header("Location: $home");
}