<?php
$url;
$name_image = "";
$path;
$file = file_get_contents("json.json");
$json = json_decode($file, true);

//código para imprimir varias imagens
foreach($json as $v){
  $path = "images/0".$v["ean"].".jpg";
  $url = $v["url"];
  file_put_contents($path, file_get_contents($url)); 
}
 
