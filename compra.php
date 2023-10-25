<?php
    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    include 'conectar.php';
    require 'vendor/autoload.php';
    require 'vendor/fpdf/fpdf.php';

    $total = $_POST['total'];
    $idUsuario = $_SESSION['id'];

    $sql = "SELECT NOMBRE, PRECIO, CANTIDAD FROM carrito WHERE ID_USUARIO = '$idUsuario'";
	$result = $con->query($sql);

    $pdf = new FPDF();

    $pdf -> AddPage();
    
    $pdf -> SetFont('Arial', 'B', 24);

    $pdf -> Cell(30,10,'Recibo',1,0,'C');

    $pdf -> Image('imagenes/logo.png',10,8,33);
    
    $pdf -> Cell(80);
    
    $pdf -> Ln(20);
    
    $pdf->Cell(60,20, "Gracias por tu compra"." ".$_SESSION['nombre']);

    $pdf -> SetFont('Arial', 'B', 12);

    while($rows=$result->fetch_assoc()) {
        $pdf->Ln(20);
        $pdf->Cell(60,20, "Concepto: ".$rows['CANTIDAD']." ".$rows['NOMBRE'].  " \$".$rows['PRECIO']." c/u");
    }

    $pdf->Ln(20);
    $pdf->Cell(60,20, "Total: ".$total." \$");

    $pdf->Output("Compra.pdf","F");

    $outlook_mail = new PHPMailer();
    $outlook_mail->IsSMTP();
    $outlook_mail->Host = 'smtp.office365.com';
    $outlook_mail->Port = 587;
    $outlook_mail->SMTPSecure = 'tls';
    $outlook_mail->SMTPDebug = 2;
    $outlook_mail->SMTPAuth = true;
    $outlook_mail->Username = 'arteydisenotonala@outlook.com';
    $outlook_mail->Password = 'arteydiseno14';
     
    $outlook_mail->From = 'arteydisenotonala@outlook.com';
    $outlook_mail->FromName = 'Julio';
    $outlook_mail->AddAddress($_SESSION['correo'], $_SESSION['nombre']);  
     
    $outlook_mail->IsHTML(true);
     
    $outlook_mail->Subject = 'Recibo de compra';
    $outlook_mail->Body    = 'HTML_CONTENT';
    $outlook_mail->AltBody = 'This is the body in plain text for non-HTML mail clients at https://onlinecode.org/';
    $outlook_mail->AddAttachment('Compra.pdf', '', $encoding = 'base64', $type = 'application/pdf');
     
    if(!$outlook_mail->Send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $outlook_mail->ErrorInfo;
    }
    else {
        echo 'Message of Send email using Outlook SMTP server has been sent';
        header("location: index.php");
    }

?>
