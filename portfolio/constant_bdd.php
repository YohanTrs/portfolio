<?php
            $servername = 'localhost';
            $db_name = 'portfolio_yohan';
            $username = 'root';
            $password = '';
            
            //On établit la connexion
            $conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
   