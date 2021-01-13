<?php 
    $server = "localhost";
    $username = "mrreyes";
    $password = "ORniMtXs";
    $dbname = "mrreyes_finalproject";

    try{
        $db = new PDO(
            "mysql:host=$server;$dbname",
            $username,
            $password
        );
        echo "It worked!";
    }
    catch( PDOException $e ){
        echo $e->getMessage();
        die();
    }
?>