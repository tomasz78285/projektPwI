<?php
    require_once("connect.php");
    $polaczenie = new PDO('mysql:host=' . $mysql_host . ';dbname=' . $database , $username, $password );
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sportshop</title>
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
                    <li><a href="https://kadlubowski78285.000webhostapp.com/logowanie.php">Logowanie</a></li>
                    <li><a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php" class="koszyk"><i class="fas fa-shopping-basket"></i></a></li>
                </ul>
            </nav>
              
                <article class="a1">    
                    <img src="o1.png" alt="Sport" class=o1>
                </article>
        
                <article class="a2">
                    <h3 class="tytuł">Najchętniej wybierane</h3>
                    <section>
                        <img src="logo.png" alt="logo">
                        <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=40">
                            <img src="bluza1.jpg" alt="bluza" >
                        </a>
                        <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=19">
                        <img src="piłka1.jpg" alt="pilka">
                        </a>
                        <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=58">
                        <img src="butyd1.jpg" alt="buty">
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
                                SELECT cena FROM produkty WHERE id_produktu=19;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                         
                                                  <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=58;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                </article>
            
                 
                      
     

                <article class="a2">
                    <h3 class="tytuł">Promocje</h3>
                    <section>
                        <img src="logo.png" alt="logo">
                        <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=31">
                        <img src="kfd1.jpg" alt="suplement">
                        </a>
                        <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=28">
                        <img src="plecak1.jpg" alt="plecak">
                        </a>
                        <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=20">
                        <img src="rugby.jpg" alt="pilka">
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
                                SELECT cena FROM produkty WHERE id_produktu=28;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                         
                                                  <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=20;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                </article>

                <article class="a2">
                    <h3 class="tytuł">Nowości</h3>
                    <section>
                        <img src="logo.png" alt="logo">
                        <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=46">
                        <img src="butym1.jpg" alt="buty">
                        </a>
                        <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=10">
                        <img src="rekawiceMMA.jpg" alt="rekawice">
                        </a>
                        <a href="https://kadlubowski78285.000webhostapp.com/Koszyk.php?produktId=1">
                        <img src="łyżwy.jpg" alt=lyzwy>
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
                                SELECT cena FROM produkty WHERE id_produktu=10;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                         
                                                  <?php
                            $sql = $polaczenie->prepare('
                                SELECT cena FROM produkty WHERE id_produktu=1;
                            ');
                           $sql->execute();
                            $row = $sql->fetch();
                            ?>
                         <input type="submit" value="<?= $row['cena'] ?>">
                </article>

         

            <footer class="footer">2020 &copy; SportShop - Internetowy sklep sportowy - sportshop@mail.com</footer>
        </main>

    </body>

</html>