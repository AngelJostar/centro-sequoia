<?php 


    $nombreB = $_POST["nombreB"];
    $nombrePaciente = $_POST["nombrePaciente"]; 
    $correoB = $_POST["correoB"];
    $telefonoB = $_POST["telefonoB"];
    $asuntoB = $_POST["asuntoB"];
    $centroB = $_POST["centroB"];
    $mensajeB = $_POST["mensajeB"]; 
    
        $destinoB = "martha.silis@gmail.com, franco.guerrero.herzig@gmail.com, yaz.mendoza.guerra@gmail.com, aaguirre_sorem@yahoo.com.mx";   
        $contenidoB = "Nombre: " . $nombreB . "\nNombre del Paciente: " . $nombrePaciente . "\nCorreo: " . $correoB . "\nTeléfono: " . $telefonoB . "\nAsunto: " . $centroB . "\nMensaje: " . $mensajeB;
        mail($destinoB, "Contacto: ", $contenidoB);
        header("Location: https://centrosequoia.com.mx/gracias-por-contactarnos/");

?>