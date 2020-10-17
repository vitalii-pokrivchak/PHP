<?php
require_once __DIR__.'/config.php';
define('IVLEN',openssl_cipher_iv_length(CIPHER));
function checkNote($note)
{
    return file_exists(build_file_path(NOTE_STORAGE,$note,'txt'));

}

function build_redirect_url($action, $parameter, $value)
{
    return sprintf('%s%s?%s=%s', SERVER_URL , $action, $parameter, $value);
}

function build_file_path($storage, $filename, $extension)
{
    return sprintf('%s%s.%s', $storage, $filename, $extension);
}
function encrypt_data($data){
    $iv = openssl_random_pseudo_bytes(IVLEN);
    $encoded_data = openssl_encrypt($data,CIPHER,CRYPT_KEY,OPENSSL_RAW_DATA,$iv);
    $hmac = hash_hmac(HASH_ALGORITHM,$encoded_data,CRYPT_KEY,true);
    $result = base64_encode($iv.$hmac.$encoded_data);
    return $result;
}
function decrypt_data($encrypted_data){
    $data = base64_decode($encrypted_data);
    $iv = substr($data,0,IVLEN);
    $hmac = substr($data,IVLEN,HASH_LENGTH);
    $cipherText = substr($data,IVLEN + HASH_LENGTH);
    $original = openssl_decrypt($cipherText,CIPHER,CRYPT_KEY,OPENSSL_RAW_DATA,$iv);
    $calc_mac = hash_hmac(HASH_ALGORITHM,$cipherText,CRYPT_KEY,true);
    if(hash_equals($hmac,$calc_mac)){
        return $original;
    }
    return false;
}