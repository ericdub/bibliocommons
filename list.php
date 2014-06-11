<?php
$string = file_get_contents('https://api.bibliocommons.com/v1/lists/288914147?library=dbrl&date_format=iso8601&locale=en-US&api_key=dhhkjju3hxr5y99vawaq4rgu');

$json_a=json_decode($string,true);


// array method

echo '<h1>'.$json_a['list']['name'].'</h1>';
echo '<h3>'.$json_a['list']['description'].'</h3>';
echo '<hr />';

foreach($json_a['list']['list_items']as $p)
{

echo '<div style="float: left;"><img src="http://www.dbrl.org/cat/pic/m/'.$p['title']['isbns']['0'].'" /></div>';
	
echo '<div style="float: left;"><h1> '.$p['title']['title'].'</h1>';


if (!empty($p['title']['sub_title'])) {
   echo '<h3> '.$p['title']['sub_title'].'</h3>';
 }

echo '<h3>'.$p['title']['authors'][0]['name'].'</h3>'; 


echo '<p>'.$p['title']['publication_date'].'<br />';
echo 'Format: '.$p['title']['format']['name'].'</p>';
echo '</div>';
echo '<div style="clear:both;"></div>';
echo '<hr />';

}

?>
