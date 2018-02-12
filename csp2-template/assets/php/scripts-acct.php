<?php
  require_once '../../assets/php/init.php';
  require_once '../../assets/php/functions.php';

  $type = $_GET['type'];
  if($type = 'signup'){
     require_once '../../assets/php/init.php';
    require_once '../../assets/php/functions.php';
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $email = htmlspecialchars($_POST['email']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);

    $decodedjson = fn_json_users_array();
    $arrlen = count($decodedjson);

    //server-side validation here:
    $arr = [];
    for($l=1;$l<=$arrlen;$l++){
      array_push($arr, $decodedjson[$l-1]['username']);
    }
    array_search($username, $arr);
    var_dump(array_search($username, $arr));
    if(array_search($username, $arr) > 0){
      $_SESSION['snackbar'] = "The username: \"$username\" is not available for registration";
      header('location: ../../index.php?webtitle=signup');
    } else{
      $fields = ['id','username','password','email','firstname','lastname','role'];
      $values = [$arrlen, $username, $password, $email, $firstname, $lastname, 'user'];
      for($l=1;$l<=count($fields);$l++){
        $decodedjson[$arrlen][$fields[$l-1]] = $values[$l-1];
      }
      $encodedjson = json_encode($decodedjson, JSON_PRETTY_PRINT);

      fn_json_upload($encodedjson);
      $_SESSION['snackbar'] = 'Successfully registered the user, please log in.';
      header('location: ../../index.php?webtitle=signin');
    }

  } elseif($ype = 'signin'){

    }

?>