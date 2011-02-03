<pre>
<?php
$url = "http://josh:password@www.offers.com:80/foo/bar/?id=4#7";

// get all url parts in an array
$urlParts = parse_url($url);
//print_r($urlParts);


// get just one of the components
$path = parse_url($url, PHP_URL_PATH);

// parse the url of the page we're on
$url = $_SERVER['REQUEST_URI'];
//print_r(parse_url($url));

//split up a query string into a useful format
$url = $_SERVER['REQUEST_URI'];
$query = parse_url($url, PHP_URL_QUERY);
parse_str($query, $vars);


// build up a http query string
$baseUrl = "http://localhost/";
$params = array("name" => "josh", "username" => "josh", "id" => 7);
$fullUrl .= $baseUrl . "?" . http_build_query($params);
echo $fullUrl;



?>
</pre>