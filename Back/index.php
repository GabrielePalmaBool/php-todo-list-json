<?php
    
    header('Content-Type: application/json');   
    header('Access-Control-Allow-Headers: X-Requested-With'); 
    header('Access-Control-Allow-Origin: http://localhost:5173'); 

    $List = [

        'COMPRARE PATATE',
        'PORTARE FUORI IL CANE',
        'SISTEMARE PORTA',
        'RITIRARE BUCATO',
        'RITIRARE ABITO',
        'COMPRARE UOVA'
    ];


    $items = json_encode($List);
    //inserosco un nuovo elemento
    file_put_contents('list.json', $items);

    echo json_encode($List);

    $string = file_get_contents('list.json');
    $item = json_decode($string, true);

    $List =[

        'PANE'

    ];

     $itemN = json_encode($List);
    // //inserosco un nuovo elemento
     file_put_contents('list.json', $itemN,FILE_APPEND);
    // echo json_encode($List);
?>
    
