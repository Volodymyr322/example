<?php

$persons = [
    [
        'name' => 'Thierry',
        'age' => 43,
        'hobby' => 'football',
        'is_married' => true,
        'pet' => 'dog',
        'pet_name' => 'Barclays',
    ],
    ['name' => 'Victor',
        'age' => 19,
        'hobby' => 'swimming',
        'is_married' => true,
        'pet' => 'cat',
        'pet_name' => 'Barsic',
    ],
    ['name' => 'Serega',
        'age' => 22,
        'hobby' => 'hokey',
        'is_married' => false,
        'pet' => 'mouse',
        'pet_name' => 'Jerry',
    ],
    ['name' => 'Valera',
        'age' => 25,
        'hobby' => 'pokemon',
        'is_married' => false,
        'pet' => 'fish',
        'pet_name' => 'Tom',
    ]

];

foeach ($persons as $person){

    if ($person['is_married']){
        print_r($person['name']);
    }
};
