<?php
    define('IMAGE_DIR', '/home/administrator/scan/');
    define('NETWORK_PRINTER_NAME', 'hpaio:/net/HP_Color_LaserJet_CM1312nfi_MFP?zc=NPI2D15B2')

    /* ------- no more changes needed from this point on ------- */

	if(!function_exists('debugr')){
		function debugr($output){
		  echo '<pre>';
		      print_r($output);
		  echo '</pre>';
		}
	}
?>