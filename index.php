<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="main.css"></link>
	<title></title>
</head>
<body>


<h1>Température</h1>

<?php

$file = "data.txt";
$texte = file_get_contents($file);
$data = json_decode($texte);
$bargraph_height = 161 $json->temperature * 4;
$bargraph_top = 315 $json->humidite * 4;

?>
<p>il fait <?php echo $data->temperature; ?>° avec <?php echo $data->humidite ?>% d'humidité</p>

<div id="thermometer">
	<img src="img/thermometre">
  <div id="bargraph" style="height:161px <?php temperature ?>; top: 315px <?php ?>;">
  </div>
</div>

</body>
</html>






