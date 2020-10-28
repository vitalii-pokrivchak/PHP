<?php

require_once "./bootstrap.php";

$files = [];

$iterator = new DirectoryIterator(STORAGE);

foreach ($iterator as $fileInfo) {
    if (!$fileInfo->isDot()) {
        $files = $fileInfo;
    }
}

require_once VIEWS . "/master.view.php";
