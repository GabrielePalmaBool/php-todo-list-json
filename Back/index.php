<?php
    
    header('Content-Type: application/json');   
    header('Access-Control-Allow-Headers: X-Requested-With'); 
    header('Access-Control-Allow-Origin: http://localhost:5173'); 

    $List = [

        [ 
            'task' => 'COMPRARE PATATE',
            'status' => false,
        ],
        [ 
            'task' => 'PORTARE FUORI IL CANE',
            'status' => true,
        ],
        [ 
            'task' => 'SISTEMARE PORTA',
            'status' => false,
        ],
        [ 
            'task' => 'RITIRARE BUCATO',
            'status' => false,
        ],
        [ 
            'task' => 'RITIRARE ABITO',
            'status' => false,
        ],
        [ 
            'task' => 'COMPRARE UOVA',
            'status' => false,
        ],

    ];


    $items = json_encode($List);
    
    //inserosco un nuovo elemento
    file_put_contents('list.json', $items);

    echo $items;

?>
    
