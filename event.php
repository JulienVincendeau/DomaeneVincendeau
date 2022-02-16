<?php
if($_POST["submit"]) {
    $recipient="event@domaenevincendeau.com";
    $subjectMail="Domäne Night 2018";
    $subjectMailConfirmation="[Domäne Vincendeau] Votre demande de réservation à bien été prise en compte";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $nbinvit=$_POST["invitation"];
    $message=$_POST["message"];

    $headersConfirmation =  "From: Domäne Vincendeau<$recipient>" . "\r\n";
    $headersConfirmation .= "Reply-to: ".$recipient. "\r\n";;
    $headersConfirmation .= "MIME-Version: 1.0\r\n";
    $headersConfirmation .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headersConfirmation .= "Content-Type: image/jpeg; \r\n";

	  $mailBody="Nom: $sender\nEmail: $senderEmail\nNb invit: $nbinvit\n\n$message";

    $mailBodyConfirmation ="
		<html>
		<head>
		<meta charset=\"ISO-8859-1\">
		<title>Domäne Vincendeau - Vins fins de Loire : Confirmation envoi message</title>

		</head>

		<body style=\"font-family: Open sans, monOpenSans; font-weight: normal; background-color: white; color:#009cac;\">
			<br/><br/>
			<table style=\" width: 710px;\">
						<tr style=\"vertical-align: baseline;\">
							<td style=\"padding: 10px;vertical-align: bottom;\">
								<div >
										Bonjour,<br/>
										Votre demande de réservation pour la Domäne Night 2018 est bien prise en compte.<br/>
                    Rendez-vous le 27 janvier 2018 à partir de 18h00<br/>
                    au <a href=\"https://www.google.fr/maps/place/Dom%C3%A4ne+Vincendeau/@47.375686,-0.6421182,15z/data=!4m5!3m4!1s0x0:0x5a51d904989bb487!8m2!3d47.375686!4d-0.6421182\">Domäne Vincendeau.</a>

								</div>
							</td>
						</tr>
						<tr>
							<td style=\"padding: 10px;vertical-align: bottom;\">
								<div>
								<a href=\"https://www.domaenevincendeau.com\" style=\"bottom: 10px;text-decoration: none;\">
									<img src=\"https://www.domaenevincendeau.com/images/logo-mail.png\"
									alt=\"Domäne Vincendeau\" title=\"Domäne Vincendeau\"
									style=\"height: 107px; border:none;\" />
								</a>
								</div>
							</td>
						</tr>
					</table>
		</body>
		</html>
    ";

	mail($senderEmail, $subjectMailConfirmation, $mailBodyConfirmation, $headersConfirmation);

    mail($recipient, $subjectMail, $mailBody, "From: $sender<$senderEmail>");


    $thankYou="<p class='sectionCentreeFondBleu' style='left: -104px; width: 525px; font-size: 14px; position: relative;'>Votre demande a bien &eacute;t&eacute; prise en compte et un email de confirmation vient de vous &ecirc;tre adress&eacute; &agrave; : ".$senderEmail."</p>";
}

?>

