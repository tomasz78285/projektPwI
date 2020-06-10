 <?php
    require_once("connect.php");
    $polaczenie = new PDO('mysql:host=' . $mysql_host . ';dbname=' . $database , $username, $password );
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Odzież męska</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/436a209103.js" crossorigin="anonymous"></script>
    </head>
	<body>
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
                    <li><a href="https://kadlubowski78285.000webhostapp.com/logowanie.php">Logowanie</a></li>
                    <li><a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php" class="koszyk"><i class="fas fa-shopping-basket"></i></a></li>
                </ul>
            </nav>
          <article class="a1">    
                <img src="o1.png" alt="Sport">
            </article>
         
        <article class="a2">
                <h3 class="tytuł">Bluzy</h3>
                <section>
                    <img src="logo.png" alt="logo">
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=40">
                         <img src="bluza1.jpg" alt="bluza">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=41">
                        <img src="bluza2.jpg" alt="bluza">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=42">
                        <img src="bluza3.jpg" alt="bluza">
                    </a>
                    <img src="logo.png" alt="logo">
                </section>
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=40;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                          
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=41;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                         
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=42;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">  
            </article>
        
             <article class="a2">
                <h3 class="tytuł">Spodnie</h3>
                <section>
                    <img src="logo.png" alt="logo">
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=43">
                        <img src="spodnie1.jpg" alt="spodnie">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=44">
                        <img src="spodnie2.jpg" alt="spodnie">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=45">
                        <img src="spodnie3.jpg" alt="spodnie">
                    </a>
                    <img src="logo.png" alt="logo">
                </section>
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=43;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                          
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=44;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                         
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=45;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">  
            </article>
        
            <article class="a2">
                <h3 class="tytuł">Buty</h3>
                <section>
                    <img src="logo.png" alt="logo">
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=46">
                        <img src="buty1.jpg" alt="buty">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=47">
                        <img src="butym2.jpg" alt="buty">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=48">
                        <img src="butym3.jpg" alt="buty">
                    </a>
                    <img src="logo.png" alt="logo">
                </section>
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=46;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                          
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=47;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                         
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=48;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">  
            </article>
        
            <article class="a2">
                <h3 class="tytuł">Czapki</h3>
                <section>
                    <img src="logo.png" alt="logo">
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=49">
                        <img src="czapka1.jpg" alt="czapka">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=50">
                        <img src="czapka2.jpg" alt="czapka">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=51">
                        <img src="czapka3.jpg" alt="czapka">
                    </a>
                    <img src="logo.png" alt="logo">
                </section>
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=49;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                          
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=50;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                         
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=51;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">  
            </article>
        
        <footer class="footer">2020 &copy; SportShop - Internetowy sklep sportowy - sportshop@mail.com</footer>
    </body>
</html>