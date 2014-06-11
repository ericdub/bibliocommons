<?php

$string = file_get_contents('https://api.bibliocommons.com/v1/titles?q=Gene+Wolfe&library=dbrl&search_type=custom&limit=20&page=1&metadata=0&date_format=iso8601&locale=en-US&api_key=dhhkjju3hxr5y99vawaq4rgu');

$json_a=json_decode($string,true);

//$json_o=json_decode($string);
// array method
foreach($json_a[titles] as $p)
{

echo '<img src="http://www.dbrl.org/cat/pic/m/'.$p[isbns][0].'" />';	
echo '<h1> '.$p[title].'</h1>';


if (!empty($p[sub_title])) {
   echo '<h3> '.$p[sub_title].'</h3>';
 }

echo '<h3>'.$p[authors][0][name].'</h3>'; 


echo '<p>'.$p[publication_date].'<br />';
echo 'Format: '.$p[format][name].'</p>';

if($p[availability][id]=='AVAILABLE'){

	echo '<p><a href="'.$p[details_url].'">This book is available now.</a></p>';
}

echo '<hr />';


}


?>
