<?php
function printFibonacci($count) {
    $fibonacci = [];
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    echo "Fibonacci Series (First $count numbers): ";

    if ($count >= 1) {
        echo $fibonacci[0];
    }

    if ($count >= 2) {
        echo ", " . $fibonacci[1];
    }

    for ($i = 2; $i < $count; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        echo ", " . $fibonacci[$i];
    }
}

// Call the function to print the first 15 Fibonacci numbers
printFibonacci(15);
?>