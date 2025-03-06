<?php
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz\n";
        }
        elseif ($i % 3 == 0) {
            echo "Fizz\n";
        }
        elseif ($i % 5 == 0) {
            echo "Buzz\n";
        }
        else {
            echo $i . "\n";
        }
    }
    
$a = 0;
$b = 1;

echo "\n";
echo "Fibonacci sequence\n";

for ($i = 0; $i < 10; $i++) {
    $next = $a + $b;
    
    if ($a % 2 == 0) {
        echo $a . "\n";
    }
    
    $a = $b;
    $b = $next;
}
?>

    
