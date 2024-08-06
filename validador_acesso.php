<?php

session_start();

if(isset($_SESSION['usuario']) && is_object($_SESSION['usuario'])){
    $user = $_SESSION['usuario'];
    $_SESSION['tipo'] = $user->tipo;
}else{
    $_SESSION['tipo'] = null;
}

?>
