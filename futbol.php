<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>Rozgrywki futbolowe</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<div id="baner">
    <h2>Światowe rozgrywki piłkarskie</h2>
    <img src="obraz1.jpg" alt="boisko">
</div>

<div id="mecze">
</div>

<div id="glowny">
    <h2>Reprezentacja Polski</h2>
</div>

<div id="lewy">
    <p>Podaj pozycję zawodników (1-bramkarze,  2-obrońcy, 3-pomocnicy, 4-napastnicy):</p>
    <form action="futbol.php" method="POST">
        <input type="number" id="pozycja">
        <input type="submit" value="Sprawdź">
    </form>
    <ul>

    </ul>
</div>

<div id="prawy">
    <img src="zad1.png" alt="piłkarz">
    <p>Autor: Kacper Potaczała</p>
</div>
</body>
</html>

<?php

?>