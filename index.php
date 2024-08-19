<?php
include('cabecalho.php');
echo "olá mundo!<br>";
if(isset($_SESSION['sessaoConectado']))
{
    echo "<br>Voce esta logado como:".$_SESSION['sessaoLogin'];
    if($_SESSION['sessaoAdmin'] == true)
        echo "<Br>bem vindo, admin ";
    else
        echo "<Br>voce nao é admin";
}
else
    echo "voce nao esta logado";
?>