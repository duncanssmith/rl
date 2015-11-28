<?php

function show_images($path,$images){

	echo "<table border=\"0\">\n";
	for($i=1;$i<sizeof($images);$i++){
		echo "<tr><td>\n";
		echo "<img src=\"".$path."/".$images[$i-1]."\" alt=\"".$path."/".$images[$i]."\"></td><td>".$i.", ".$images[$i-1]."<br/><br/>\n";
		echo "</td></tr>\n";

	}
	echo "</table>\n";

}
