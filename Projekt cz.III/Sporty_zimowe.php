 <?php
    require_once("connect.php");
    $polaczenie = new PDO('mysql:host=' . $mysql_host . ';dbname=' . $database , $username, $password );
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sporty zimowe</title>
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
                <h3 class="tytuł">Łyżwy</h3>
                <section>
                    <img src="logo.png" alt="logo">
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=1">
                        <img src="%C5%82y%C5%BCwy.jpg" alt="lyzwy">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=2">
                        <img src="lyzwy2.jpg" alt="lyzwy">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=3">
                        <img src="lyzwy3.jpg" alt="lyzwy">
                    </a>
                    <img src="logo.png" alt="logo">
                </section>
                                <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=1;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                          
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=2;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                         
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=3;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">  
            </article>
        
             <article class="a2">
                <h3 class="tytuł">Narty</h3>
                <section>
                    <img src="logo.png" alt="logo">
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=4">
                        <img src="narty1.jpg" alt="narty">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=5">
                        <img src="narty2.jpg" alt="narty">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=6">
                        <img src="narty3.jpg" alt="narty">
                    </a>
                    <img src="logo.png" alt="logo">
                </section>
                                <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=4;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                          
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=5;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                         
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=6;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">  
            </article>
        
            <article class="a2">
                <h3 class="tytuł">Hokej</h3>
                <section>
                    <img src="logo.png" alt="logo">
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=7">
                        <img src="kask.jpg" alt="kask">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=8">
                        <img src="kij.jpg" alt="kij">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=9">
                        <img src="r%C4%99kawice.jpg" alt="rekawice">
                    </a>
                    <img src="logo.png" alt="logo">
                </section>
                                <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=7;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                          
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=8;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                         
                        <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=9;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">  
            </article>
        
        <footer class="footer">2020 &copy; SportShop - Internetowy sklep sportowy - sportshop@mail.com</footer>
    </body>
</html>