<?php
    include_once("conexao.php");
    if(!isset($_SESSION["acesso_registrado"])){
        $ip=$_SERVER['REMOTE_ADDR'];
        $navegador=$_SERVER['HTTP_USER_AGENT'];
        $sql="INSERT INTO acessos(ip,navegador,diaHora) VALUES('$ip','$navegador',NOW());";
        mysqli_query($conexao,$sql);
        $_SESSION["acesso_registrado"]=true;   
    }