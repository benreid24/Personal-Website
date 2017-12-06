<?php

function listDirectory($dir) {
	if (!is_dir($dir) or !is_string($dir) or !preg_match("/assets\/.*/",$dir))
		header("Location: http://22ndcg.org/personal");
	
	$rv = array();
	if ($dh = opendir($dir)){
		while (($file = readdir($dh)) !== false){
			$fileparts = pathinfo($file);
			if ($file !== "." and $file!==".." and $fileparts['extension']==="jpg")
				$rv[] = $dir."/".$file;
		}
		closedir($dh);
	}
	return $rv;
}

function printGalleryGrid($files) {
	$i = 0;
	foreach ($files as $file) {
		echo "<a href=\"$file\" class=\"highslide\" onclick=\"return hs.expand(this)\">"; //TODO - load thumbnail instead
		echo "<img src=\"$file\" alt=\"Highslide JS\" height=\"400\" width=\"600\" />"; //TODO - figure out dimensions for portrait v landscape
		echo "</a>";
		$i = $i + 1;
	}
}

?>