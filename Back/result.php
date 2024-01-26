<?php
    
    header('Content-Type: application/json');   
    header('Access-Control-Allow-Headers: X-Requested-With'); 
    header('Access-Control-Allow-Origin: http://localhost:5173'); 

    
//TRADURRE DAL JSON IN PHP
     //$string = file_get_contents('list.json');
     //$item = json_decode($string, true);
	 //$index = $_GET["index"];

    //var_dump($item[0]);
	
	$request_body = file_get_contents('php://input');
    $data = json_decode($request_body, true);


    $item = $data['item']; // Works!
	echo $item;

    // $List = [

    //     [ 
    //         'task' => 'COMPRARE PATATE',
    //         'status' => false,
    //     ],
    //     [ 
    //         'task' => 'PORTARE FUORI IL CANE',
    //         'status' => true,
    //     ],
    //     [ 
    //         'task' => 'SISTEMARE PORTA',
    //         'status' => false,
    //     ],
    //     [ 
    //         'task' => 'RITIRARE BUCATO',
    //         'status' => false,
    //     ],
    //     [ 
    //         'task' => 'RITIRARE ABITO',
    //         'status' => false,
    //     ],
    //     [ 
    //         'task' => 'COMPRARE UOVA',
    //         'status' => false,
    //     ],

    // ];


    // $items = json_encode($List);
    // //inserosco un nuovo elemento
    // file_put_contents('list.json', $items);

    // echo json_encode($List);

    // $List =[

    //     'PANE'

    // ];

    //  $itemN = json_encode($List);
    // // //inserosco un nuovo elemento
    //  file_put_contents('list.json', $itemN,FILE_APPEND);
    // // echo json_encode($List);





?>
    