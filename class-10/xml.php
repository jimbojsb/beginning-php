<pre>
<?php
$remoteXml = file_get_contents('http://www.offers.com/admin/rss/recent-stores/');
$remoteXmlNodes = simplexml_load_string($remoteXml);
//var_dump($remoteXmlNodes);

foreach ($remoteXmlNodes->channel->item as $rssItem) {
    echo $rssItem->link . PHP_EOL;
}

$localXml = simplexml_load_file('text.xml');
foreach ($localXml->person as $person) {
    var_dump($person->address['type']);
    var_dump($person->name);
}

?>
</pre>