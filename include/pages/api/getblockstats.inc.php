<?php
$defflip = (!cfip()) ? exit(header('HTTP/1.1 401 Unauthorized')) : 1;

// Check if the API is activated
$api->isActive();

// Check user token
$user_id = $api->checkAccess($user->checkApiKey($_REQUEST['api_key']), @$_REQUEST['id']);

$blocks = $statistics->getLastBlocksbyTime();

// Output JSON format
echo $api->get_json($blocks); 

// Supress master template
$supress_master = 1;
