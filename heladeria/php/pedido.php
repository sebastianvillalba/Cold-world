<?php 
    $nombre = $_POST['nombre'];
    $whatsapp = $_POST['whatsapp'];

    $pedido1cantidad = $_POST['pedido1-cantidad'];
    $pedido1sabor1 = $_POST['pedido1-sabor1'];
    $pedido1sabor2 = $_POST['pedido1-sabor2'];
    $pedido1sabor3 = $_POST['pedido1-sabor3'];

    $pedido2cantidad = $_POST['pedido2-cantidad'];
    $pedido2sabor1 = $_POST['pedido2-sabor1'];
    $pedido2sabor2 = $_POST['pedido2-sabor2'];
    $pedido2sabor3 = $_POST['pedido2-sabor3'];

    $pedido3cantidad = $_POST['pedido3-cantidad'];
    $pedido3sabor1 = $_POST['pedido3-sabor1'];
    $pedido3sabor2 = $_POST['pedido3-sabor2'];
    $pedido3sabor3 = $_POST['pedido3-sabor3'];

    $direccion = $_POST['direccion'];

    $destino = "correodetuempresa@gmail.com";

    $contenidodelmail = 
        "Nombre:" . $nombre . "<br> 
        WhatsApp:" . $whatsapp . "<br>
        Dirección:" . $direccion . "
        <br><br>
        PEDIDO:<br>
        Peso:" . $pedido1cantidad . "<br>
        Sabor 1:" . $pedido1sabor1 . "<br>
        Sabor 2:" . $pedido1sabor2 . "<br>
        Sabor 3:" . $pedido1sabor3 . "
        <br><br>
        Peso:" . $pedido2cantidad . "<br>
        Sabor 1:" . $pedido2sabor1 . "<br>
        Sabor 2:" . $pedido2sabor2 . "<br>
        Sabor 3:" . $pedido2sabor3 . "
        <br><br>
        Peso:" . $pedido3cantidad . "<br>
        Sabor 1:" . $pedido3sabor1 . "<br>
        Sabor 2:" . $pedido3sabor2 . "<br>
        Sabor 3:" . $pedido3sabor3 . "<br>";

    mail($destino, "PEDIDO HELADERIA", $contenidodelmail);

    header("Location:../tupedido/tupedido.html");

?>