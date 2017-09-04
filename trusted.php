<?php

$url = $_GET ['server'];
$url = $url . "/trusted";
$username = $_GET ['username'];
$site = $_GET ['target_site'];

if (isset($site) === FALSE)
{
	$data = array('username' => $username);
}
else
{
	$data = array('username' => $username, 'target_site' => $site);
}

$options = array(
    'http' => array(
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
echo($result);
if ($result === FALSE) { echo "-1"; }

?>
