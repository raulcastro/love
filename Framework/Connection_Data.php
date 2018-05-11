<?php

if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1')
{
	define ('DB_HOST', '127.0.0.1');
	define ('DB_USER', 'root');
	define ('DB_PASS', 'cas8867ca');
}
else
{
	define ('DB_HOST', 'internal-db.s161140.gridserver.com');
	define ('DB_PASS', '@2Go011235813');
}


define ('DB_NAME', 'db161140_love');