<?php
require_once 'bootstrap.php';
if ($_POST) {
    $user = User::getLoggedInUser();
    $deleted = $user->delete();
    Util::redirect('/beginning-php/vanity');
}

include 'includes/header.php';
?>
<form method="POST" action="deletemyaccount.php">
	<input type="hidden" name="delete" value="delete"/>
    <input type="submit" value="Yes, really delete my account"/>
</form>
 
 
 
<?php include 'includes/footer.php'?>