<pre>
<?php
require_once '../vanity/library/Database.php';
$db = new Database('sqlite:../vanity/db/vanity.sqlite');

$sql = "SELECT *
		FROM users
		WHERE email = ?";

$results = $db->query($sql, 'josh@joshbutts.com');
var_dump($results);

$results = $db->queryOne($sql, 'josh@joshbutts.com');
var_dump($results);

$results = $db->queryCell($sql, 'josh@joshbutts.com');
var_dump($results);
?>
</pre>