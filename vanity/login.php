<?php
require_once 'library/util.php';

if ($_POST) {
    
    $username = 'josh';
    $password = '1234';
    
    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        redirect('/beginning-php/vanity/');
    }
    
    
}

// HOMEWORK
// if authentication fails, show them the form and an error
// message to that effect

include 'includes/header.php';
?>

<form method="POST" action="login.php">
    <label>Username</label>
    <input type="text" name="username"/>
    <label>password</label>
    <input type="password" name="password"/>
    <input type="submit"/>
</form>
 
 
 
<?php include 'includes/footer.php'?>