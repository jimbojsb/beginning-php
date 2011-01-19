<pre>
<?php
$text = 'My test text tests regular expressions';
$text2 = 'My_test_text_tests_regular_expressions';

// bad
$matched = preg_match('/s/', $text, $matches);
if ($matched) {
    echo 'found an s';
    print_r($matches);
}

echo "\n\n";

$changedText = preg_replace('/ [a-z]{1}/', 'ab', $text);
echo $changedText;


echo "\n\n";
$callbackReplacedText = preg_replace_callback('/([A-z]+?)(_)/', 'myCallback', $text2);
echo $callbackReplacedText;



function myCallback($match)
{
    return strrev($match[1]) . ' ';
}

?>
</pre>