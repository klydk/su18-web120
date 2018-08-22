<!doctype html>
<html>
<head>
<title>Contact Us</title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/fp.css" />
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
    <h1><a href="index.php"><img class="img-header" src="images/ballardlogo.jpg" alt=""/></a> </h1>
        <nav id="cssmenu">
    <ul>
     <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120 Portal</span></a></li>
     <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> Home</span></a></li>
     <li><a href="current.php"><span>Current Residents</span></a></li>
     <li><a href="future.php"><span>Future Residents</span></a></li>
     <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i>Leasing and Purchase Info</span></a>
    <ul>
        <li><a href="building.php"><span>Building Amenities</span></a></li>
       <li><a href="realtors.php"><span>Realtors</span></a></li>
       <li><a href="agents.php"><span>Leasing Agents</span></a></li>
    </ul>
    </li>
     <li><a href="contact.php"><span>Contact Us</span></a></li>
            <li><a href="disclaimer.php"><span>Disclaimer</span></a></li>  </ul>
        </nav>
    </header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Contact Us Here!</h2>
 
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
 <h3>Come Check Us Out</h3>
    <div class='embed-container'><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10746.737333390174!2d-122.40084916445154!3d47.67112841635573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x549015c92f71fc61%3A0xd049cf3cfe69001c!2sBallard+Place+Condominiums!5e0!3m2!1sen!2sus!4v1534839014931" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
</aside>
<!-- END RIGHT COL -->
<!-- START Footer -->
<footer>
  <p><small>&copy; 2018 by <a href="#" target="_blank">Kelsey Kennedy</a>,<a  href="disclaimer.php">PRIVACY NOTICE</a> All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 
</div>
<!-- END Wrapper -->
</body>
</html>