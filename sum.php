<?php

//課題1
 function multple($i) {
         $result = $i *2;
     echo $result;
}
 multple(7);
echo "\n";

//課題２
function f($a, $b) {
    $result = $a + $b ;
    echo $result;
}
f(4,78);
echo "\n";

//課題３
$arr = array (1,3,5,7,9);
$total = 1;
foreach ($arr as $value ) {
    $total *= $value;
}

    echo $total;
    echo "\n";

//課題４
$arr = array(94,437,454,77,23,67);    
function max_array ($arr) { 
    $max_number = $arr [0];
    foreach($arr as $a);{
        if($max_number < $a );
        ($max_number = $a);
    }
    return $max_number;
    }
    echo max_array($arr);
    echo "\n";
    

//課題５

$text = "<h1>test<h1><p> test<p>";
echo $text;
echo "\n";
echo strip_tags($text);
echo "\n";

$emotions = array( "happy","angry","sad");
array_push($emotions,"enjoy");
print_r ($emotions);

$sports1 = array( "football","basketball","tennis");
$sports2 = array("baseball","boxing");
$result = array_merge ($sports1,$sports2);
print_r($result);

$now_time = time();
echo $now_time;
echo "\n";
$now_time_after_2_days = time() + (2 *24 *60 *60);
echo $now_time_after_2_days;
echo "\n";

$timestamp = mktime(16,16,0);
echo $timestamp;
echo "\n";


$date = date("w");
echo $date;

$week = ["日","月","火","水","木","金","土","日"];
echo "今日は".$week[$date]."曜日";
echo "\n";

?>
