<?php
require_once 'bootstrap.php';

if ($_POST) {
    
    $user = new User();
    $user->username = $_POST['username'];
    $user->setPassword($_POST['password']);
    
    if ($user->authenticate()) {
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