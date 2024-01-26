<?php
    
    header('Content-Type: application/json');   
    header('Access-Control-Allow-Headers: X-Requested-With'); 
    header('Access-Control-Allow-Origin: http://localhost:5173'); 

    
//TRADURRE DAL JSON IN PHP

    //acquisisco il valore di  mio interesse
    $index = $_POST["value"];

    //convertoa acquisisco stringa da J_son formato
    $string = file_get_contents('list.json');
    $list= json_decode($string, true);

    //Creo variabile da inserire in lista

    $val = [
            'task' => $index,
            'status' => false,
    ];

    //push all'interno del mio array
    $list[] = $val;
 
    //ricodifico la nuova lista in j_son
    $items = json_encode($list);
    
    //"aggiorno" lista in file j_son
    file_put_contents('list.json', $items);

    //comunico lista aggiornata al Front
    echo $items;


?>