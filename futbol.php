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
    <img src="obraz1.jpg" height="300" alt="boisko">
</div>

<div id="mecze">
    <?php
        $con = new mysqli("localhost","root","","egzamin");
        $query = "SELECT zespol1,zespol2,wynik,data_rozgrywki from rozgrywka WHERE zespol1 = 'EVG'";
        $wyn = $con->query($query);

        while($value = $wyn->fetch_array())
        {
            echo "<section class='info'>";
            echo "<h3>".$value["zespol1"]." - ".$value["zespol2"]."</h3>";
            echo "<h4>".$value["wynik"]."</h4>";
            echo "<p>w dniu: ".$value["data_rozgrywki"]."</p>";
            echo "</section>";
        }

        $con->close();
    ?>
</div>

<div id="glowny">
    <h2>Reprezentacja Polski</h2>
</div>

<div id="lewy">
    <p>Podaj pozycję zawodników (1-bramkarze,  2-obrońcy, 3-pomocnicy, 4-napastnicy):</p>
    <form action="futbol.php" method="POST">
        <input type="number" id="pozycja" name="pozycja">
        <input type="submit" value="Sprawdź">
    </form>
    <ul>
        <?php
            if($_POST["pozycja"] != null) {

                $pozycja = $_POST["pozycja"];


                $con = new mysqli("localhost", "root", "", "egzamin");
                $query = "SELECT imie,nazwisko FROM zawodnik WHERE pozycja_id = ";
                $wyn = $con->query($query . $pozycja);

                while ($value = $wyn->fetch_array()) {
                    echo "<li><p>" . $value["imie"] . " " . $value["nazwisko"] . "</p></li>";

                }

                $con->close();
            }

        ?>
    </ul>
</div>

<div id="prawy">
    <img src="zad1.png" alt="piłkarz">
    <p>Autor: Kacper Potaczała</p>
</div>
</body>
</html>
