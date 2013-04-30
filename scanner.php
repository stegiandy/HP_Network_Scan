<?php
	require_once('config.php');
	set_time_limit(120);

	$color = 'Color';
	$resolution = '75';
	$source = 'ADF';
	$batch = '';

	if(isset($_GET['colors'])){
		$color = $_GET['colors'];
	}
	if(isset($_GET['resolution'])){
		$resolution = $_GET['resolution'];
	}
	if(isset($_GET['source'])){
		$source = $_GET['source'];
	}
	if($source == 'Flatbed'){
		$batch = ' --batch-count=1';
	}

	if (!command_exist('makemiracle')) {
	    echo '-1';
	} else {
		$output = exec('scanimage -v -p --batch='.IMAGE_DIR.date("m_d_Y_H_i").'_%d.tif --format=tiff '.$batch.'  --mode '.$color.' --source '.$source.' --resolution='.$resolution.' -d '.NETWORK_PRINTER_NAME, $ret, $err);
		echo $err;
	}

	function command_exist($command) {
	    $return = shell_exec("which $cmd");
	    return (empty($return) ? false : true);
	}
?>
