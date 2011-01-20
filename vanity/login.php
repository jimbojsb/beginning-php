<?php
require_once 'bootstrap.php';

if ($_POST) {
    
    $user = User::getBy('username', $_POST['username']);
    if ($user->authenticate($_POST['password'])) {
        Util::redirect('/beginning-php/vanity/');   
    } else {
        $error_message = 'Invalid username or password';
    }
}

include 'includes/header.php';
?>
<?if ($error_message) {?>
    <p style="color: red"><?=$error_message?></p>
<?}?>
<form method="POST" action="login.php">
    <label>Username</label>
    <input type="text" name="username"/>
    <label>password</label>
    <input type="password" name="password"/>
    <input type="submit"/>
</form>
 
 
 
<?php include 'includes/footer.php'?>