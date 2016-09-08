<?php
//composer require mailgun/mailgun-php:~1.7.2
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Examen Fron End</title>
	<meta name="author" content="Natalia Mu&oz" />
	<meta name="description" content="Examen Fron End" />
	<meta name="Resource-type" content="Document" />
                <meta property="og:type" content="article" />
<meta property="og:title" content="Examen front-end web" />
<meta property="og:url" content="http://www.brandcheck.com.mx/examen/" />
<meta property="og:image" content="http://www.brandcheck.com.mx/examen/img/fondo_movile.jpg" />
<meta property="og:description" content="Examen a prospecto front-end web." />
<meta property="og:site_name" content="Examen front-end web" />
<meta property="og:locale" content="es_ES" />
<meta property="og:locale:alternate" content="en_UK" />
<meta property="og:image:width" content="300" />
<meta property="og:image:height" content="300" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="Examen" />
<meta name="twitter:title" content="Examen a prospecto front-end web." />
<meta name="twitter:description" content="Ver examen a prospecto front-end web." />
<meta name="twitter:image" content="http://www.brandcheck.com.mx/examen/img/fondo_movile.jpg" />
<meta name="twitter:url" content="http://www.brandcheck.com.mx/examen/" />


	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="css/examples.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->
</head>
<body>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7&appId=293208214380711";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <ul id="menu" style="display:none;">
        <div class="container-fluid">
               <nav class="navbar navbar-fixed-top menu">
               <div class="container">
                   <div class="row">
                    <div class="col-xs-4 col-md-4"><div id="fbStatus" class="perfil"></div></div>
                    <div class="col-xs-4 col-md-4"><img src="img/logo_kokonut.png" class="img-responsive logo" alt="kokonutstudio"></div>
                    <div class="col-xs-4 col-md-4">
        <li data-menuanchor="secondPage"><a href="#secondPage">Home</a></li>
	<li data-menuanchor="3rdPage"><a href="#3rdPage">Busqueda</a></li>
	<li data-menuanchor="4thpage"><a href="#4thpage">Contacto</a></li></div>
                   </div>
               </div> 
               </nav></div> 
</ul>
    <div id="fullpage">
	<div class="section " id="section0" style="display:block;">
            <video autoplay loop muted id="myVideo">
			<source src="videos/fondo.mp4" type="video/mp4">
			<source src="videos/fondo.wmv" type="video/webm">
		</video>
            <div class="layer">
<section>
<article>
<fb:login-button appId="293208214380711" scope="public_profile,email" id="facebook-login-button"></fb:login-button>
</article>
</section>
            </div>
	</div>
        <div class="section" id="section1">
            <div class="row">
                 <div class="col-md-12">
                     <p class="slogan">BECAUSE TECNOLOGY IS A GAME CHANGER<br/><strong>WE BELIVE</strong></p><br/>
                   <div class="imgsContainer">
                       <img src="img/cohete.png" class="img-responsive element" id="elemento">
                   </div>
                 </div>
            </div>
            </div>
        <div class="section" id="section2">
            <div class="buscar" id="pantalla"><div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                <form action="#" id="buscar_video">
                    <input type="text" id="search" placeholder="Busqueda" autocomplete="on" class="buscador" />
                    <input type="submit" class="lupa" value="">
                </form>
                    </div>
                     <div class="col-md-2"></div>
                </div>  <div class="row">
             <div id="results">
             </div>
        </div></div>
            <div class="row">
                 <div class="col-md-12"><p class="slogan">BECAUSE TECNOLOGY IS A GAME CHANGER<br/><strong>WE BELIVE</strong></p><br/>
                    <img src="img/cohete.png" class="img-responsive"></div>
                </div>
        </div>
        <div class="section" id="section3">
            <div class="row">
                 <div class="col-md-12"><p class="slogan">BECAUSE TECNOLOGY IS A GAME CHANGER<br/><strong>WE BELIVE</strong></p><br/>
                    <img src="img/cohete.png" class="img-responsive"></div>
                </div>
            <div id="contac">
             <div class="row">
                    <div class="col-md-12">
                          <div class="row">
                    <div class="col-xs-4 col-md-4">
                        <div class="botones correo">contacto</div>
                    </div>
                     <div class="col-xs-4 col-md-4">
                        <div class="botones facebook" data-href="http://www.brandcheck.com.mx/examen/" data-mobile-iframe="true" data-layout="button" data-size="large">
                            <a class="fb-xfbml-parse-ignore" target="_blank" href="javascript:abrir('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.brandcheck.com.mx%2Fexamen%2F&amp;src=sdkpreparse')">share</a></div>
                    </div>
                      <div class="col-xs-4 col-md-4">
                      <div class="botones twitter">
                          <a href="javascript:abrir('http://twitter.com/share?text=Ver examen a prospecto front-end via @harumy08')">tweet</a></div>
                      </div>
                          </div>
                          </div>
                    </div>
              <div class="row">
                               <div class="col-md-6">
  <form id="enviaprueba" action="#">
  <div class="form-group">
    <input type="email" class="form-control campos email" name="to" id="to" placeholder="Correo Electrónico" required/>
  </div>
  <div class="form-group">
    <input type="text" class="form-control campos" placeholder="Introduzca su mensaje aquí.." name="msg" id="msg" required/>
    <input type="submit" name="submit" value="Enviar" class="botones enviar" >
  </div>
  </form>
                               </div>
                          </div>
            </div>
        </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/facebookSDK.js"></script>
<script type="text/javascript" src="js/jquery.fullPage.js"></script>
<script type="text/javascript" src="js/examples.js"></script>
<script type="text/javascript" src="js/correo.js"></script>
<script type="text/javascript" src="js/mail.js"></script>
<script type="text/javascript" src="js/bloques.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script src="https://apis.google.com/js/client.js?onload=init"></script>
<script>function abrir(url) { 
open(url,'','width=300,height=300') ; 
} </script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
if (isset($_POST['to'])) {
$sname= 'Natalia Munoz';
$to = $_POST['to'];
$subject = 'Examen Front End';
$msg = $_POST['msg'];
$msgtype = 'text';
$msg='';
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