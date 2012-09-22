<?php

function site_header($title) {
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Scott Hilbert - <?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="portfolio.css"/>
	</head>
	<body>
		<div id="bglayer"></div>
		<div id="contentlayer">
			<div id="content">

				<div id="myname">
					<a href="index.php"><img width="195px" height="23px" src="scotthilbert.png" alt="Scott Hilbert"/></a>
				</div>

				<div id="navlinks">
					<a href="index.php" >HOME</a> &middot;
					<a href="personal.php" >PERSONAL WORK</a> &middot;
					<a href="professional.php">PROFESSIONAL WORK</a> &middot;
					<a href="resume.php" >RESUME</a> &middot;
					<a href="http://blog.shilbert.com/" >BLOG</a>
				</div>

				<div id="top"></div>
				<div id="whitebox">
	<?php
}

function site_footer() {
	?>

				</div>
				<div id="bottom"></div>
		
				<!--<div id="footer">
					<a href="http://validator.w3.org/check/referer">Validate</a>
				</div>-->
		
			</div> <!-- end content -->
		</div> <!-- end contentlayer -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15233927-1']);
  _gaq.push(['_setDomainName', 'shilbert.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	</body>
</html>
	<?php
}

?>