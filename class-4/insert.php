<pre>
<?php
require_once 'connect.php';

// build our sql statement
$sql = "INSERT INTO demo (firstname, lastname)
        VALUES ('Bob', 'Johnson')";

// we don't really care about the results here
$db->query($sql);

?>
</pre>