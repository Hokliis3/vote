<?php
include 'config.php';

error_reporting(0);

$playersonline = file_get_contents('http://minecraft-api.com/api/ping/playeronline.php?ip='.$serverip.'&port='.$serverport);

if($playersonline == true) {
	echo "Join with ".$playersonline." Others!";
} else{
	echo "Could not fetch the server.";
}