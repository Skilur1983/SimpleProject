<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $team = array( array("Freak", "Christ", "Call", "Scream"),
                       array(1, 2, 3, 4),
                       array("Fly", "Run", "Cry", "Heal")
                ); 
        echo $team[1][3] + 5;
        echo "<br />";
        $x = 9;
        if(++$x == 10) echo $x;
        echo "<br />";
        if ($x-- == 10) echo $x;
        echo "<br />";
        echo "You know you're number is  ".$x;
        echo ".";
        echo "<br />";
        function println($string){
            echo $string;
            echo "<br />";
        }
        $string1 ='There is no better variable then $x';
        $string2 = "There is no better variable then $x";
        println($string1);
        println($string2);      
        $number = 12345*67890;
        println(substr($number, 2, 2));
        println("This string".__LINE__." in file ".__FILE__);
        println(date("F jS Y", time()));
        println(date("D F jS Y", time()));
        $var;
        function sum($var){
            $var += 5;
            return $var;
        }
        function concat($var){
            return $var.'Song';
        }
        println("Sum equals ".sum(3));
        println(concat("Star "));
        ?>
    </body>
</html>
