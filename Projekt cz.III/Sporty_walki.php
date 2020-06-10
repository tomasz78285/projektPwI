 <?php
    require_once("connect.php");
    $polaczenie = new PDO('mysql:host=' . $mysql_host . ';dbname=' . $database , $username, $password );
?>
         
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sporty walki</title>
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
                <h3 class="tytuł">Rękawice</h3>
                <section>
                    <img src="logo.png" alt="logo">
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=10">
                        <img src="rekawiceMMA.jpg" alt="rekawice">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=11">
                        <img src="rekawice2.jpg" alt="rekawice">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=12">
                        <img src="rekawice3.jpg" alt="rekawice">
                    </a>
                    <img src="logo.png" alt="logo">
                </section>
                <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=10;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                          
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=11;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                         
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=12;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">  
            </article>
        
             <article class="a2">
                <h3 class="tytuł">Ochraniacze</h3>
                <section>
                    <img src="logo.png" alt="logo">
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=13">
                        <img src="ochraniacze1.jpg" alt="ochraniacze">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=14">
                        <img src="ochraniacze2.jpg" alt="ochraniacze">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=15">
                        <img src="ochraniacz3.jpg" alt="ochraniacze">
                    </a>
                    <img src="logo.png" alt="logo">
                </section>
                <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=13;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                          
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=14;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                         
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=15;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">  
            </article>
        
            <article class="a2">
                <h3 class="tytuł">Koszulki treningowe</h3>
                <section>
                    <img src="logo.png" alt="logo">
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=16">
                        <img src="mma1.jpg" alt="bluzka">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=17">
                        <img src="mma2.jpg" alt="bluzka">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=18">
                        <img src="mma3.jpg" alt="bluzka">
                    </a>
                    <img src="logo.png" alt="logo">
                </section>
                <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=16;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                          
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=17;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                         
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=18;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">  
            </article>
        
        <footer class="footer">2020 &copy; SportShop - Internetowy sklep sportowy - sportshop@mail.com</footer>
    </body>
</html>