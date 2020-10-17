<?php
require_once __DIR__."/functions.php";
if (isset($_POST['btn'])) {
    $note_text = trim($_POST['note-text']);
    $file_name = md5($note_text . mktime());
    $file_path = build_file_path(NOTE_STORAGE,$file_name,'txt');
    file_put_contents($file_path, encrypt_data($note_text));
    $redirect_url = build_redirect_url('views/note_url_view.php','note',$file_name);
    header("Location: $redirect_url");
}

require_once VIEWS_PATH . 'master.php';
