
<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<title>Spis</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/436a209103.js" crossorigin="anonymous"></script>
    </head>
	<body>
        <main class="container">
            <header id="header">  
                <h1 class="logo">SportShop</h1>
            </header>

                
                <?php
        require_once("connect.php");
            
            $polaczenie = new PDO('mysql:host=' . $mysql_host . ';dbname=' . $database , $username, $password );
           
            $sql = $polaczenie->prepare('
                SELECT * FROM produkty;
            ');
    $sql->execute();

echo "ID | PRODUKT | CENA | ILOSC | SEKCJA <br>";
 while ($row = $sql->fetch()) { ?>

     <div>
         <p><?= $row['id_produktu'] ?><?= $row['nazwa'] ?><?= $row['cena'] ?><?= $row['ilosc_w_magazynie'] ?><?= $row['sekcja'] ?></p>
         <img src="https://kadlubowski78285.000webhostapp.com/<?= $row['nazwa_pliku'] ?>">
     </div>
          
           <?php }
 
?>

            <footer class="footer">2020 &copy; SportShop - Internetowy sklep sportowy - sportshop@mail.com</footer>
        </main>
    </body>
</html>