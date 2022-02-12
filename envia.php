<?php
$remitente = $_POST['correo'];
$destinatario = 'info@presenciadigital.org'; 
$asunto = 'consulta'; 
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "nombre: " . $_POST["nombre"] . "\r\n"; 
    $cuerpo .= "correo: " . $_POST["correo"] . "\r\n";
	$cuerpo .= "consulta: " . $_POST["consulta"] . "\r\n";
	

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']." ".$_POST['correo']."\" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    include 'recibe.php'; 
}
?>
