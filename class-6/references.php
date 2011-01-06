<pre>
<?php
require_once 'Person.php';

function makeMeOlder($personObject)
{
    $personObject->age++;
    Person::$sexes = array('boy', 'girl');
}

function incrementAge($age)
{
    $age++;
}

$josh = new Person();
$josh->age = 27;

var_dump($josh);
makeMeOlder($josh);
var_dump($josh);

$age = 27;
incrementAge($age);
echo $age;
?>
</pre>
