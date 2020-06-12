<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<title>Edytuj</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/436a209103.js" crossorigin="anonymous"></script>
    </head>
	<body>

          <?php
            require_once("connect.php");
            
            $polaczenie = new PDO('mysql:host=' . $mysql_host . ';dbname=' . $database , $username, $password );
        
            $produkt = $_POST['Produkt'];
            $nazwa = $_POST['Nazwa'];
            $plik = $_POST['plik'];
            $cena = $_POST['Cena'];
            $ilosc = $_POST['Ilosc'];
            $sekcja = $_POST['Sekcja'];
       
       
                $data = [
    'produkt' => $produkt,
    'nazwa' => $nazwa,
    'plik' => $plik,
    'cena' => $cena,
    'ilosc_w_magazynie' => $ilosc,
    'sekcja' => $sekcja,
];
$sql = "UPDATE produkty SET nazwa=:nazwa, nazwa_pliku=:plik, cena=:cena, ilosc_w_magazynie=:ilosc_w_magazynie, sekcja=:sekcja WHERE nazwa=:produkt";
$stmt= $polaczenie->prepare($sql);
$stmt->execute($data);
        
                echo "Gotowe";
        ?>
            
            <footer class="footer">2020 &copy; SportShop - Internetowy sklep sportowy - sportshop@mail.com</footer>
    </body>
</html>