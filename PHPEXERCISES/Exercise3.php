<?php

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz\n";
    } elseif ($i % 3 == 0) {
        echo "Fizz\n";
    } elseif ($i % 5 == 0) {
        echo "Buzz\n";
    } else {
        echo $i . "\n";
    }
}

$fib1 = 0;
$fib2 = 1;
$counter = 0;

while ($counter < 10) {
    $fibNext = $fib1 + $fib2;
    
    if ($fibNext % 2 == 0) {
        echo $fibNext . "\n";
        $counter++;
    }
    
    $fib1 = $fib2;
    $fib2 = $fibNext;
}

?>
