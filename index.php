<?php
	require_once $_SERVER["DOCUMENT_ROOT"]."\conf.php";
	?>
<!--mixins imported from myStylkeGuide--><!DOCTYPE html>
<html class="no-js" lang="en" prefix="og: http://ogp.me/ns#">
  <head>
    <meta charset="utf-8">
    <meta name="Página de Login." content="content">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="viewport" content="width = 320, initial-scale = 2.3, user-scalable = no">
    <meta name="viewport" content="width = device-width, initial-scale = 2.3, user-scalable = no">
    <meta name="viewport" content="width = device-width, initial-scale = 2.3, minimum-scale = 1, maximum-scale = 5">
    <meta name="viewport" content="width = 320, initial-scale = 2.3, user-scalable = no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--X-UA-compatible-->
    <meta http-equiv="X-UA-compatible" content="IE=11">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <!--iphone-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/sb-logo.png">
    <!--PWA tags here-->
    <meta name="theme-color" content="#0096D9">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="shortcut icon" type="image/png" href="./assets/img/icon_1024.png">
    <link rel="apple-touch-icon" href="./assets/img/icon_1024.png">
    <link rel="apple-touch-startup-image" href="./assets/img/icon_1024.png">
    <link rel="manifest" href="./manifest.json">
    <link rel="author" type="text/plain" href="./humans.txt">
    <link rel="sitemap" type="application/xml" title="Sitemap" href="./sitemap.xml">
    <script src="https://kit.fontawesome.com/20f3c29ee8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <link rel="shortcut icon" href="assets/img/vagobet-icon.png" type="image/x-icon"><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,0,200" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Inicio | Vagobet</title>
  </head>
  <body class="Inicio" itemscope itemtype="http://schema.org/WebPage">
    <header class="main-header">
      <nav class="top-nav">
        <div class="top-nav__container"><a class="top-nav__link" href="index.php"><img class="top-nav__logo" src="assets/img/logotipo-vagobet.png" alt="vagobet"></a>
          <ul class="top-nav__menu">
            <li class="top-nav__li"><a class="top-nav__anchor" href="reglamento.html">REGLAMENTO</a></li>
            <li class="top-nav__li"><a class="top-nav__anchor" href="reglas-deportes.html">REGLAS DEPORTES</a></li>
          </ul>
          <div class="top-nav-control">
            <button class="top-nav__mb-iconMenu hamburger hamburger--slider-r" type="button"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
          </div>
        </div>
      </nav>
    </header>
    <main class="main-container">
      <div class="ed-grid login-wrapper">
        <div class="login">
          <div class="login-content">
			<form class="login__form mobile" method="post" action="<?php echo M_LOGIN_URL; ?>">
				<input type="hidden" name="siteID" id="siteID" value="<?php echo DGS_SITEID; ?>" />
				<input type="hidden" name="errorURL" value="<?php echo SITE_URL; ?>/?login-error" />  
				<label for="user">Usuario:</label>
				<input type="text" id="user" name="account" id="account" required>
				<label for="password">Contraseña:</label>
				<input type="password" id="password" name="password" required>
				<button type="submit">Ingresar</button>
            </form>
            <form class="login__form desktop" method="post" action="<?php echo LOGIN_URL; ?>">
				<input type="hidden" name="siteID" id="siteID" value="<?php echo DGS_SITEID; ?>" />
				<input type="hidden" name="errorURL" value="<?php echo SITE_URL; ?>/?login-error" />  
				<label for="user">Usuario:</label>
				<input type="text" id="user" name="account" id="account" required>
				<label for="password">Contraseña:</label>
				<input type="password" id="password" name="password" required>
				<button type="submit">Ingresar</button>
            </form>

			<!-- <div class="slider-caption slider-caption-center" id="mobileLogin">
				<form method="post" action="<?php echo M_LOGIN_URL; ?>">
					<div class="row">
						<input type="hidden" name="siteID" id="siteID" value="<?php echo DGS_SITEID; ?>" />
						<input type="hidden" name="errorURL" value="<?php echo SITE_URL; ?>/?login-error" />
						<div class="large-4 medium-6 small-6 columns"><input type="text" placeholder="Usuario" name="account" id="account" style="background:rgba(255,255,255,0.8); color:#333;" /></div>
						<div class="large-4 medium-6 small-6 columns"><input type="password"  placeholder="Contraseña" name="password" id="password" style="background:rgba(255,255,255,0.8); color:#333;" /></div>
						<div class="large-4 medium-12 small-12 columns"><input class="button loginP" type="submit" value="INGRESAR" /></div>
					</div>
				</form>
			</div> -->

            <div class="login-agents"><a class="login-agent__btn" href="http://adm.vagobet.com/" target="_blank">agentes 2.0</a><a class="login-agent__btn" href="http://agents.vagobet.com/" target="_blank">agentes</a></div>
          </div>
        </div>
        <div class="login-img"><img src="assets/img/login-img.jpg" alt=""></div>
      </div>
    </main>
	<?php
        include DEFAULTS_PATH."/scripts.php"
		?>
	<script type="text/javascript">	
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();	
		(function(){	
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];	
		s1.async=true;	
		s1.src='https://embed.tawk.to/5b7ef728f31d0f771d841546/default';	
		s1.charset='UTF-8';	
		s1.setAttribute('crossorigin','*');	
		s0.parentNode.insertBefore(s1,s0);	
		})();	
</script>	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script src="assets/js/scripts-min.js"></script>
  </body>
</html>
