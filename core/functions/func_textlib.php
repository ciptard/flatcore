<?php

/**
 * Print Messages
 * Source: lang/$lang/msg/$file.txt
 */

function print_msg($file,$l) {

	
	$text = file_get_contents("lib/lang/$l/msg/$file");
	$text = nl2br($text);
	
	return($text);

}








/**
 * Text Snippets
 */


function get_textlib($text) {

global $fc_db_content;

try {
	$dbh = new PDO("sqlite:$fc_db_content");

	$text = $dbh->quote($text);

	$sql = "SELECT * FROM fc_textlib WHERE textlib_name = $text ";

	$result = $dbh->query($sql);
	$result= $result->fetch(PDO::FETCH_ASSOC);

	$dbh = null;


	foreach($result as $k => $v) {
   		$$k = stripslashes($v);
	}


	return $textlib_content;

}

catch (PDOException $e) {
	echo 'Error: ' . $e->getMessage();
}


}



function get_textlib_by_fn($fn) {

	global $fc_db_content;

	$dbh = new PDO("sqlite:$fc_db_content");
	$fn = $dbh->quote($fn);
	$sql = "SELECT * FROM fc_textlib WHERE textlib_name = $fn ";

	$result = $dbh->query($sql);
	$result= $result->fetch(PDO::FETCH_ASSOC);

	$dbh = null;

	foreach($result as $k => $v) {
   		$$k = stripslashes($v);
	}

	return $textlib_content;
}



function get_all_textlibs() {
	global $fc_db_content;
	$dbh = new PDO("sqlite:$fc_db_content");
	$sql = "SELECT textlib_name, textlib_content FROM fc_textlib WHERE textlib_id > '7'";

	$result = $dbh->query($sql);
	$result= $result->fetchAll(PDO::FETCH_ASSOC);
  

	$dbh = null;
	
	return $result;
	
}




?>