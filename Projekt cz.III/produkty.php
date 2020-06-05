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
 
        
            <form action="dodajNowyProdukt.php" method="POST">    
                <article class="kk">
                        <section class="s1">
                            Nazwa
                            <br><br>
                            <input type="text" name="Nazwa"><br><br>
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
                            <br><br>
                            <section class="s2">
                               <input type="submit" value="Dodaj produkt">
                        </section> 
                        </section>
            </form>

        <form action="Usun.php" method="POST">             
            <form action="Usun.php" method="post">
                    <article class="kk">
                        <section class="s1">


                            <p>Wybierz produkt</p>
                            <select name="Produkt">
                                <option selected>Łyżwy hokejowe</option>
                                <option>Łyżwy figurowe</option>
                                <option>Łyżwy panczeny</option>
                                <option>Narty białe</option>
                                <option>Narty pomarańczowe</option>
                                <option>Narty czarne</option>
                                <option>Kask hokejowy</option>
                                <option>Kij hokejowy</option>
                                <option>Rękawice do hokeja</option>
                                <option>Rękawice mma</option>
                                <option>Rękawice bokserskie</option>
                                <option>Rękawice kickboxing</option>
                                <option>Ochraniacze na piszczele</option>
                                <option>Ochraniacze na głowę</option>
                                <option>Ochraniacze na zęby</option>
                                <option>Koszulka czarna</option>
                                <option>Koszulka biała</option>
                                <option>Koszulka biała2</option>
                                <option>Piłka nożna</option>
                                <option>Piłka rugby</option>
                                <option>Piłka koszykówka</option>
                                <option>Buty korki</option>
                                <option>Buty halowe</option>
                                <option>Buty do rugby</option>
                                <option>Okulary</option>
                                <option>Czepek</option>
                                <option>Kąpielówki</option></option>
                                <option>Plecak sportowy duży</option>
                                <option>Plecak turystyczny</option>
                                <option>Plecak sportowy mały</option>
                                <option>Dessert</option>
                                <option>KFD 80</option>
                                <option>KFD 90</option>
                                <option>CFM</option>
                                <option>Carb Control</option>
                                <option>Matrix</option>
                                <option>Master drink</option>
                                <option>Multipower</option>
                                <option>Optimum</option>
                                <option>Bluza1</option>
                                <option>Bluza2</option>
                                <option>Bluza3</option>
                                <option>Spodnie1</option>
                                <option>Spodnie2</option>
                                <option>Spodnie3</option>
                                <option>Buty1</option>
                                <option>Buty2</option>
                                <option>Buty3</option>
                                <option>Czapka1</option>
                                <option>Czapka2</option>
                                <option>Czapka3</option>
                                <option>Bluza4</option>
                                <option>Bluza5</option>
                                <option>Bluza6</option>
                                <option>Spodnie4</option>
                                <option>Spodnie5</option>
                                <option>Spodnie6</option>
                                <option>Buty4</option>
                                <option>Buty5</option>
                                <option>Buty6</option>
                                <option>Czapka4</option>
                                <option>Czapka5</option>
                                <option>Czapka6</option>
                            </select>
                            <br><br>
                        </section>
                
                        <section class="s2">
                               <input type="submit" value="Usuń produkt">
                        </section> 
                    </article>
       </form>
        
        
            <footer class="footer">2020 &copy; SportShop - Internetowy sklep sportowy - sportshop@mail.com</footer>
        </main>
    </body>
</html>