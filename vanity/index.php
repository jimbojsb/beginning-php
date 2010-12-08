<?php
require_once 'library/user.php';

include 'includes/header.php';
?>

<?if (loggedIn()) {?>
<a href="logout.php">Logout</a>
<?} else{?>
<a href="login.php">Login</a>
<?}

include 'includes/footer.php';
?>
