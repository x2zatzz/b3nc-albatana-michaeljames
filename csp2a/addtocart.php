<?php
  require_once 'assets/php/phpfunctions.php';
  fn_pagecheck();
  fn_session_init();

  $arr1 = fnShort_file_get_json('items.json');
  $arr = [];
  $brr1 = [];   // the updated array according to the items.json
  for($l=1; $l<=count($arr1); $l++){
    array_push($brr1, 0);
  }
  if($_GET['itemqty'] == 0){
    fn_ttl_cart();
    echo "return to catalog.php";
    header("location: catalog.php");
  } elseif($_GET['itemkey'] > count($arr1)-1){
    echo "invalid product id, please confirm product selection";
    header("location: catalog.php");
  }

  $arr1 = fnShort_file_get_json('cart.json');
  for($l=1; $l<=count($brr1); $l++){
    if(array_key_exists(($l-1), $arr1)){
      $brr1[$l-1] += $arr1[$l-1];
    } else{
      $brr1[$l-1] = 0;
    }
  }
  $brr1[$_GET['itemkey']] += $_GET['itemqty'];

  var_export($brr1);
  $brr = json_encode($brr1, JSON_PRETTY_PRINT);

  fn_updatejsonfile('cart.json', $brr);

  function fnShort_file_get_json($fz){ //fz = json ref file
    $arr = file_get_contents($fz);
    $arr1 = json_decode($arr, true);
    return $arr1;
  }

  function fnShort_json_decode_loop($fz, $fy){
    //fz = json ref file; fy = function to run
    $arr = [];
    $arr = file_get_contents($fz);
    $arr1 = json_decode($arr, true);
    for($l=1; $l<=count($arr1); $l++){
      $fy;
    }
  }

  function fn_updatejsonfile($fz, $fy){ // fz= filename of the target json file; fy= target data to place inside the file
    copy($fz, str_replace('.json', '_back.json', $fz));
    $fileopen = fopen($fz, 'w');
    fwrite($fileopen, $fy);
    fclose($fileopen);
    header("location: catalog.php");
  }

  function fn_ttl_cart(){
    $_SESSION['cartqty'] = 0;
    $arr = file_get_contents('cart.json');
    $arr1 = json_decode($arr, true);
    for($l=1; $l<=count($arr1); $l++){
      $_SESSION['cartqty'] += $arr1[$l-1]['itemqty'];
    }
    $arr = [];
    $arr1 = [];
  }

    // fnShort_json_decode_loop('items.json', function(){
    // });

  // =============================================================================
  // $arr = [];
  // $arr1 = [];
  // $brr = [];
  // $brr1 = [];
  // $arr = file_get_contents('items.json');
  // $arr1 = json_decode($arr, true);
  // if($_GET['itemqty'] == 0){
  //   fn_ttl_cart();
  //   header("location: catalog.php");
  // } elseif($_GET['itemkey'] > count($arr1)-1){
  //   $_SESSION['snackbar'] = "the product is not is existing, please contact support";
  //   header("location: catalog.php");
  // }

  // for($l=1; $l<=count($arr1); $l++){
  //   $brr1[$l-1]['itemkey'] = 'key' . ($l-1);
  //   $brr1[$l-1]['itemqty'] = 0;
  // }
  // $arr = file_get_contents('cart.json');
  // $arr1 = json_decode($arr, true);

  // if(count($arr1) == count($brr1)){

  // }


  // $brr1[$_GET['itemkey']]['itemqty'] += $_GET['itemqty'];
  // fn_ttl_cart();


  // var_export($brr1)


  // $num = 0;
  // for($l=1; $l<=count($arr1); $l++){
  //   $_SESSION['cartqty'] += $arr1[$l-1]['itemqty'];
  //   if($arr1[$l-1]['itemkey'] === "key" . $_GET['itemkey']){
  //     $brr1[$_GET['itemkey']]['itemqty'] += $_GET['itemqty'];
  //     $num--;
  //   } else{}
  //     $num++;
  //     if($num === count($arr1)){
  //       $brr1[count($arr1)]['itemkey'] = 'key' . $_GET['itemkey'];
  //       $brr1[count($arr1)]['itemqty'] = (int) $_GET['itemqty'];
  //     } else{}
  // }

  // var_export($brr1);


?>