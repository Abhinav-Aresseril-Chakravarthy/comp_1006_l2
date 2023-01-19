<?php

$student_info_keys=[
    'name',
    'age',
    'dob'
];

$students=[
    ['DK', 69, '1969-09-19'],
    ['1990-09-09', 'rrr', 34]
];

$aa_students=[
    [
        "name"=> "DONKEY KING",
        "age"=>69,
        "dob"=>"1969-09-09"
    ],
    [
        "age"=>100,
        "name"=>'Emmet',
        "dob"=>'Unknown'
    ]
];

foreach ($aa_students as $students) {
    echo $students["age"];
}

?>