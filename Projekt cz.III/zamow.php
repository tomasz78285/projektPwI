<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<title>Potwierdzenie</title>
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
            try
            {
            $polaczenie = new PDO('mysql:host=' . $mysql_host . ';dbname=' . $database , $username, $password );
            }      
        
        
            catch(PDOException $e)
            {
                echo $e->getMessage();
                die();
            }
            
       
            $sql = $polaczenie->prepare('
                INSERT INTO zamowienia (produkt, imie, nazwisko, adres) VALUES (:produkt, :imie, :nazwisko, :adres);
            ');
            
            $produkt = $_POST['NazwaProduktu'];
            $imie = $_POST['imie'];
            $nazwisko = $_POST['nazwisko'];
            $adres = $_POST['adres'];
            
            
            $sql->bindValue(':produkt', $produkt, PDO::PARAM_STR);
            $sql->bindValue(':imie', $imie, PDO::PARAM_STR);
            $sql->bindValue(':nazwisko', $nazwisko, PDO::PARAM_STR);
            $sql->bindValue(':adres', $adres, PDO::PARAM_STR);
            $sql->execute();
            
            echo "Złożono zamówienie";
           
        ?>
        

    
                
        
            <footer class="footer">2020 &copy; SportShop - Internetowy sklep sportowy - sportshop@mail.com</footer>
        </main>
    </body>
</html>
