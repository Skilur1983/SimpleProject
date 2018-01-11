<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function comparison($left, $right){
    if ($left>$right)
        println("true");
    else 
        println("false");   
}

function println($value){
    echo $value;
    echo '<br />';
}

function strange($variable){
    $more = (NULL);
    if ($variable == $more){
        println ("Great");
    }
    else {
        println("Not so");
    }
}

function concat($var){
    return $var.'Song';
}

function sum($var){
    $var += 5;
    return $var;
}