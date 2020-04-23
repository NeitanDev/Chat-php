<?php
    $host = "localhost";
    $user = "root";
    $password = "root";
    $bd = "bd_chat";

    $mysqli = new mysqli($host,$user,$password,$bd);
    if($mysqli->connect_errno){
        echo "Falha na conexão: (".$mysqli->connec_errno.")" .$mysqli->connec_errno;
    }

?>