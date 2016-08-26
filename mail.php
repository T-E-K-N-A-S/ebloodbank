<?php
$email=$_GET["email"];
$f=$_GET["f"];
$l=$_GET["l"];
$ph=$_GET["ph"];
$f=$_GET["f"];
$to = $email;
echo $to;
$message=$_GET["request"];
//$to ='teknas97@gmail.com';
$subject = "REQUEST FOR BLOOD DONATION";

$htmlContent = '
    <html>
    <head>
        <title>REQUEST FOR BLOOD DONATION</title>
    </head>
    <body>
        <h1>Thanks you for joining with us!</h1>
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 300px; height: 200px;">
            <tr>
                <th>Name:</th><td>CodexWorld</td>
            </tr>
            <tr style="background-color: #e0e0e0;">
                <th>Email:</th><td>contact@codexworld.com</td>
            </tr>
            <tr>
                <th>Website:</th><td><a href="http://www.codexworld.com"><button>http://www.codexworld.com</button></a></td>
            </tr>
        </table>
    </body>
    </html>';

// Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: TEKNAS<bloodbenifactor.com>' . "\r\n";

$headers .= "Bcc: teknas97@gmail.com\r\n";
// Send email
if(mail($to,$subject,$message,$headers)):
    $successMsg = 'Email has sent successfully.';
header("location:show.php?f=$f&l=$l&ph=$ph&e=$email");

else:
    $errorMsg = 'Email sending fail.';
endif;
?>