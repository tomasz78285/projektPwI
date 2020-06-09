<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<title>Rejestracja</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/436a209103.js" crossorigin="anonymous"></script>
    </head>
	<body>
       
        <main class="container">
            <header id="header">  
                <h1 class="logo">SportShop</h1>
            </header>

       
                <form action="rejestruj.php" method="post">

                    Login
                    <input type="text" name="login">

                    <br><br>

                    Hasło
                    <input type="password" name="haslo">

                    <br><br>

                    Imie
                    <input type="text" name="imie">

                    <br><br>
                    
                    Nazwisko
                    <input type="text" name="nazwisko">

                    <br><br>

                    Adres e-mail
                    <input type="text" name="mail">

                    <br><br>
                    <input type="submit" value="Rejestruj">

                </form>
            </article>
            
           
            <footer class="footer">2020 &copy; SportShop - Internetowy sklep sportowy - sportshop@mail.com</footer>
        </main>
   
    </body>
</html>