<?php
  require_once 'assets/php/phpfunctions.php';
  fn_pagecheck();
  fn_session_init();


  $getarray = file_get_contents("cart.json");
  $decodedarray = json_decode($getarray, true);

  $copiedarray = $decodedarray;
  // print_r($_GET['itemkey']);
  // print_r($_GET['itemqty']);

  // foreach($decodedarray as $key => $qty){
  //   if($key === $_GET['itemkey']){

  //   }
  // }
  // print_r("blockA");
  // var_export($decodedarray);
  // print_r("blockB");
  // var_export($copiedarray);


  // foreach($decodedarray as $key => $itemqty){
  //   print_r($key.PHP_EOL);
  //   print_r($_GET['itemkey']);
  // // var_export($decodedarray);
  // var_export($decodedarray[0]);
  $n = "key" . $_GET['itemkey'];
  // var_export($n);

//   if(array_search($n, $decodedarray)){
//   print_r('this code works');
// }

  // foreach($decodedarray as $key => $itemqty){

  // }
  // var_export($n);
  // var_export($decodedarray);
  $x=0;
  foreach($decodedarray as $key => $qty){
    if(in_array($n, $decodedarray[$key]) == true){
      // print_r("data: ");
      // var_export($copiedarray[$key]['itemqty']);
      // var_export($decodedarray[$key]['itemqty']);
      // var_export("data>> " . $key);
      var_export($copiedarray[0]['itemqty']);
      $copiedarray[$key]['itemqty'] += $_GET['itemqty'];
      break;
    } else{
      $x++;
    }
  }

  print_r('a: '.PHP_EOL);
  var_export($decodedarray);
  print_r('b: '.PHP_EOL);
  var_export($copiedarray);

  if($x === count($decodedarray)){
    print_r('the code works here');
    // array_push($decodedarray[]);
  }



    // if($key == $_GET['itemkey']){
    //   $copiedarray[$key]['itemqty'] += $_GET['itemqty'];
    //   print_r('the code works here1');
    // } else{
    //   print_r('the code works here2');
    //   array_push($copiedarray[$key], $itemqty);
    // }
  // }

  // print_r("blockC");
  // var_export($copiedarray);


  // array_walk($decodedarray[0], function($key){
  //   print_r($key);
  //   if($key == $_GET['itemkey']){
  //     // print_r($item2);
  //     // $item += $_GET['itemqty'];
  //     // print_r('true'.PHP_EOL);
  //   } else{
  //     // print_r('false'.PHP_EOL);

  //   }
  // }, 'decodedarray');



  // $_SESSION['cartqty'] += $_GET['itemqty'];

  $_SESSION['snackbar'] = "item added to cart, total items: " . $_SESSION['cartqty'];

  // header("location: catalog.php");
?>