<?php
    session_start();
     
    if (!isset($_SESSION['zalogowany']))
    {
        header('Location: logowanie.php');
        exit();
    }
?>

<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<title>Produkty</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/436a209103.js" crossorigin="anonymous"></script>
    </head>
	<body>
        <main class="container">
            <header id="header">  
                <h1 class="logo">SportShop</h1>
            </header>
        
        <?php
    echo "<p>Witaj ".$_SESSION['user'].'! [ <a href="wyloguj.php">Wyloguj się!</a> ]</p>';
    ?>
 
                     <form action="produkt.php" method="POST">
                       <input type="submit" value="Spis produktów">
                       </form>
           
            <form action="dodajNowyProdukt.php" method="POST">    
                <article class="kk">
                        <section class="s1">
                            Nazwa
                            <br><br>
                            <input type="text" name="Nazwa"><br><br>
                            Nazwa pliku
                            <br><br>
                            <input type="text" name="plik"><br><br>
                            Ilość
                            <br><br>
                            <input type="number" name="Ilosc"><br><br>
                            Cena
                            <br><br>
                            <input type="text" name="Cena"><br><br>
                    

                            <p>Sekcja</p>
                             <select name="Sekcja">
                                <option selected>Łyżwy</option>
                                <option>Narty</option>
                                <option>Hokej</option>
                                <option>Rękawice</option>
                                <option>Ochraniacze</option>
                                <option>Koszulki</option>
                                <option>Koszulki treningowe</option>
                                <option>Piłki</option>
                                <option>Buty(Sporty letnie)</option>
                                <option>Pływanie</option>
                                <option>Plecaki</option>
                                <option>Białko</option>
                                <option>Batony</option>
                                <option>Napoje</option>
                                <option>Bluzy</option>
                                <option>Spodnie</option>
                                <option>Buty</option>
                                <option>Czapki</option>
                            </select>
                            <br><br>
                            <section class="s2">
                               <input type="submit" value="Dodaj produkt">
                        </section> 
                        </section>
            </form>

        <form action="Usun.php" method="GET">             
                    <article class="kk">
                        <section class="s1">


                            <p>Wybierz produkt</p>
                            <select name="Produkt">
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
                            
                            $sh = $polaczenie -> prepare('SELECT nazwa FROM produkty');
                            $sh -> execute();
                            $rows = $sh->fetchAll();
                            foreach($rows as $row){
                                echo '<option value="'.$row['id_produktu'].'">'.$row['nazwa'].'</option>';
                            }
            
                     ?>  
                            </select>
                            <br><br>
                        </section>
                
               
                        <section class="s2">
                               <input type="submit" value="Usun produkt">
                        </section> 
                    </article>
       </form>
        
        <form action="Edytuj.php" method="POST">             
                    <article class="kk">
                        <section class="s1">
                            <p>Wybierz produkt</p>
                            <select name="Produkt">
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
                            
                            $sh = $polaczenie -> prepare('SELECT nazwa FROM produkty');
                            $sh -> execute();
                            $rows = $sh->fetchAll();
                            foreach($rows as $row){
                                echo '<option value="'.$row['id_produktu'].'">'.$row['nazwa'].'</option>';
                            }
            
                     ?>  
                            </select>
                            <br><br>
                      
                             Nazwa
                            <br><br>
                            <input type="text" name="Nazwa"><br><br>
                            Nazwa pliku
                            <br><br>
                            <input type="text" name="plik"><br><br>
                            Ilość
                            <br><br>
                            <input type="number" name="Ilosc"><br><br>
                            Cena
                            <br><br>
                            <input type="text" name="Cena"><br><br>
                    

                            <p>Sekcja</p>
                            <select name="Sekcja" type="text">
                                <option selected>Łyżwy</option>
                                <option>Narty</option>
                                <option>Hokej</option>
                                <option>Rękawice</option>
                                <option>Ochraniacze</option>
                                <option>Koszulki</option>
                                <option>Koszulki treningowe</option>
                                <option>Piłki</option>
                                <option>Buty(Sporty letnie)</option>
                                <option>Pływanie</option>
                                <option>Plecaki</option>
                                <option>Białko</option>
                                <option>Batony</option>
                                <option>Napoje</option>
                                <option>Bluzy</option>
                                <option>Spodnie</option>
                                <option>Buty</option>
                                <option>Czapki</option>
                            </select>
 
                         </section>
                
                        <section class="s2">
                               <input type="submit" value="Edytuj produkt">
                        </section> 
                    </article>
       </form>
        
        
            <footer class="footer">2020 &copy; SportShop - Internetowy sklep sportowy - sportshop@mail.com</footer>
        </main>
    </body>
</html>
