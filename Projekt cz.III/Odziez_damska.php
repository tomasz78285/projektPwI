 <?php
    require_once("connect.php");
    $polaczenie = new PDO('mysql:host=' . $mysql_host . ';dbname=' . $database , $username, $password );
?>

<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<title>Odzież damska</title>
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
        
          <div class="a1">
                <img src="o1.png" alt="sport">
            </div>
         
        <article class="a2">
                <h3 class="tytuł">Bluzy</h3>
                <section>
                    <h6> 
                    <img src="logo.png" alt="logo">
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=52">
                        <img src="bluzad1.jpg" alt="bluza">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=53">
                        <img src="bluzad2.jpg" alt="bluza">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=54">
                        <img src="bluzad3.jpg" alt="bluza">
                    </a>
                    <img src="logo.png" alt="logo">
                    </h6>
                </section>
                <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=52;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                          
                         <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=53;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                         
                                                  <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=54;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
            </article>
        
             <article class="a2">
                <h3 class="tytuł">Spodnie</h3>
                <section>
                    <h6>
                    <img src="logo.png" alt="logo">
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=55">
                        <img src="spodnied1.jpg" alt="spodnie">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=56">
                        <img src="spodnied2.jpg" alt="spodnie">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=57">
                        <img src="spodnied3.jpg" alt="spodnie">
                    </a>
                    <img src="logo.png" alt="logo">
                    </h6>
                </section>
                <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=55;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                          
                         <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=56;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                         
                                                  <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=57;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
            </article>
        
            <article class="a2">
                <h3 class="tytuł">Buty</h3>
                <section><h6>
                    <img src="logo.png" alt="logo">
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=58">
                        <img src="butyd1.jpg" alt="buty">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=59">
                        <img src="butyd2.jpg" alt="buty">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=60">
                        <img src="butyd3.jpg" alt="buty">
                    </a>
                    <img src="logo.png" alt="logo">
                    </h6>
                </section>
                <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=58;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                          
                         <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=59;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                         
                                                  <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=60;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
            </article>
        
            <article class="a2">
                <h3 class="tytuł">Czapki</h3>
                <section>
                    <h6>
                    <img src="logo.png" alt="logo">
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=61">
                        <img src="czapkad1.jpg" alt="czapka">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=62">
                        <img src="czapkad2.jpg" alt="czapka">
                    </a>
                    <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=63">
                        <img src="czapkad3.jpg" alt="czapka">
                    </a>
                    <img src="logo.png" alt="logo">
                    </h6>
                </section>
                <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=61;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                          
                         <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=62;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                         
                                                  <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=63;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
            </article>
        
        <footer class="footer">2020 &copy; SportShop - Internetowy sklep sportowy - sportshop@mail.com</footer>
    </body>
</html>