<pre>
<?php
require_once 'connect.php';

// build our sql statement
$sql = "UPDATE demo
        SET name='Joshua'
        WHERE name='Josh'";

$db->query($sql);
?>
</pre>