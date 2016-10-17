<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        $s="Error!! PHP Anamai";
        $i=12345;
        $f=123.45;
        $b=true;
        $arr=array("แอปเปิ้ล","มะละกอ","กล้วย","ส้ม");
        
        echo "<hr>String = ".$s;
        echo "<hr>Integer = ".$i;
        echo "<hr>Float = ".$f;
        echo "<hr>Boolean = ";
        echo ($b==true)?"True<hr>":"False<hr>";
        
        print_r($arr);
        echo "<hr>";
        foreach ($arr as $key => $value) {
            echo "Arr ".$key." = ".$value."<hr>";
        }
        ?>
    </body>
</html>
