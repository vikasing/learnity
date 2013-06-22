
<?php

		error_reporting(E_ALL);
		$feedURL = "http://gdata.youtube.com/feeds/api/users/".$_POST['yt']."/uploads?max-results=50";
		$sxml = simplexml_load_file($feedURL);
		//print($feedURL);
		/*foreach ($sxml->entry as $entry) {
		    $values[]= array('entry' => (string)$entry->name); 
		} */      
		echo json_encode($sxml);
?>
