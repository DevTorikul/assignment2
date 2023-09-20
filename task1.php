<?php
function printEvenNumbers($start, $end, $step) {
    if ($start % 2 != 0) {
        // Ensure that the start is an even number
        $start++;
    }

    echo "Using for loop: ";
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }

    echo "<br>";

    echo "Using while loop: ";
    $i = $start;
    while ($i <= $end) {
        echo $i . " ";
        $i += $step;
    }

    echo "<br>";

    echo "Using do-while loop: ";
    $i = $start;
    do {
        echo $i . " ";
        $i += $step;
    } while ($i <= $end);
}

// Call the function with start=1, end=20, and step=2
printEvenNumbers(1, 20, 2);
?>