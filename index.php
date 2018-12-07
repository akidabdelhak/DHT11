<?php
$filename = "data.json" ;
$data_json = file_get_contents($filename) ;
$data = json_decode($data_json) ;
$date_update = filemtime($filename);

$bargraph_height = 161 + $data->temperature * 4;
$bargraph_top = 315 - $data->temperature * 4;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="5">
<link rel="stylesheet" type="text/css" href="main.css"></link>
	<title></title>
</head>
<body>


<h1 >Température</h1>

<?php

$file = "data.txt";
$texte = file_get_contents($file);
$data = json_decode($texte);
$bargraph_height = 160+ $data->temperature * 4;
$bargraph_top = 315+$data->temperature * 4*-1;

?>
<p>il fait <?php echo $data->temperature; ?>° avec <?php echo $data->humidite ?>% d'humidité
 Le <?php echo date("d/m/Y", $date_update) ; ?>
    à <?php echo date("H:i:s", $date_update) ; ?>
    </p>

<div id="thermometer">

  <div id="bargraph" style=<?php echo "\"height:".$bargraph_height."px; top:".$bargraph_top."px;\""?>

	>
  </div>
</div>

</body>
</html>
