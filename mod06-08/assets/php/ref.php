<?php
  function getTitle(){
    return "12 days of Christmas";
  }

  function getLyrics(){
    $days = array('first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eight', 'nineth', 'tenth', 'eleventh', 'twelveth');
    $gifts = array(
      'a partridge in a pear tree',
      'two turtle doves',
      'three french hens',
      'four calling birds',
      'five golden rings',
      'six geese a-laying',
      'seven swans a-swimming',
      'eight maids a-milking',
      'nine ladies dancing',
      'ten lords a-leaping',
      'eleven pipers piping',
      'twelve drummers drumming'
    );

    echo "<div class=\"container\">";
    for($i = 1, $giftsValue1 ="", $giftsValue2 ="", $giftsValue3 = ""; $i <= 12; $i++){
      echo "<div class=\"stanza\">On the " . $days[$i -1] . " of day Christmas my true love sent to me:" . '<br>';
      for($j = $i, $giftsValue1 ="", $giftsValue2 ="", $giftsValue3 = ""; $j != 0; $j--){
        $giftsValue1 = $gifts[$j-1];

        if($j == 1){
          $giftsValue2 = $giftsValue2 . $giftsValue1 .'. ';
        } else{
          $giftsValue2 = $giftsValue2 . $giftsValue1 .', ';
        }
      }
      echo $giftsValue2 . '<br>';
      echo "</div>";
    }
    echo "</div>";
  }