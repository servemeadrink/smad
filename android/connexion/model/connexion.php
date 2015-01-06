<?php

	$query = $db->prepare("
		SELECT *
		FROM smad_user
	");
	
	$query->execute();
	
	$tableau = $query->fetchAll(PDO::FETCH_ASSOC);

	$var = 1;
	
	