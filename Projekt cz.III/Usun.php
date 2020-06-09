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
            
            $polaczenie = new PDO('mysql:host=' . $mysql_host . ';dbname=' . $database , $username, $password );
        

                 $sh = $polaczenie->prepare('DELETE FROM produkty WHERE nazwa = :id');
       
                $sh->bindValue(':id', $_GET['Produkt'], PDO::PARAM_STR);
                $sh->execute();
                echo "Usunięto produkt";
                
        ?>
            <footer class="footer">2020 &copy; SportShop - Internetowy sklep sportowy - sportshop@mail.com</footer>
        </main>
    </body>
</html>
