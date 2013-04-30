<?php
/*
* Scanner network scan tool
* Author: Andreas Untersteggaber
* v.01
*/
require_once('config.php');

?>
<!DOCTYPE html>
<html>
	<head>
		<title>HP LaserJet CM1312nfi Network Scanner </title>
		<link href="css/bootstrap.css" rel="stylesheet" media="screen">
		<link href="css/style.css" rel="stylesheet" media="screen">
	</head>
	<body>
		<div class="container">
			<div class="hero-unit">
				<form class="properties form-horizontal">

                                <label>Modus</label>
                                <select id="colors" name="colors">
								  <option value="Color">Farbe</option>
                                  <option value="Gray">Graustufen</option>
                                  <option value="Lineart">Text</option>
								  </select>

                                <label>Aufl&ouml;sung (in dpi)</label>
                                <select id="resolution" name="resolution">
                                    <option value="75">75</option>
                                    <option value="100">100</option>
                                    <option value="150">150</option>
                                    <option value="200">200</option>
                                    <option value="300">300</option>
                                </select>

                                <label>Quelle</label>
                                <select id="source" name ="source">
                                    <option value="ADF">Einzug</option>
                                    <option value="Flatbed">Flachbett</option>
                                </select>

                            </form>
				<button class="startscan btn btn-large btn-primary" type="button">Start scan</button>
				<img class="loader hidden" src="img/ajax-loader.gif" />
				<div class="log"></div>
			</div>
		</div>
		<script src="js/jquery-1.9.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