<!doctype html>
<html class="no-js" lang="fr">
  <head>
      <meta charset="utf-8">
      <title>Domäne Night 2018</title>
      <meta http-equiv="keywords" content="Doomäne, Night, Portes ouvertes, Domaene, Domaine, Domane, Vincendeau, Vins, Cr&eacute;mant, Bulle, Blanc, Ros&eacute;, Jus de raisin, Loire, Anjou, fins, qualit&eacute;s, agriculture, biologique, bio, vigne, ballade, B&eacute;huard, Lombardières, Maine-et-Loire, France, Angers" />
      <meta name="author" content="Julien Vincendeau" />
      <meta name="copyright" content="&copy; Dom&auml;ne Vincendeau" />
      <meta http-equiv="Content-Language" content="fr-FR" />
      <meta name="viewport" content="width=device-width">

      <!-- Schema.org markup for Google+ -->
      <meta itemprop="name" content="#Crémants et #Vins fins de #Loire depuis 2014 ">
      <meta itemprop="description" content="Entre coteaux et bords de Loire nous &eacute;laborons des vins fins de Loire en Anjou, certifi&eacute;s ecocert, sur la commune de Rochefort-sur-Loire. ">
      <meta itemprop="image" content="https://www.domaenevincendeau.com/images/logo-mail.jpg">

      <!-- Twitter Card data -->
      <meta name="twitter:card" content="summary">
      <meta name="twitter:site" content="@DomaeVincendeau">
      <meta name="twitter:title" content="#Crémants et #Vins fins de #Loire depuis 2014 ">
      <meta name="twitter:description" content="Entre coteaux et bords de Loire nous &eacute;laborons des vins fins de Loire en Anjou, certifi&eacute;s ecocert, sur la commune de Rochefort-sur-Loire. ">
      <meta name="twitter:creator" content="@julienv1cendeau">
      <meta name="twitter:image" content="https://www.domaenevincendeau.com/images/logo-mail.jpg">

      <!-- Open Graph data -->
      <meta property="og:title" content="#Crémants et #Vins fins de #Loire depuis 2014 " />
      <meta property="og:type" content="website" />
      <meta property="og:url" content="https://www.domaenevincendeau.com" />
      <meta property="og:image" content="https://www.domaenevincendeau.com/images/logo-mail.jpg" />
      <meta property="og:description" content="Entre coteaux et bords de Loire nous &eacute;laborons des vins fins de Loire en Anjou, certifi&eacute;s ecocert, sur la commune de Rochefort-sur-Loire. " />
      <meta property="og:site_name" content="Dom&auml;ne Vincendeau" />


      <meta name="description" content="Portes Ouvertes au Dom&auml;ne Vincendeau - Domäne Night 2018" />
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

      <!--Effet du menu -->
      <link rel="stylesheet" type="text/css" href="frameworks\CreativeLinkEffects\css\component.css" />
      <!--Definition des couleurs des barres qui vont tourner autour du lien -->
      <link rel="stylesheet" type="text/css" href="styles\myCreativeLinkEffects.css" />
      <!--Déclaration de notre barre de menu bootstrap-->
      <link rel="stylesheet" type="text/css" href="styles\myBootstrapMenu.css" />

      <!-- fa -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


      <!--Mon identité-->
      <link rel="stylesheet" type="text/css" href="styles\domaenevincendeau.css" />

      <link rel="shortcut icon" href="favicon.ico" />


      <link rel="canonical" href="https://www.domaenevincendeau.com/event.html" />
    </head>
  <body class="structureEntete">
    <!--[if lte IE 8]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <header>
    <div id="navbar-full">
       <div id="navbar">
          <!--
           navbar-default can be changed with navbar-ct-blue navbar-ct-azzure navbar-ct-red navbar-ct-green navbar-ct-orange
           -->
           <nav class="navbar navbar-default navbar-transparent  cl-effect-14 " role="navigation">
             <div class="container  col-xs-1 col-sm-1 col-md-1"></div>
             <div class="container  col-xs-10 col-sm-10 col-md-10 ">
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                 </button>
                 <a class="navbar-brand navbar-brand-logo" href="https://www.domaenevincendeau.com" style="height: 121px; padding: 0 0 0 0; margin-left: 0px">
                    <div class="logo" >
                       <img src="images\logo-mail.png" class="imgBrand"  id='Logo'>
                    </div>
                    <div class="brand">  </div>
                 </a>
               </div>
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <ul class="nav navbar-nav navbar-right"  style="margin-right: 0px;">
                   <li><a href="index.html" class="navbar-link lang" key="linkHome">Dom&auml;ne</a></li>
                   <li><a href="valeurs.html" class="navbar-link lang" key="linkValeurs">Valeurs</a></li>
                   <li><a href="qualitaet.html" class="navbar-link lang" key="linkQualitaet">Qualit&auml;t</a></li>
                   <li><a href="vins-fins-de-loire.html" class="navbar-link lang" key="linkVins">Vins</a></li>
                   <li><a href="presse.html" class="navbar-link lang" key="linkPresse">Echo</a></li>
                   <li class="active"><a href="event.php" class="navbar-link lang" key="linkEvents">Events</a></li>
                   <li><a href="contact.php" class="navbar-link lang" key="linkContact">Contact</a></li>
                 </ul>
               </div><!-- /.navbar-collapse -->
             </div><!-- /.container-fluid -->
             <div class="container  col-xs-1 col-sm-1 col-md-1"></div>
           </nav>
       </div><!--  end navbar -->

   </div> <!-- end menu-dropdown -->
 </header>
  <main>
    <section id="etoilesBckg" >
  	<!--	<img src="images/etoile grande.jpg" alt="" title="" style="top: -195px; height: 647px; right: -451px; position: absolute; z-index: -5;" />
  			<img src="images/etoile petite.jpg" alt="" title="" style="left: -517px; top: 175px; height: 279px; position: absolute; z-index: -5;" />-->
  	</section>

    <div class="container col-xs-1 col-sm-1 col-md-1"></div>
    <div class="main col-xs-10 col-sm-10 col-md-10">

       <div class="container  col-md-2"></div>
       <row class="container  col-xs-12 col-sm-12 col-md-8" style="text-align: justify; vertical-align:top;  border: none; word-wrap: break-word;padding-top:15px;">
         <div class="txtGris" style="text-align: justify; vertical-align:top;  border: none; word-wrap: break-word;">
           <section  class="container  col-xs-12 col-sm-12 col-md-12"  id="thankyou" style="position: relative; z-index: 5; top: 0px;">
                 <?=$thankYou ?>
           </section>
           <row class="container  col-xs-12 col-sm-6 col-md-6" >
             <p>
                <img src="images\Invitation DomäneNight 2018_1.jpg"  style="width: 30em;"\>
             </p>
             <p style="z-index: 10">
                <form method="post" action="event.php#thankyou"  style="z-index: 10">
                  <fieldset  style="width:89%; border: none; float:left;">
                    <input type="text" required id="sender" name="sender" style="width: 100%;" placeholder="Prénom Nom *" /><br/>
                    <input type="email" required id="senderEmail" name="senderEmail" style="width: 100%;" placeholder="Adresse email *" /><br/>
                    <input type="number" required id="invitation" name="invitation" style="width: 100%;" placeholder="Nombre de places *" /><br/>
                    <textarea rows="" cols="" id="message"   name="message" placeholder="Message" ></textarea><br/>
                    <input type="submit" name="submit" value="envoyer" />
                  </fieldset>
                </form>
            </p>
           </row>


           <br>
           <row class="container  col-xs-12 col-sm-6 col-md-6" >

             <h2 style="font-size: x-large">Domäne Night 2018</h2>
             <p>Le 27 janvier 2018 de 18h00 à 21h00</p>
             <p style="color:#009cac"><b>Evénement sur réservation</b></p>
             <p>
                <img src="images\Invitation DomäneNight 2018_2.jpg"  style="width: 30em;"\><
             </p>
           </row>
         </div>
       </row>
       <div class="container  col-sm-1 col-md-1 reseauSociaux">
         <p style="position: relative;top:88px;left:1%; text-align:center;">
             <a href="https://twitter.com/DomaeVincendeau" target="_blank"> <i class="fa fa-twitter fa-2x" style="color:#009cac"></i> </a>
         </p>
         <p style="position: relative;top:6px;left:1%; text-align:center;">
           <a href="https://www.facebook.com/DomaeVincendeau/" target="_blank"> <i class="fa fa-facebook fa-2x" style="color:#009cac"></i> </a>
         </p>
     </div>

    </div>

    <div class="container col-xs-1 col-sm-1 col-md-1"></div>
  </main>

  <footer class="footer col-md-12    col-xs-12 col-sm-12" >
      <div class="container  col-md-1 col-xs-1 col-sm-1" ></div>
      <div class="container  col-md-10  col-xs-10 col-sm-10 sectionFooter">
        <div class="row  col-md-2" ></div>
        <div class="row  col-xs-12 col-sm-12 col-md-10" >
          <row class="row  col-md-1 notShortScreen"  ></row>
          <row class="row  col-md-10  col-xs-12 col-sm-12">
              <p style="color:white;">Dom&auml;ne Vincendeau <b style="font-weight: bolder;">&nbsp;fon &bull; fax <a href="tel:+33241572115" style="text-decoration: none; color: inherit;" >02 41 57 21 15</a>&nbsp;</b> <a href="mailto:contact@domaenevincendeau.com" style="text-decoration: none; color: inherit;" >contact@domaenevincendeau.com</a></p>
              <p style="color:white;">L'Enclos &bull; Route de Port Godard &bull; Les Lombardi&egrave;res 49190 Rochefort sur Loire &bull; France</p>
              <p style="color:white;"><a href="mentions-legales.html" style="text-decoration: none; color: inherit;" class="navbar-link lang" key="linkMentions">Mentions l&eacute;gales</a> - @2014 Designed by<a href="http://zougraphiste.com/" target="_blank" style="text-decoration: none; color: inherit;"> zOugraphiste.com </a>&bull; Created by <a href="https://fr.linkedin.com/in/julienvincendeau" target="_blank" style="text-decoration: none; color: inherit;" >Julien Vincendeau</a></p>
              <p style="color:white;">L'abus d'alcool est dangereux pour la santé, sachez le consommer avec modération</p>
              <p style="color:white;" id="footer-menu">Plan du site : <a href="index.html" style="text-decoration: none; color: inherit;" class="navbar-link lang" key="linkHome">Dom&auml;ne</a> &bull; <a href="valeurs.html" style="text-decoration: none; color: inherit;" class="navbar-link lang" key="linkValeurs">Valeurs</a> &bull; <a href="qualitaet.html" style="text-decoration: none; color: inherit;" class="navbar-link lang" key="linkQualitaet">Qualit&auml;t</a> &bull; <a href="vins-fins-de-loire.html" style="text-decoration: none; color: inherit;" class="navbar-link lang" key="linkVins">Vins</a> &bull; <a href="contact.php" style="text-decoration: none; color: inherit;" class="navbar-link lang" key="linkContact">Contact</a> &bull; <a href="presse.html" style="text-decoration: none; color: inherit;" class="navbar-link lang" key="linkPresse">Echo</a> &bull; <a href="mentions-legales.html" style="text-decoration: none; color: inherit;" class="navbar-link lang" key="linkMentions">Mentions l&eacute;gales</a></p>
          </row>
            <row class="row  col-md-1 notShortScreen"  ></row>
        </div>
      </div>
      <div class="container  col-md-1 col-xs-1 col-sm-1" ></div>
  </footer>


      <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
      <!--
       <script>
         !function(A,n,g,u,l,a,r){A.GoogleAnalyticsObject=l,A[l]=A[l]||function(){
         (A[l].q=A[l].q||[]).push(arguments)},A[l].l=+new Date,a=n.createElement(g),
         r=n.getElementsByTagName(g)[0],a.src=u,r.parentNode.insertBefore(a,r)
         }(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

         ga('create', 'UA-XXXXX-X');
         ga('send', 'pageview');
      </script>
  -->


<!--
  <div class="container  col-md-12    col-xs-12 col-sm-12">
      <button class="translate" id="en">English</button>
      <button class="translate" id="fr">Français</button>
      <button class="translate" id="de">Deutsch</button>

  </div>
-->
  </body>
</html>
<script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="  crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="js\mytranslate.js"></script>
<script src="js\translate.menu.js"></script>
<script src="js\detectBrowserLang.js"></script>

<script>
window.onscroll = function() {
  growShrinkLogo()
};

function growShrinkLogo() {
  var Logo = document.getElementById("Logo")
  if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
    Logo.className="imgBrandScrolled"
  } else {
    Logo.className = "imgBrand";
  }
}
</script>
