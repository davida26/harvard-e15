<?php require('quote.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Harvard User Profile Design in PHP</title>
	<meta name="robots" content="noindex,nofollow">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/application.css">
</head>
<body>
    <div class="profile-wrp">
    	<div class="user">
	    	<div class="user-img">
				<img src="/img/me.jpg" alt="David Aviles">
	    	</div>
	    	<div class="user-details">
				<h1>David Aviles</h1>
				<p class="work">Software Engineer @IWH</p>
				<p class="location">Greater New York City Area</p>
	    	</div>
	    </div>
	    <div class="user-extended">
			<h2>About Me</h2>
			<p>I've had an interest in technology since I was young. As I got older, I found the web to be my true calling. During my undergraduate studies I specialized in web applications and the hardware that runs them. Today, I get to build awesome applications and features for really cool companies. I look forward to learning more in this class.</p>
			<h2>Quotes I Like</h2>
			<p><?php echo $getQuote; ?></p>
			<p class="quote-attribution">- <?php echo $getQuoteAuthor; ?></p>
	    </div>
    </div>
</body>
</html>