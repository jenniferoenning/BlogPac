<?php
		
	require 'vendor/autoload.php';

	use Medoo\Medoo;

	$database = new Medoo([
	    'database_type' => 'mysql',
	    'database_name' => 'blog-pac',
	    'server' => 'mariadb',
	    'username' => 'root',
	    'password' => 'root',
	    "charset" => "utf8",
	]);