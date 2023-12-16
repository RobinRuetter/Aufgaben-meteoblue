<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci-Reihe</title>
</head>
<body>
<?php

function berechneGgt($a, $b) {
    // Solange der Rest nicht gleich 0 ist, setze $b auf $a und $a auf den Rest
    while ($b != 0) {
        $rest = $a % $b;
        $a = $b;
        $b = $rest;
    }
    // Wenn $b gleich 0 ist, dann ist $a der ggT
    return $a;
}

?>
</body>
</html>
