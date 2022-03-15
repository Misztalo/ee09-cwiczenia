<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Klub wędkowania</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
        <div id="baner"><h2>Wędkuj z nami!</h2></div>
    <div id="lewy"><img src="ryba2.jpg" alt="Szczupak"></div>
    <div id="prawy"><h3>Ryby spokojnego żeru(białe)</h3>
    <?php
        $connect = mysqli_connect("localhost" , "root" , "" , "1");
        $zapytanie = "SELECT id , nazwa , wystepowanie FROM ryby WHERE styl_zycia = 2;";
        $wynik = $connect->query($zapytanie);
        while ($wiersz = $wynik->fetch_assoc()) {
            $nazwa = $wiersz['nazwa'];
            $wystepowanie = $wiersz['wystepowanie'];
            echo "<li>$nazwa , wystepowanie: $wystepowanie </li>";
        }

?>
    <br>
    <br><br><br><br><br><br>
    <ol>
        <li><a href="https://wedkuje.pl/" target=_blank>Odwoiedź także</a></li>
        <li><a href="https://www.pzw.org.pl/" target=_blank>Polski Związek Wędkarski</a></li>
</ol>
    </div>
        <div id="stopka"><p>Stronę wykonał: 000000000</p></div>
</body>
</html>