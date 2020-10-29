<?php

require_once "./bootstrap.php";


$iterator = new DirectoryIterator(STORAGE);
foreach($iterator as $fileInfo){
    if(!$iterator->isDot()){
        $files[] = [
            "filename" => $fileInfo->getFilename(),
            "extension" => $fileInfo->getExtension(),
            "size" => round((($fileInfo->getSize()/1024)/1024),2)."(Mb)",
            "last_updated" => date("d F Y",$fileInfo->getATime())
        ];
    }
}

require_once VIEWS . "/master.view.php";
