
<!doctype html>
<html>
<head>
<title>Flexbox Research</title>
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
  <h1><a href="index.php"><i class="logo fa fa-users"></i>Kelsey's Web Development Research and Examples</a></h1>
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
 <h2 class="pageID">Flexbox Research</h2>
    
    
    
    
    
    
    
    
        <p>	Flexbox is a fairly new layout mode in CSS3. The previous version of CSS defined four layout modes; block layout (for sections in a webpage), inline layout (for text), table layout (for two-dimensional table data), and positioned layout (for explicit position of an element). The Flexible Box Layout Module makes it easier to design flexible responsive layout structure without using float or positioning. CSS3 introduced two new layout methods as an alternative to abusing floats and tables, now we have the grid layout (this divides space into columns and rows. Like table layouts, but better.) And finally, we have the Flexbox layout, which distributes space along a single column or row.</p>
 
        	<p>A flexbox layout consists of a flex container which holds flex items. The flex container can be laid out vertically or horizontally. This is referred to as the main axis. The children of a flex container and laid out along the main axis. These children are able to “flex” their sizes, growing to fill unused space within the container, or having the ability to shrink and avoid possible overflow. When we nest multiple flex containers with different orientations, we can achieve complex layouts.</p>
 
        	<p>Let’s go into more detail about how the flexbox functions, starting with the flex-direction property, this defines which direction the container wants to stack the flex items. Next, we have the flex-wrap property, this specifies whether the flex items should wrap or not. Our next property is a shorthand property for setting both the flex-direction and flex-wrap, this is called flex-flow. Justify-content is another property that is used, this property is used to align the flex items. The align-items property is used to align the flex items vertically, while align-content is used to align the flex lines.</p>

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Citations</h3>
    <p>-What IS flexbox?</p>
    <p><a href="https://spaceninja.com/2015/08/24/what-is-flexbox/">https://spaceninja.com/2015/08/24/what-is-flexbox/</a></p>
    <p>-CSS Tricks Flexbox Guide</p>
    <p><a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/">https://css-tricks.com/snippets/css/a-guide-to-flexbox/</a></p>
    <p>-CSS Flexbox</p>
    <p><a href="https://www.w3schools.com/css/css3_flexbox.asp">https://www.w3schools.com/css/css3_flexbox.asp</a></p>
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