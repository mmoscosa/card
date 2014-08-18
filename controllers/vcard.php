<?php 
	$path = "/vcard/";  
	$file = "Martin Moscosa.vcf";  

	header('Content-Type: text/x-vcard');  
	header('Content-Disposition: inline; filename= "'.$file.'"');  
	header('Content-Length: '.filesize($path.$file));  

	readfile($path.$file);
