<h1>Array 2</h1>
<?php
$height=['john'=>178,'robert'=>182,'joiy'=>165];
print_r($height);
echo "<hr>";

echo "<h2>Foreach (key => value)</h2>";
foreach ($height as $key => $value) {
    echo $key." = ".$value."<hr>";
}
echo "<br>";
echo "<h2>Foreach (value)</h2>";
foreach ($height as $key) {
    echo $key."<hr>";
}
?>