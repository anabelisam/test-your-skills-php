<?php

/* El siguiente script crea un archivo .txt cada vez que se ejecuta la función de sendEmail 
simulando que un email se ha enviado cuando se crea un nuevo archivo.

Aquí te dejo una lista de misiones, tú decides cuál tomar.

Misión 1: Realiza los cambios necesarios para que se pueda enviar el mismo email a más de 10 direcciones de correo diferente.

Misión 2: Optimiza el código.

Misión 3: Agrega una función que permita ver en pantalla el contenido de cada email.
*/

function sendEmail($receipt, $subject, $message) {
    date_default_timezone_set('America/Bogota');
    $docName = $subject.'-'.$receipt.'-'.date('dmyhisA').'.txt';
    $document = fopen('creations/'.$docName, "w+b");
    fwrite($document, $message.PHP_EOL);
    fclose($document);
}

function listaEmails($ruta){
    $thefolder = $ruta;
    if ($handler = opendir($thefolder)) {
        echo "<ul>";
        while (false !== ($file = readdir($handler))) {
                echo "<li>$file</li>";
        }
        echo "</ul>";
        closedir($handler);
    }
}
sendEmail('email@email.com', 'Un asunto importante', 'Este email es para decirte que te quiero');
listaEmails('creations/');


 


?>