<?php
//ProPayPal es vital para declarar si es demo o prueba las transacciones

//define('ProPayPal', 0); // El cero simboliza entorno de Prueba
//define('ProPayPal', 1); // El 1 simboliza entorno de producción

define('ProPayPal', 0);
if(ProPayPal){
define("PayPalClientId", "**************");
define("PayPalSecret", "****************");
define("PayPalBaseUrl", "http://localhost/tiendaderopa/cliente/cliente-index.php");
define("PayPalENV", "production");
} else {
define("PayPalClientId", "ASPDmLQQH-Uod0VBYyp5n6dM_WWfnuF59F24M77ZzCV07LJMY37UsomtZFAYc5frw36EM2V8e8VkOTxH");
define("PayPalSecret", "EAbAtRbh5IMTjY2cbPu0r0_LyRVrv3slzh7DSX3mg4opklitBNvUi6LpoA0gFxFsgCTR4He797igek_6");
define("PayPalBaseUrl", "http://localhost/tiendaderopa/cliente/cliente-index.php");
define("PayPalENV", "sandbox");
}
?>