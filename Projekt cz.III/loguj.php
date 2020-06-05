<?php
 
    session_start();
 
    if ((!isset($_POST['login'])) || (!isset($_POST['password'])))
    {
        header('Location: logowanie.php');
        exit();
    }
 
    require_once "connect.php";
 try {
       $polaczenie = new PDO('mysql:host=' . $mysql_host . ';dbname=' . $database , $username, $password );
 
  $polaczenie->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $login = $_POST['login'];
        $haslo = $_POST['password'];
        $rezultat = $polaczenie->query("SELECT * FROM pracownicy WHERE login='$login' AND haslo='$haslo'");
          $wiersz = $rezultat->fetch(PDO::FETCH_ASSOC);


            if(!empty($wiersz))
            {
                $_SESSION['zalogowany'] = true;
                 
  
             
                $_SESSION['user'] = $wiersz['login'];

                 
                unset($_SESSION['blad']);
      
                header('Location: produkty.php');
                 
            } else {
                 
                $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
                header('Location: logowanie.php');
                 
            }
             
 
} catch(PDOException $e) {
 
  echo "Error: ". $e->getMessage();
}
  
          

     
?>

