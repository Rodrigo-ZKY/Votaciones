<?php
    session_start();
    if($_POST['btnBoton1']) $_SESSION['candidato1']+=1;
    if($_POST['btnBoton2']) $_SESSION['candidato2']+=1;
    if($_POST['btnBoton3']) $_SESSION['candidato3']+=1;
    if($_POST['btnBoton4']) $_SESSION['candidato4']+=1;
    
    $_SESSION['total']=$_SESSION['candidato1']+$_SESSION['candidato2']+$_SESSION['candidato3']+$_SESSION['candidato4'];
    header('location:index.php');
?>