<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokoje</title>
    <link href="styl.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div id="baner1">
        <h2>WYNAJEM POKOI</h2>
    </div>

    <div id="menu1">
        <a href="index.html">POKOJE</a>
    </div>
    <div id="menu2">
        <a href="cennik.php">CENNIK</a>
    </div>
    <div id="menu3">
        <a href="kalkulator.html">KALKULATOR</a>
    </div>

    <div id="baner2"></div>
    
    <div id="lewy"></div>
    <div id="srodkowy">
        <h1>Cennik</h1>
        <table>
        <?php
        $host = 'localhost';
        $user = 'root';
        $password ='';
        $nazwabazy='wynajem';

        $polaczenie = new mysqli($host,$user,$password,$nazwabazy);
        if($polaczenie->connect_errno){
            die("Błąd połączenia".$polaczenie->connect_errno);
        }
        $zapytanie = "SELECT * FROM pokoje";
        $wynik = $polaczenie->query($zapytanie);
        while($wiersz=$wynik->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$wiersz['id']."</td>";
            echo "<td>".$wiersz['nazwa']."</td>"; 
            echo "<td>".$wiersz['cena']."</td>"; 
            echo "</tr>";
        }
        $polaczenie->close();
        ?>
        </table>
    </div>
    <div id="prawy"></div>

    <div id="stopka">
        <p>Stronę opracował: 03292004718</p>
    </div>
</body>
</html>