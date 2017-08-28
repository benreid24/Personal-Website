<?php

function listDirectory($dir) {
	if (!is_dir($dir) or !is_string($dir) or !preg_match("/assets\/.*/",$dir))
		header("Location: http://22ndcg.org/personal");
	
	$rv = array();
	if ($dh = opendir($dir)){
		while (($file = readdir($dh)) !== false){
			if ($file !== "." and $file!==".." and !is_dir($file))
				$rv[] = $dir."/".$file;
		}
		closedir($dh);
	}
	return $rv;
}

function printGalleryGrid($files) {
	$i = 0;
	foreach ($files as $file) {
		echo "<a href=\"javascript:void(viewer.show($i))\"><img src=\"$file\" class=\"galleryImage\"/></a>\n";
		$i = $i + 1;
	}
}

function printGallerySource($files) {
	echo "<link rel=\"stylesheet\" href=\"assets/css/gallery.css\">\n";
	echo "<script type=\"text/javascript\">\n";
	echo "var viewer = new PhotoViewer();\n";
	echo "viewer.disableEmailLink();";
	
	foreach ($files as $file) {
		echo "viewer.add('$file');\n";
	}
	
	echo "</script>\n";
}

?>