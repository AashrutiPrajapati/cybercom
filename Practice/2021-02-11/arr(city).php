<?php
    $continent = [
        'asia' => [
            'india'=>['gujarat',
                     'delhi'
            ],
            'japan'=> [
                'j1',
                'j2'
            ]
        ],
            'america'=>[
                'NY'=>[
                    'ny1',
                    'ny2'
                ],
                'AL'=>[
                    'al1',
                    'al2'
                ]
            ]
         ];

         echo '<pre>';
         print_r($continent['asia']['india'][1]);

?>