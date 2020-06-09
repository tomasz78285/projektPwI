<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<title>Koszyk</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/436a209103.js" crossorigin="anonymous"></script>
    </head>
	<body>

          <?php
            require_once("connect.php");
            try
            {
            $polaczenie = new PDO('mysql:host=' . $mysql_host . ';dbname=' . $database , $username, $password );
            }      
        
        
            catch(PDOException $e)
            {
                echo $e->getMessage();
                die();
            }
    
            $sh = $polaczenie->prepare('
                INSERT INTO produkty (nazwa, cena, ilosc_w_magazynie, sekcja, nazwa_pliku) VALUES (:nazwa, :cena, :ilosc_w_magazynie, :sekcja, :plik)
            ');
           
            $nazwa = $_POST['Nazwa'];
            $cena = $_POST['Cena'];
            $ilosc = $_POST['Ilosc'];
            $sekcja = $_POST['Sekcja'];
            $plik = $_POST['plik'];
 
     
            $sh->bindValue(':nazwa', $nazwa, PDO::PARAM_STR);
            $sh->bindValue(':cena',$cena, PDO::PARAM_STR);
            $sh->bindValue(':ilosc_w_magazynie', $ilosc, PDO::PARAM_INT);
            $sh->bindValue(':sekcja', $sekcja, PDO::PARAM_STR);
            $sh->bindValue(':plik', $plik, PDO::PARAM_STR);
            $sh->execute();
            echo "Dodano produkt";
               
        ?>
            
            <footer class="footer">2020 &copy; SportShop - Internetowy sklep sportowy - sportshop@mail.com</footer>
    </body>
</html>
