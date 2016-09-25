<?php 
require_once ( __DIR__ . '/vendor/autoload.php');
require_once ( __DIR__ . '/db.config.php');


use Illuminate\Database\Capsule\Manager as DB;
$data  = DB::table('student')->get();
dd($data);
exit;




































$student = [ 
    'user_id'   =>  1, 
    'name'      =>  'Studnet Name', 
    'class'     =>  2, 
    'dob'       =>  '2016-09-28', 
    'address'   =>  'Test Address', 
    'department'=>  'Math', 
];

$studentID = save( 'student', $student);


$subjects = [
    [ 'studentID' => $studentID, 'subjectID' => 1  ],
    [ 'studentID' => $studentID, 'subjectID' => 2  ],
    [ 'studentID' => $studentID, 'subjectID' => 3  ],
    [ 'studentID' => $studentID, 'subjectID' => 4  ],
    [ 'studentID' => $studentID, 'subjectID' => 5  ]
];

save( 'subjects', $subjects);