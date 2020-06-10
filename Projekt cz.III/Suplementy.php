 <?php
    require_once("connect.php");
    $polaczenie = new PDO('mysql:host=' . $mysql_host . ';dbname=' . $database , $username, $password );
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Suplementy</title>
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
                <h3 class="tytuł">Białko</h3>
                <section>
                    <img src="logo.png" alt="logo">
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=31">
                        <img src="kfd1.jpg" alt="bialko">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=32">
                        <img src="kfd2.jpg" alt="bialko">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=33">
                        <img src="kfd3.jpg" alt="bialko">
                    </a>
                    <img src="logo.png" alt="logo">
                </section>
                                <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=31;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                          
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=32;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                         
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=33;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">  
            </article>
        
             <article class="a2">
                <h3 class="tytuł">Batony</h3>
                <section>
                    <img src="logo.png" alt="logo">
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=34">
                        <img src="baton1.jpg" alt="baton">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=35">
                        <img src="baton2.jpg" alt="baton">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=36">
                        <img src="baton3.jpg" alt="baton">
                    </a>
                    <img src="logo.png" alt="logo">
                </section>
                                <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=34;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                          
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=35;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                         
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=36;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">  
            </article>
        
            <article class="a2">
                <h3 class="tytuł">Napoje</h3>
                <section>
                    <img src="logo.png" alt="logo">
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=37">
                        <img src="napoj1.jpg" alt="napoj">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=38">
                        <img src="napoj2.jpg" alt="napoj">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=39">
                        <img src="napoj3.jpg" alt="napoj">
                    </a>
                    <img src="logo.png" alt="logo">
                </section>
                                <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=37;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                          
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=38;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                         
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=39;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">  
            </article>
        
        <footer class="footer">2020 &copy; SportShop - Internetowy sklep sportowy - sportshop@mail.com</footer>
    </body>
</html>