<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'methods.php';

println("Best ever");
$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";

print_r($paper);
println('Here comes the Associated array');

$pens['ball'] = "Ball Point";
$pens['hilite'] = "Highlighters";
$pens['marker'] = "Markers";

print_r($pens);

$misc = array('tape' => 'Sticky Tape',
              'glue' => 'Adhesives',
              'clips' => 'Paperclips');

println('Another array');
print_r($misc);

$paper3 = array('copier' => 'Copier3', 
                'inkjet' => 'Inkjet3',
                'laser' => 'Laser3',
                'photo' => 'Photo3');

println(' ');
print_r($paper3);

println(' ');
println('Here comes ForEach for $paper3:');
$counter = 0;
foreach ($paper3 as $item) {
    println($counter++.': '.$item);
}

foreach ($pens as $item => $descrition) {
    println("$item: $descrition");
}
println('Here comes While+Each for $paper3:');

while(list($item, $description) = each($paper3)){
    println("$item: $description");
}

echo (is_array($paper3)) ? "This is an array" : "It's not";
println(" ");
println(is_array($paper));
println(is_array($counter));

println(count($paper3, 1));
println('Here comes ForEach for $paper3:');
foreach ($paper3 as $item) {
    println($counter++.': '.$item);
}
shuffle($paper3);
println('Here comes ShuffledForEach for $paper3:');
foreach ($paper3 as $item) {
    println($counter++.': '.$item);
}

$temp = explode(" ", "Best way to do smth is to do it by yourself");
print_r($temp);