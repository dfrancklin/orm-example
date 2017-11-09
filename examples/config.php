<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($refresh) && $refresh) {
	header('refresh:2');
}
