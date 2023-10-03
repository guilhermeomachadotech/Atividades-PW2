<?php
    $login=$_POST ['log'];
    $senha=$_POST ['senha'];
    if ($login==$senha){

        header ('Location:galeria.html');
    }else {
        header ('Location:paginaLogin1.html');
    }
?>