<!DOCTYPE html>
<html lang="de">
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

// Berechne die ersten 100 Zahlen der Fibonacci-Reihe
$result = fibonacci(100);

// Gib die Ergebnisse aus
echo "<h2>Fibonacci-Reihe (die ersten 100 Zahlen)</h2>";
echo "<ul>";
foreach ($result as $i => $number) {
    echo "<li>Element " . ($i + 1) . ": $number</li>";
}
echo "</ul>";
?>
</body>
</html>
