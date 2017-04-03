<?php
include 'config.php';

$playersonline = file_get_contents('http://minecraft-api.com/api/ping/playeronline.php?ip=mc.planetbn.com&port=25565');

if($playersonline == true) {
	echo "Join with ".$playersonline." Others!";
} else{
	echo "Could not fetch the server.";
}