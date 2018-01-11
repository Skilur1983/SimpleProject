<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'methods.php';

printf("Try it %b", 3);
printf("<font color = '#%X%X%X'>Hello</font>", 65, 127, 245);
$hexstring = sprintf("%X%X%X", 65, 127, 245);

println($hexstring);
$out = sprintf("Result: $%.2f", 123.42/12);
println($out);
println(time()+7*24*60*60);
println(mktime(0, 0, 0, 1, 1, 2000));
println(date("l F jS, Y - g:ia", time()));

if(checkdate(02, 28, 2017)) 
    println ("Correct Date");
else
    println ("Wrong Date");

if(file_exists("arrays.php")){
    println ("It's array");
}
else{
    println ("Try again!!!");
}

$createFile = fopen("beMyNewFile.txt", "w") or die("Fuck this file");
$fileText = <<<_END
        Line 1
        Line 2
        Line 3
_END;
fwrite($createFile, $fileText) or die("You've failed to create file");
fclose($createFile);
println("You've succeded");

$updateFile = fopen("beMyNewFile.txt", 'a') or die("You suck");
$newText = "Forever again";
fwrite($updateFile, $newText) or die("You've failed to update file");
fclose($updateFile);
println("You've succeded to update file");

$getStringFile = fopen("beMyNewFile.txt", 'r') or die("No success without reading!");
$line = fgets($getStringFile);
fclose("beMyNewFile.txt");
println($line);

$readFile = fopen("beMyNewFile.txt", 'r') or die("You've told me you can read");
$text = fread($readFile, filesize("beMyNewFile.txt"));
fclose("beMyNewFile.txt");
println($text);

$fileName = "beMyNewFile.txt";

println("Now it's time to update our files");
$fileUpdate = (fopen($fileName, 'r+')) or die("Failed to update file");
$updateText = fgets($fileUpdate);
fseek($fileUpdate, 0, SEEK_END);
fwrite($fileUpdate, $updateText) or die("Failed to rewrtie the file");
fclose($fileName);

println(file_get_contents($fileName));
