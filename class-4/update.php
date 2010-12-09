<pre>
<?php
require_once 'connect.php';

$newName = 'Joshua';

// build our sql statement
$sql = "UPDATE demo
        SET name='$newName'
        WHERE name='Josh'";

$db->query($sql);
?>
</pre>