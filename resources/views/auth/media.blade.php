<?php


function API($ruta){

    $url = "https://gestiones.andimar.cl/api/personal-andesmar?tkn=r78dxnDMxke8JUtU8fRytSzWX";

    $respuesta = $url . $ruta;

    return $respuesta;

}
 

$json = file_get_contents($direccion);

$datos = json_decode($json,true);

print_r($datos);


/* dd('lists');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://gestiones.andimar.cl/api/personal-andesmar?tkn=r78dxnDMxke8JUtU8fRytSzWX");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

$respuesta = curl_exec($ch);
if(curl_errno($ch)) echo curl_errno($ch);
else $decoded = json_decode($respuesta, true);
var_dump($decoded);

curl_close($ch);

$valores = json_decode($respuesta, TRUE);

echo "" .$valores['rut'];

 */

?>
