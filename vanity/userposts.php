<?php
require_once 'bootstrap.php';

$user_id = $_GET['user_id'];
if ($user_id) {
    $user = User::getBy('id', $user_id);
    $posts = $user->getPosts();
} else {
    Util::redirect('/beginning-php/vanity');
}

include 'includes/header.php';
?>
<h3>All posts for <?=$user->username?>:</h3>
<br clear="all">
<div class="posts">
    <?foreach ($posts as $post){?>
       <div class="post">
    		<p class="username"><?=$post->user->username?> posted at <?=$post->getTimestamp()?>:</p>
    		<p class="content"><?=$post->content?></p>
       </div>
       <?=++$counter != count($posts) ? '<hr>' : ''?> 
    <?}?>
    
</div>
<br clear="all">
 
<?php include 'includes/footer.php'?>