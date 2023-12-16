<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci-Reihe</title>
</head>
<body>
    <h2>Größter gemeinsamer Teiler berechnen</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Zahl 1: <input type="text" name="zahl1"><br>
        Zahl 2: <input type="text" name="zahl2"><br>
        <input type="submit" value="Berechnen">
    </form>
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
// Überprüfen, ob das Formular gesendet wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Benutzereingabe aus dem Formular
    $zahl1 = isset($_POST["zahl1"]) ? intval($_POST["zahl1"]) : 0;
    $zahl2 = isset($_POST["zahl2"]) ? intval($_POST["zahl2"]) : 0;

    // ggT berechnen
    $ggT = berechneGgt($zahl1, $zahl2);

    // Ergebnis ausgeben
    echo "Der größte gemeinsame Teiler von $zahl1 und $zahl2 ist: $ggT";
}
?>
</body>
</html>
