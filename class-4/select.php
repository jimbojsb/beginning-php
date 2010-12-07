<pre>
<?php
require_once 'connect.php';

// build our sql statement
$sql = "SELECT *
        FROM demo";

// query the database and store the results
// returns a PDOStatement for those of you 
// following allongin the documentation
$results = $db->query($sql);

while ($result = $results->fetch(PDO::FETCH_ASSOC)) {
    var_dump($result);
}

?>
</pre>