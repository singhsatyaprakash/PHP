<?php
    //String manipulations...
    $name="Satya Prakash Singh";
    echo "<br>";
    // use dot to concat strings...
    echo "Length of the string is:". strlen($name);
    echo "<br>";

    echo "Total number of words:". str_word_count($name);
    echo "<br>";

    echo "Reverse the string: ". strrev($name);
    echo "<br>";

    echo strpos($name,"Prakash");
    echo "<br>";

    echo str_replace("Prakash", "P.", $name);
    echo "<br>";

    echo str_repeat($name,4);
    echo "<br>";
    $temp="    hello world    ";
    echo "<pre>";
    echo rtrim($temp);
    echo "</pre>";

?>