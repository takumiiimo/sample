<?php
$namae = "Takumi";
if ($name = "Takumi") {
   echo "私はたくみです。";
}  else {
   "私はたくみではありません。";
}

 $total = 0;
 
for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;
echo "\n";


$fruits = array("りんご","いちご","スイカ","キウイ","パイナップル");
foreach ($fruits as $fruits) {
    echo $fruits;
    echo "\n";
}

$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++) {
    if($i % 5 == 0){
echo $i;
echo "\n";    
}
}





