<?php
$name = "Takumi";
if ($name == "Takumi" ) {
   echo "私はTakumiです。";
}  else {
   echo "私はTakumiではありません。";
}

 $total = 0;
 
for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;
echo "\n";


$fruits = array("りんご","いちご","スイカ","キウイ","パイナップル");
foreach ($fruits as $fruit) {
    echo $fruit;
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





