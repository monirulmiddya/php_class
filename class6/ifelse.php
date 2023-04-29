<?php


// $age = 81;

// if($age < 18 && $age>= 12){
//     echo "You are Minor";
// }elseif($age < 60 && $age>= 18){
//     echo "You are Major";
// }elseif($age < 80 && $age>= 60){
//     echo "You are Senior citizen";
// }else{
//     echo "You are not eligable";
// }


// $gender = "f";
// $age = 18;

// if(($gender == "m" || $gender == "f") && $age  >= 18){
//     echo "You are eligable";
// }else{
//     echo "You are not eligable";
// }


// $status  = 1;


// $status_text = $status ? "Activated" : "Not Activated";

// echo $status_text;

// $d = [1,2,3];

// $resp = $user = $d[2] ?? null;

// if($resp != null){
//     echo "Response is : ". $resp;
// }else{
//     echo "Given index data not found";
// }

$gender = "o";

switch ($gender) {
    case 'm':
        echo "Male";
        break;
    case 'f':
        echo "Female";
        break;
    case 'o':
        echo "Other";
        break;
    default:
        echo "not valid gender";
        break;
}