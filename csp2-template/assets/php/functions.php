<?php
  require_once '../../assets/php/init.php';

  function fn_json_users_array(){
    $jsonfile = file_get_contents('../../db/users.json');
    $decodedjson = json_decode($jsonfile, true);
    return $decodedjson;
  }

  function fn_json_upload($encodedjson){
    $file = fopen('../../db/users.json', 'w');
    fwrite($file, $encodedjson);
    fclose($file);
  }

?>
