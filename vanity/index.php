<?php
require_once 'bootstrap.php';
$posts = Post::get();
?>


<?include 'includes/header.php'?>

<?if (User::loggedIn()) {?>
<a href="logout.php">Logout</a>
<?} else{?>
<a href="login.php">Login</a>
<?}?>
<br clear="all">
<div class="posts">
    <?foreach ($posts as $post){?>
       <div class="post">
    		<p class="username"><a href="userposts.php?user_id=<?=$post->user->id?>"><?=$post->user->username?></a> posted at <?=$post->getTimestamp()?>:</p>
    		<p class="content"><?=$post->content?></p>
       </div>
       <?=++$counter != count($posts) ? '<hr>' : ''?> 
    <?}?>
    
</div>
<br clear="all">

<?include 'includes/footer.php'?>
