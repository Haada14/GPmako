<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php
	
$name = $_POST['name'];
$utilsateur_email = $_POST['email'];
$message = $_POST['message'];

$email_form = $utilsateur_email;

$email_subjet = "New Form Submission";

$email_body = "Nom Utlisateur: $name.\n".
                  "Message utilsateur: .$message.\n";



//$to = "adamadiagne662@gmail.com";

//$header = "From: $email_From \r\n";

//$headers =  "Reply-To: $visitor_email\r\n";

//mail($to,$email_subjet,$email_body,$headers);
//header("location: index.html");

echo "Votre message a ete bien envoyé a ".$name." avec l'email".$utilsateur_email 



?>
</body>
</html>
