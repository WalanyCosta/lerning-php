<?php

if($_SERVER['REQUEST_METHOD'] === 'GET'){
	$search = filter_input(INPUT_GET, 's', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

	var_dump($search);
}

