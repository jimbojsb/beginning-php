<?php
require_once 'bootstrap.php';

if ($_POST) {
    $emailRegex = '/[A-z0-9]+@[A-z0-9]+\.com/';
    if (preg_match($emailRegex, $_POST['email']))
    {
        if ($_POST['password'] == $_POST['confirmpassword']) {
            $created = User::create($_POST['username'], $_POST['email'], $_POST['password']);
            if ($created) {
                Util::redirect('/beginning-php/vanity/login.php');
            } else {
                $error_message = 'Something went wrong creating your user';
            }
        } else {
            $error_message = 'Passwords do not match';
        }
    } else {
        $error_message = 'invalid email address';
    }
    
    
}

include 'includes/header.php';
?>
<?if ($error_message) {?>
    <p style="color: red"><?=$error_message?></p>
<?}?>
<form method="POST" action="signup.php">
    <label>Choose a username</label>
    <input type="text" name="username" value="<?=$_POST['username']?>"/><br/>
    <label>Enter your Email</label>
    <input type="text" name="email"/><br/>
    <label>Choose a password</label>
    <input type="password" name="password"/><br/>
    <label>Confirm your password</label>
    <input type="password" name="confirmpassword"/>
    <input type="submit"/>
</form>
 
 
 
<?php include 'includes/footer.php'?>