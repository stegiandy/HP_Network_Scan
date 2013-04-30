<?php
	if(!function_exists('debugr')){
		function debugr($output){
		  echo '<pre>';
		      print_r($output);
		  echo '</pre>';
		}
	}
?>