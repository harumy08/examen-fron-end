<?php
if (isset($_POST['to'])) {
$sname= 'Natalia Munoz';
$to = $_POST['to'];
$subject = 'Examen Front End';
$msg = $_POST['msg'];
$msgtype = 'text';
if($msgtype=='text'){
    $html='';
}
else{
$msg = htmlentities($msg);
$html=$msg;
$msg='';
}
$mgClient = new Mailgun('key-eef0101b297eef2de75762b1e85bd0a6');
//enter domain which you find in Default Password 
$domain = "sandbox83894cf32fd948b08a843379a0903b82.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
"from" => "$sname <postmaster@sandbox83894cf32fd948b08a843379a0903b82.mailgun.org>",
 "to" => "Baz <$to>",
 "subject" => "$subject",
 "text" => "$msg!"
));
echo "<script>alert('Mensaje enviado con éxito.. !!');</script>";
}
?>