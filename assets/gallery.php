<?php

function listDirectory($dir) {
	$rv = array();
	if (is_dir($dir)){
		if ($dh = opendir($dir)){
			while (($file = readdir($dh)) !== false){
				if ($file !== "." and $file!=="..")
					$rv[] = $dir."/".$file;
			}
			closedir($dh);
		}
	}
	return $rv;
}

function printGalleryGrid($files) {
	$i = 0;
	foreach ($files as $file) {
		echo "<a href=\"javascript:void(viewer.show($i))\"><img src=\"$file\" width=\"200\" height=\"140\"/></a>\n";
		$i = $i + 1;
	}
}

function printGallerySource($files) {
	echo "<script type=\"text/javascript\">\n";
	echo "var viewer = new PhotoViewer();\n";
	
	foreach ($files as $file) {
		echo "viewer.add('$file');\n";
	}
	
	echo "</script>\n";
}

?>