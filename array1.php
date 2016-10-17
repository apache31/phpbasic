<h1>Array 1</h1>
<?php

$arr= ["TOYOTA","ISUZU","YAMAHA","BMW"];
print_r($arr);
echo "<hr>";

$count_car= count($arr);
echo $count_car;
echo "<hr>";

echo "<h2>Loop for</h2>";

for($i=0;$i<$count_car;$i++){
    echo $arr[$i]."<hr>";
}
?>