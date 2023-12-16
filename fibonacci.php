<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci-Reihe</title>
</head>
<body>
<?php
function fibonacci($n) {
    $fib_sequence = [1, 1];
    for ($i = 2; $i < $n; $i++) {
        $fib_sequence[] = $fib_sequence[$i - 1] + $fib_sequence[$i - 2];
    }
    return $fib_sequence;
}

?>
</body>
</html>
