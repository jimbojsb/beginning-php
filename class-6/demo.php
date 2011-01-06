<pre>
<?php
require_once 'Person.php';

$person = new Person('Josh');
$person->age = 27;

echo "My Name Is: $person->name";
echo '<br>';
echo "Am I legal? " . ($person->isLegal() ? 'Yes' : 'No');

$person->setSex('male');

var_dump($person);

// someone submitted a form...lets check the name they gave us
$name = 'Josh';
echo Person::isValidName($name) ? 'Yes' : 'No';

?>
</pre>