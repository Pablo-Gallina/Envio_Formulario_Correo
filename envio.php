
<?php
    $toast = 1;
    $nombre = $_POST['nombre'];
    $mail = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $para = 'pablogallinag@gmail.com';
    $asunto = 'Mensaje de mi sitio web';

    $header = "Enviado desde Web";

    $emailCompleto = $mensaje."\nAtentamente.$nombre";

    mail($para,$asunto,$emailCompleto,$header);

    //mail("pablogallinag@gmail.com","Answer","Hope You Vote My Answer Up","From: pdavidggil@gmail.com");

    header('Location: index.php?var=1');

?>

