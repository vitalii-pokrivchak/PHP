<?php
require_once __DIR__.'/functions.php';
$file_path = build_file_path(NOTE_STORAGE, $note, 'txt');
$data = decrypt_data(file_get_contents($file_path));
unlink($file_path);