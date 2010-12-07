<pre>
<?php
require_once 'connect.php';

// build our sql statement
$sql = "DELETE 
        FROM demo
        WHERE id=1";

$db->query($sql);
?>
</pre>