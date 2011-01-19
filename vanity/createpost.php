<?php
require_once 'bootstrap.php';

if ($_POST) {
    if ($_POST['content']) {
        $user = User::getLoggedInUser();
        $content = $_POST['content'];
        $created = Post::create($user->id, $content);
        if ($created) {
            Util::redirect('/beginning-php/vanity');
        } else {
            $error_message = 'Sorry, something went wrong with your post';
        }
    }
}

include 'includes/header.php';
?>
<?if ($error_message) {?>
    <p style="color: red"><?=$error_message?></p>
<?}?>
<form method="POST" action="createpost.php">
    <label>What are you doing right now?</label><br/>
    <textarea cols="40" rows="10" name="content"></textarea>
    <input type="submit"/>
</form>
 
 
 
<?php include 'includes/footer.php'?>