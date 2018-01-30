<?php

$readarray = file_get_contents("items.json");
$decodedarray = json_decode($readarray, true);

$categorylist = array();
for($i=1; $i<=count($decodedarray); $i++){
  array_push($categorylist, $decodedarray[$i-1]['category']);
}

$categorylist = array_unique($categorylist, SORT_REGULAR);

$categorylist = array_values(array_filter($categorylist));
echo "
  <form method=\"GET\">
    <select name=\"item-filter\" id=\"filterform\" onchange=\"javascript: if(this.value != '0') this.form.submit();\">
    <option value=\"all\" selected>all</option>";

for($i=1; $i<=count($categorylist); $i++){
  echo $categorylist[$i-1];
  echo "<option value=\"" . $categorylist[$i-1] . "\">" . $categorylist[$i-1] .  "</option>";
}

echo "</select>
    <input type=\"submit\" value=\"filter\">
  </form>";




  ?>