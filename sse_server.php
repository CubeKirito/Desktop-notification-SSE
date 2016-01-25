<?php
	header('Content-Type: text/event-stream');
	header('Cache-Control: no-cache');

	echo "data: NO DATA\n\n";
	flush();
?>