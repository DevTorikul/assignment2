<?php
// Function to calculate Fibonacci numbers
function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

$count = 0;
for ($i = 0; $count < 10; $i++) {
    $fib = fibonacci($i);
    
    if ($fib > 100) {
        break; // Break out of the loop if Fibonacci number exceeds 100
    }

    echo $fib . " ";
    $count++;
}
?>