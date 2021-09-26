<?php
function sortArray(&$Array) {
	quicksort($Array, 0, sizeof($Array));
    PrintArray($Array);
}
function quicksort(&$Array, $left, $right) {
  if ($left < $right) {
    $pivot = partition($Array, $left, $right);
    quicksort($Array, $left, $pivot-1);
    quicksort($Array, $pivot+1, $right);
  }
}
function partition(&$Array, $left, $right) {
  $i = $left;
  $pivot = $Array[$right];
  for($j = $left; $j <=$right; $j++) {
    if($Array[$j] < $pivot) {
      $temp = $Array[$i];
      $Array[$i] = $Array[$j];
      $Array[$j] = $temp;
      $i++;
    }
  }

  $temp = $Array[$right];
  $Array[$right] = $Array[$i];
  $Array[$i] = $temp;
  return $i;
}
function PrintArray($Array) {
  for ($i = 0; $i < sizeof($Array); $i++)
    echo $Array[$i]." ";
  echo "\n";
}

$MyArray = array(-4, 1, 25, 50, 8, 10, 23);
echo "Original Array\n";
PrintArray($MyArray);
echo "\nSorted Array\n";
sortArray($MyArray);
?>