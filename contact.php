<!DOCTYPE html>
<html>
<head>
	<title>(mc)fancy | contact us</title>
	<link href="favicon.ico" rel="shortcut icon">
	<link rel="stylesheet" media="print" type="text/css" href="mcprint.css">
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" media="only screen and (min-device-width: 1025px)" href="mcfancy.css" />
    <link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 1024px)" href="mcfancymob.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="author" content="Evan McCullough">
	<meta name="description" content="Use the form on this page to get into contact with the (mc)fancy team.">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42109105-1', 'evanamccullough.com');
  ga('send', 'pageview');

</script>
</head>
<body>
	<div id="box">
		<h1 id="top"><img src="http://www.picgifs.com/job-graphics/job-graphics/carpenter/timmermannen58.gif" alt="Click here for more gifs and graphics" /><span id="mcfancytitle">(mc)fancy</span><img src="http://www.picgifs.com/job-graphics/job-graphics/carpenter/timmermannen62.gif" alt="Click here for more gifs and graphics" /></h1>
		<nav >
			<ul id="mainnav">
				<li><a href="index.html">home</a></li>
				<li><a href="challenge.html">behind the scenes</a></li>
				<li><a href="gallery.html">media gallery</a></li>
				<li><a href="contact.php">contact</a></li>
			</ul>
		</nav>
		<div id="maintext">
			<h2>contact us</h2>
			<div id="contactbody">
			<p>Feel free to send comments and other creative ideas.</p>
<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$problem = FALSE;

	if (empty($_POST['name'])) {
		$problem = TRUE;
		echo "<script type='text/javascript'> alert('Name must be filled out'); </script>";
	}
	if (empty($_POST['email']) || (substr_count($_POST['email'], '@') != 1) ) {
		$problem = TRUE;
		echo "<script type='text/javascript'>alert('Please provide a valid email address');</script>";
	}
	if (empty($_POST['message'])) {
		$problem = TRUE;
		echo "<script type='text/javascript'>alert('Message must be filled out');</script>";
	}

	if (!$problem) {
		$email = $_POST['email'];
		$name = $_POST['name'];
		$message = $_POST['message'];
		$body = "Message from: $name\n\nReturn Email: $email\n\nMessage:\n$message";
		$emailto = "e_mccullough92@yahoo.com, mcfancy14@gmail.com";
		
		echo "<script type='text/javascript'>alert('Thank you for submitting your comment. We will contact you shortly.');</script>";
		print "<meta http-equiv=\"refresh\" content=\"0;URL=contact.php\">";
		mail($emailto, 'Message from mcfancy site', $body, 'From: webmaster@evanamccullough.com');
	}
}
	
?>

			<form name="commentSubmit" action="send_contact.php" method="post">
			<fieldset id="emailname">
					<legend>name*</legend>
					<input name="name" id="name" placeholder="name" type="text"><br/>
			</fieldset>
			<fieldset id="emailaddress">
					<legend>email*</legend>
					<input name="email" id="email" placeholder="example@domain.com" type="text"><br/>
			</fieldset>
			<fieldset id="emailmessage">
					<legend>message*</legend>
					<textarea id="message" name="message" placeholder="enter comments here."></textarea>			</fieldset>
			<fieldset id="buttons">
				<input id="submit" value="submit" type="submit" >
				<input id="reset" value="clear" type="reset" >
			</fieldset>
			</form>
</div></div>
		<footer>
			<span>Developed by <a href="http://evanamccullough.com">Evan McCullough</a> <a href="#top">top</a> | <a href="index.html">home</a> | <a href="contact.php">contact</a></span>
		</footer>
	</div>
</body>
</html>