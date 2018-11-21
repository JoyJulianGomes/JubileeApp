<?php
require __DIR__ . "/../model/queries.php";


function calculate_fee($spouse_attendee, $child_attende)
{
    return 500 + (($spouse_attendee > 0) ? 300 : 0) + (500 * $child_attende);
}

function new_user()
{
    $total_amount = calculate_fee(1, 2);
    $paid_amount = 0;
    date_default_timezone_set('Asia/Dhaka');
    $date = date("Y-m-d H:i:s");
    // Queries::insert_userinfo(
    //     $batch, $uname, $fat_name, $mot_name,
    //     $gender, $mat_state, $occupation,
    //     $designation, $spouse_attendee,
    //     $child_attendee, $total_amount,
    //     $paid_amount, $date
    // );

    $id = [];
    for ($i=0; $i<50; $i++){
        array_push($id,Queries::insert_userinfo(
            2012, 'Joy', 'Julian', 'Gomes',
            'male', 0, 'occupation',
            'designation', 0,
            0, $total_amount,
            $paid_amount, $date
        ));
    }
    var_dump($id);
}

new_user();
// main()
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    switch ($_POST["action"]) {
        case "newuser":
            new_user();
            break;
    }
}
// if (SERVER['POST']) {
//validate inputs
// $total_amount = calculate_fee();

// Queries::insert_userinfo(
//     2012, 'Joy', 'Julian', 'Gomes',
//     'male', 0, 'occupation',
//     'designation', 0,
//     0, $total_amount,
//     $paid_amount, $date
// );
// }
