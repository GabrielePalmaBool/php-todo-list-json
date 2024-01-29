<?php

    header('Content-Type: application/json');   
    header('Access-Control-Allow-Headers: X-Requested-With'); 
    header('Access-Control-Allow-Origin: http://localhost:5173'); 

    
//TRADURRE DAL JSON IN PHP

    //acquisisco il valore di  mio interesse
    $index = $_GET["index"];

    //convertoa acquisisco stringa da J_son formato
    $string = file_get_contents('list.json');
    $list= json_decode($string, true);
	
	//elimino posizione elemento in lista e aggiorno contemporaneamente la lista
	array_splice($list,$index,1);

	
    //ricodifico la nuova lista in j_son
    $items = json_encode($list);
    
    //"aggiorno" lista in file j_son
    file_put_contents('list.json', $items);

    //comunico lista aggiornata al Front
    echo $items;


?>