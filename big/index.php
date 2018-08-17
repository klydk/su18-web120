
<!doctype html>
<html>
<head>
<title>Web Development Examples by Kelsey Kennedy</title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/big.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
</head>

<body>
<!-- START Wrapper -->
<div class="wrapper">
    <header>
    <h1><a href="index.php"><i class="logo fa fa-home"></i>Kelsey's Web Development Research and Examples</a></h1>
        <nav id="cssmenu">
    <ul>
     <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120 Portal</span></a></li>
     <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> Home</span></a></li>
     <li><a href="flexbox.php"><span>Flexbox</span></a></li>
     <li><a href="galleries.php"><span>Galleries</span></a></li>
     <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
    <ul>
        <li><a href="map.php"><span>Map</span></a></li>
       <li><a href="calendar.php"><span>Calendar</span></a></li>
       <li><a href="youtube.php"><span>YouTube</span></a></li>
    </ul>
    </li>
     <li><a href="parallax.php"><span>Parallax</span></a></li>
     <li><a href="shoppingcarts.php"><span>Shopping Carts</span></a></li>
     <li><a href="siteapp.php"><span>Site vs App</span></a></li>
     <li><a href="webcam.php"><span>Web Cam</span></a></li>
            </ul>
        </nav>
    </header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Client Questionnaire</h2>
 
    <form><!-- START HTML FORM -->
	<form action="contactme.php" method="post">
	<div>
        <label>
            Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
		</label>
	</div>
	<div>	
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
		</label>
	</div>
        <div>	
		<label>
			Contact Number:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid contact number is required" tabindex="20" size="44" />
		</label>
	</div>
        <div>	
		<label>
			Website:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid website/url is required" tabindex="20" size="44" />
		</label>
	</div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>	
		<label>
			Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Provide questions and concerns here. We will respond within 24 hours." tabindex="30"></textarea>
		</label>
	</div>	
	<div></div>
    <div class="g-recaptcha" data-sitekey="6LdrZGoUAAAAAJYIer7yB_v4xIEHpTzb-Knd6TqS
"></div> 
	<div>
		<input type="submit" value="submit" />
	</div>
    </form>
	<!-- END HTML FORM --></form>
     <script type="text/javascript"
        src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>
<p class="clear-recaptcha"></p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Basic Website Design Cycle Resources:</h3>
    <p><a href="https://www.forbes.com/sites/denispinsky/2018/02/12/website-design-standards/#3c9a9faf54ff">11 Website Design And Development Best Practices For 2018</a></p>
    <p><a href="https://webflow.com/blog/the-web-design-process-in-7-simple-steps">The web design process in 7 simple steps</a></p>
    <p><a href="https://www.beewits.com/website-design-questionnaire/">A COMPLETE 70+ WEBSITE DESIGN QUESTIONNAIRE TO IMPRESS CLIENTS</a></p>
</aside>
<!-- END RIGHT COL -->
<!-- START Footer -->
<footer>
  <p><small>&copy; 2016 - 2018 by <a href="#" target="_blank">Kelsey Kennedy</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 
</div>
<!-- END Wrapper -->
</body>
</html>