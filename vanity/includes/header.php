<html>
<head>
	<title>Vanity</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css"/>
</head>
<body>
<img src="images/vanity.png"/>
<?if (loggedIn()){?>
    Welcome, <?=getUsername()?>
<?}?>