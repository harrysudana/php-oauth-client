<?php
$query = http_build_query(array(
    'client_id' => '6',
    'redirect_uri' => 'http://127.0.0.1:8002/callback.php',
    'response_type' => 'code',
    'scope' => '',
));
 
header('Location: http://127.0.0.1:8001/oauth/authorize?'.$query);

