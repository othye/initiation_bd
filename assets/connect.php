<?php 
    $serverName = 'localhost';
    $userName = 'root';
    $password = '';
    $dbname = 'project1';

   /* try {
        // connect
        $conn = new PDO('mysql:host=promo-19.codeur.online:3306;dbname=otmanee_db;port=3306','otmanee','wulzxcamF');
        
        //gestion d'erreur  
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Connexion etablie";
    }
    catch(PDOException $e){
        echo "erreur de connexion ".$e->getMessage();
    } */

    try {
        // connect
        $connect = new PDO("mysql:host=".$serverName.";dbname=".$dbname ,$userName , $password);
        
        //gestion d'erreur  
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //echo "Connexion etablie";
    }
    catch(PDOException $e){
        echo "erreur de connexion ".$e->getMessage();
    }
?>
