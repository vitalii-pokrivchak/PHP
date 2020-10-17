<?php
require_once __DIR__."/config.php";
var_dump(NOTE_STORAGE);
$iterator = new DirectoryIterator(NOTE_STORAGE);
$time_now = time();
foreach ($iterator as $fileInfo){
    if(!$fileInfo->isDot()){
        #touch($fileInfo->getPathname(),$time_now - EXPIRE_TIME);
        if($time_now - $fileInfo->getMTime() >= EXPIRE_TIME){
            unlink($fileInfo->getPathname());
        }
    }
}