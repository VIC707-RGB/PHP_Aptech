<?php 
    //variable
    $var = 10; //int
    $var2 = "10"; //string
    $var_float = 10.5; //float
    $var_bool = true;

    echo "This is an int: $var, and this is a string: $var2 </br>";

    //operators
    $var3 = $var + $var2; //auto-casting
    echo "var3: $var3 </br>";

    //functions
    function sum(int $a, int $b){
        return $a+$b;
    }
    // echo sum($var, $var2);

    //arrays
    $array = ["ABC", "DEF", "GIK"]; //declare an array
    foreach($array as $a){
        echo "$a </br>";
    }

    $nums = [12,43,75423,54,23,56];
    foreach($nums as $n){
        if($n > 120){
            echo "$n > 120 </br>";
        }else if ($n < 120 && $n > 50){
            echo "50 < $n < 120 </br>";
        }else{
            echo "$n < 120 </br>";
        }
    }
    for($n = 0; $n < sizeof($nums); $n++){
        if($nums[$n] > 120){
            echo "$nums[$n] > 120 </br>";
        }else if ($nums[$n] < 120 && $nums[$n] > 50){
            echo "50 < $nums[$n] < 120 </br>";
        }else{
            echo "$nums[$n] < 120 </br>";
        }
    }

    //string functions
    $string = "Hello World!";
    echo "String length: ".strlen($string)." </br>"; //string length
    echo "String word count: ".str_word_count($string)." </br>"; //string word count
    echo "String reversed: ".strrev($string)." </br>"; //string reversed

    if(strpos("i have an apple", "banana")){
        echo "Found";
    }else{
        echo "not found";
    }

    $sentence = "i have an apple";
    echo "String replace: ".str_replace("apple", "banana", $sentence)." </br>"; //string length
    // $sentence = str_replace...
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>