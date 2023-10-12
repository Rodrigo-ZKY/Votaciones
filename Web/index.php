<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VOTACIONES</title>
</head>
<body>
    <header>
        <h2 id="centrado" align="center">VOTACION DE PRODUCTOS</h2>
        <h3 id="titulo" align="center">MAYOR CONSUMIDO</h3>
    </header>
    <section>
        <?php
        error_reporting(0);
        session_start();
        
        $total=$_SESSION['total'];
        $pcandidato1=($_SESSION['candidato1']*100)/$total;
        $pcandidato2=($_SESSION['candidato2']*100)/$total;
        $pcandidato3=($_SESSION['candidato3']*100)/$total;
        $pcandidato4=($_SESSION['candidato4']*100)/$total;
        ?>
        
        <form name="0" method="post" action="conteo.php" align="center">
           <table border="1" width="600" cellspacing="10" cellpadding="1" align="center">
               <tr>
                   <td id="centrado"><img src="LOGOS/candidato1.jpg" width="230" height="130"></td>
                   <td id="centrado"><img src="LOGOS/candidato2.jpg" width="230" height="130"></td>
               </tr>
               <tr>
                   <td id="centrado"> COCA COLA <br>
                   <input type="submit" value="Votar" name="btnBoton1"><br>
                   TOTAL VOTOS: <?php echo $_SESSION['candidato1']; ?> <br>
                   PORCENTAJE VOTOS: <?php echo round($pcandidato1,2); ?>%
                   </td>
                   
                   <td id="centrado"> PEPSI <br>
                   <input type="submit" value="Votar" name="btnBoton2"><br>
                   TOTAL VOTOS: <?php echo $_SESSION['candidato2']; ?> <br>
                   PORCENTAJE VOTOS: <?php echo round($pcandidato2,2); ?>%
                   </td>
               </tr>
               
               <tr>
                   <td id="centrado"><img src="LOGOS/candidato3.jpg" width="230" height="130"></td>
                   <td id="centrado"><img src="LOGOS/candidato4.jpg" width="230" height="130"></td>
               </tr>
               <tr>
                   <td id="centrado"> FANTA <br>
                   <input type="submit" value="Votar" name="btnBoton3"><br>
                   TOTAL VOTOS: <?php echo $_SESSION['candidato3']; ?> <br>
                   PORCENTAJE VOTOS: <?php echo round($pcandidato3,2); ?>%
                   </td>
                   
                   <td id="centrado"> SPRITE <br>
                   <input type="submit" value="Votar" name="btnBoton4"><br>
                   TOTAL VOTOS: <?php echo $_SESSION['candidato4']; ?> <br>
                   PORCENTAJE VOTOS: <?php echo round($pcandidato4,2); ?>%
                   </td>
               </tr>
           </table>
        </form>
        <?php
        $arreglo = array('COCA COLA'=>$_SESSION['candidato1'],
                         'PEPSI'=>$_SESSION['candidato2'],
                         'FANTA'=>$_SESSION['candidato3'],
                         'SPRITE'=>$_SESSION['candidato4']);
        arsort($arreglo);
        reset($arreglo);
        list($candidato,$puntaje)=each($arreglo);
        ?>
        
        <table border="1" width="600" cellspacing="10" cellpadding="1" align="center">
            <tr>
                <td id="ganador">TOTAL VOTANTES:
                    <?php echo $_SESSION['total']; ?>
                </td>
            </tr>
            <tr>
                <td id="ganador">GANADOR: <?php echo $candidato; ?>
                    (<?php echo $puntaje; ?> Votos)
                </td>
            </tr>
        </table>
    </section>
</body>
</html>