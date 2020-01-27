<?php

if (isset($_POST["email"]) ) { 

	// Формируем массив для JSON ответа
    $result = array(
    	'name' => $_POST["email"]
    ); 

    // Переводим массив в JSON
    echo json_encode($result); 
}

?>