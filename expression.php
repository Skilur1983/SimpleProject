<?php
function println($value){
    echo $value;
    echo '<br />';
}

function comparison($left, $right){
    if ($left>$right)
        println("true");
    else 
        println("false");   
}
comparison(3, 4);

$more = (3>1);
println($more);

function strange($x){
    $more = (NULL);
    if ($x == $more){
        println ("Great");
    }
    else {
        println("Not so");
    }
}

strange(NULL);

println((3 < 2) ? 4 : 5);

$first = 1000;
$second = "1000";
println(($first == $second) ? "equal" : "they're not");
println(($first === $second) ? "they're not only equal, but have same type" : "they're not");

$number = random_int(1, 3);
switch($number){
    case 1:
        println("One");
        break;
    case 2:
        println("Two");
        break;
    case 3:
        println("Three");
        break;  
}

$var1 = 1;
$var2 = 0;  

$var1 = $var1 >= $var2 ? "True":"False";

println($var1);
print("Cool thing");

$a1 = 'KING';
$a2 = 'donkey';
$a3 = 'roOT';

echo $a1." ".$a2." ".$a3."<br />";
fix_names($a1, $a2, $a3);
echo $a1." ".$a2." ".$a3."<br />";

function fix_names(&$n1, &$n2, &$n3){
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));
}

println(phpversion());
?>