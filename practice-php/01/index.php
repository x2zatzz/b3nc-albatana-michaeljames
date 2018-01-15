<?php
  $arraydata = array('namae'=>'maikeru','onamae'=>'je-muzu');
  echo $arraydata['namae'] . '<br>';
  echo $arraydata['onamae'] . '<br>';
?>

<?php
  $array01 = array(1, 2, 3, 4, 5, 6);
  $array02 = array('01' => 1, '02' => 2, '03' => 3, '04' => 4);
  foreach($array01 as $numbers){
    echo $numbers . '<br>';
  }
  foreach($array02 as $key => $value){
    echo $key . ' ' . $value . '<br>';
  }
?>