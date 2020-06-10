<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<title>Koszyk</title>
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
            
            $produktId = $_GET['produktId'];
            $nazwa = null;
            $cena = null;
            $sth = $polaczenie->prepare('
                SELECT nazwa, cena FROM produkty WHERE id_produktu=:produktId;
            ');
            

            $sth->bindParam(':produktId', $produktId, PDO::PARAM_INT);
            $sth->execute();
            
            while ($row = $sth->fetch()) {
           // echo $row['nazwa']."<br />\n";
            $nazwa=$row['nazwa'];
            $cena=$row['cena'];
            }
?>            

            
                <form action="zamow.php" method="POST">
                    
                    Produkt
                    <input type="text" name="nazwa" value=<?php echo $nazwa; ?>>

                    <br><br>

                    Cena
                    <input type="text" name="cena" value=<?php echo $cena; ?>>
                    
                   <br><br>
                    
                    Ilosc
                    <input type=" number" name="ilosc">
                    
                    <br><br>

                    Imie
                    <input type="text" name="imie">

                    <br><br>

                    Nazwisko
                    <input type="text" name="nazwisko">

                    <br><br>

                    Adres
                    <input type="text" name="adres">


                            <input type="submit" value="Zamów">

                </form>
        
         

            <footer class="footer">2020 &copy; SportShop - Internetowy sklep sportowy - sportshop@mail.com</footer>
        </main>
    </body>
</html>
