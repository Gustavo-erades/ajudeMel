<?php
    include_once("conexao.php");
    if(!isset($_SESSION["acesso_registrado"])){
        /* usando a supergblobal para pegar o ip e o navegador */
        $ip=$_SERVER['REMOTE_ADDR'];
        $navegador=$_SERVER['HTTP_USER_AGENT'];
        /* pegando data e hora com base no fusuhorário */
        $fusoHorario= new DateTimeZone('America/sao_paulo');
        $dataHora= new DateTime('now',$fusoHorario);
        $data= $dataHora->format('d/m/Y');
        $hora=$dataHora->format('h:i:s');
        /* consumindo a API ipinfo para armazenar dados de localização */
        $url="https://ipinfo.io/$ip?token=meuToken"; /*substitua por seu código token para uso da API*/
        $dadosJson=json_decode(file_get_contents("$url"));
        $cidade=$dadosJson->city;
        $regiao=$dadosJson->region;
        $pais=$dadosJson->country;
        $org=$dadosJson->org;   
        $sql="INSERT INTO acessos(ip,navegador,dia,hora,cidade,regiao,pais,org) VALUES('$ip','$navegador','$data','$hora','$cidade','$regiao','$pais','$org');";
        mysqli_query($conexao,$sql);
        $_SESSION["acesso_registrado"]=true;   
    }
