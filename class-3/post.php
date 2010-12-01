<?if ($_POST) {?>
	received form post for <?=$_POST['email']?>
<?}else{?>
<html>
<body>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
		<input name="email">
		<input type="submit">
	</form>
</body>
</html>
<?}?>