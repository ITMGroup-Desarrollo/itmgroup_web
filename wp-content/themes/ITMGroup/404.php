<?php

http_response_code(404);
$path = preg_replace('/wp-content.*$/','',__DIR__);
require_once($path.'/wp-load.php');


get_template_part( 'components/404'); 

?>
