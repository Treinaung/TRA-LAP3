<?php
$num1 = 10;
$num2 = 7;
$symbols = "+";

if ($symbols == "+") {
    $ans = $num1 + $num2;
    echo "The answer for $num1 + $num2 is $ans.\n";
} 
else if ($symbols == "-") {
    $ans = $num1 - $num2;
    echo "The answer for $num1 - $num2 is $ans.\n";
}
else if ($symbols == "*") {
    $ans = $num1 * $num2;
    echo "The answer for $num1 * $num2 is $ans.\n";
}
else if ($symbols == "/") {
    $ans = $num1 / $num2;
    echo "The answer for $num1 / $num2 is $ans.\n";
}
else if ($symbols == "%") {
    $ans = $num1 % $num2;
    echo "The answer for $num1 % $num2 is $ans.\n";
} else {
    echo "Error!";
}