<?php 
        session_start();
        if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
        {
            header('Location: produkty.php');
            exit();
        }
        ?>
        
<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<title>Logowanie</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/436a209103.js" crossorigin="anonymous"></script>
    </head>
	<body>
       
        <main class="container">
            <header id="header">  
                <h1 class="logo">SportShop</h1>
            </header>

             <nav class="nav">
                <ul class="menu">
                    <li><a href="https://kadlubowski78285.000webhostapp.com/index.php">Strona główna</a></li>
                    <li><a href="#">Sprzęt sportowy</a>
                        <ul>
                            <li><a href="https://kadlubowski78285.000webhostapp.com/Sporty_letnie.php">Sporty letnie</a></li>
                            <li><a href="https://kadlubowski78285.000webhostapp.com/Sporty_zimowe.php">Sporty zimowe</a></li>
                            <li><a href="https://kadlubowski78285.000webhostapp.com/Sporty_walki.php">Sporty walki</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Odzież sportowa</a>
                        <ul>
                            <li><a href="https://kadlubowski78285.000webhostapp.com/Odziez_damska.php">Damska</a></li>
                            <li><a href="https://kadlubowski78285.000webhostapp.com/Odziez_meska.php">Męska</a></li>
                        </ul>
                    </li>
                    <li><a href="https://kadlubowski78285.000webhostapp.com/Suplementy.php">Suplementy</a></li>
                    <li><a href="http://localhost/Sklep/logowanie.php">Logowanie</a></li>
                    <li><a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php" class="koszyk"><i class="fas fa-shopping-basket"></i></a></li>
                </ul>
            </nav>

            <article class="logowanie">
                <form action="loguj.php" method="post">

                    Login
                    <input type="text" name="login">

                    <br><br>

                    Hasło
                    <input type="password" name="password">

                    <br><br>

                    <input type="submit" value="Zaloguj się">
                    
                </form>
                    <br>
                    <a href=https://kadlubowski78285.000webhostapp.com/rejestracja.php>Rejestracja</a>

                    <br><br>
            </article>
            
            <?php
                if(isset($_SESSION['blad']))  echo $_SESSION['blad']; 
            ?>
            <footer class="footer">2020 &copy; SportShop - Internetowy sklep sportowy - sportshop@mail.com</footer>
        </main>
   



    </body>
</html>
