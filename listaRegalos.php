<?php
namespace clases_pdo;

require_once __DIR__ . '/php/Api/ApiInvitados.php';

$objInvitados = new ApiInvitados();

$result = $objInvitados->getInvitadoByCodigoUnico($_GET['invitado']);

if (count($result) == 0) {
    echo "<script languaje='javascript' type='text/javascript'>
    window.onload = function () {
      Swal.fire({
                                title: 'Oops!',
                                text: 'Dile a mis papitos que no pudiste ingresar',
                                icon: 'warning',
                                confirmButtonText: 'Ok'
                            });
    }
 
 </script>";

} else {
    $nombre = $result[0]['nombres'] . ' ' . $result[0]['apellidos'];
    session_start();
    $_SESSION["codigoInvitado"] = $result[0]['id'];
}


?>

<html>
<head>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/listaRegalos.css">
</head>
<body>
<script type="text/javascript" src="js/jquery/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="js/lodash/lodash.min.js"></script>
<script src="js/sweetalert2/sweetalert2.js"></script>
<div id="listaRegalos">
    <div class='page'>
        <div class="img"></div>
        <div class="img2"></div>
        <div class="img3"></div>
        <div class="img4"></div>

        <?php

        if (count($result) != 0) {
            echo "

<div class='nombreInvitado'>Bienvenido " . $nombre . "</div>
    <div class='container' id='container'></div>
    <div class='row text-center m-5'>
        <div class='col-12'>
            <button type='button' class='btn btn-primary' id='btnGuardar'>Guardar</button>
        </div>
    </div>

    
    <script type='text/javascript' src='js/listaRegalos.js'></script>

    ";
        }
        ?>

    </div>
</div>


</body>
</html>