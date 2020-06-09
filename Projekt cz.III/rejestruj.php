<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<title>Rejestruj</title>
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
                INSERT INTO pracownicy (login, haslo, imie, nazwisko, email) VALUES (:login, :haslo, :imie, :nazwisko, :mail)
            ');
           
            $login = $_POST['login'];
            $haslo = $_POST['haslo'];
            $imie = $_POST['imie'];
            $nazwisko = $_POST['nazwisko'];
            $mail = $_POST['mail'];
 
     
            $sh->bindValue(':login', $login, PDO::PARAM_STR);
            $sh->bindValue(':haslo',$haslo, PDO::PARAM_STR);
            $sh->bindValue(':imie', $imie, PDO::PARAM_STR);
            $sh->bindValue(':nazwisko', $nazwisko, PDO::PARAM_STR);
            $sh->bindValue(':mail', $mail, PDO::PARAM_STR);
            $sh->execute();
            echo "Gotowe";
               
        ?>
        <a href="https://kadlubowski78285.000webhostapp.com/logowanie.php">Logowanie</a>
            
            <footer class="footer">2020 &copy; SportShop - Internetowy sklep sportowy - sportshop@mail.com</footer>
    </body>
</html>