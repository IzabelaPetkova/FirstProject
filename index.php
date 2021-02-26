<?php

$welcomeMessage = "Good morning";
$age = 25;
$temp = 1.5;
$isTodayFriday = true;
$array = [
    $welcomeMessage,
    $age,
    $temp,
    $isTodayFriday
];

$assocArray = [
    "welcome" => $welcomeMessage,
    "age" => $age,
    "temp" => $temp,
    "isTodayFriday" => $isTodayFriday
];

//for($i = 0; $i < sizeof($array); $i++){
//    echo $array[$i];
//    echo "<br>";
//}
//
//$i=0;
//while($i < sizeof($array)){
//    echo $array[$i] .  "<br>";
//    $i++;
//}
//foreach ($assocArray as $key => $item) {
//    echo $key." ".$item . "<br>";
//}

//function findDogBreed($nameOfDog) {
//    $dogs =[
//        "husky" => "Kiara",
//        "dog" => "Maxi",
//        "bulldog" => "Jaro",
//        "shepard" => "Rex",
//    ];
//
//    foreach ($dogs as $breed => $dog) {
//        if ($nameOfDog === $dog) {
//            echo $breed."<br>";
//        } else {
//            echo "Dog has not been found";
//            break;
//        }
//    }
//}

//function findOfBreed($nameOfDog){
//    if($nameOfDog==="Kiara"){
//        echo "Dog is husky";
//    }elseif($nameOfDog==="Rex"){
//        echo "Dog is shepard";
//    }else{
//        echo "Dog has not been found";
//    }
//}
function findOfBreed($nameOfDog)
{
    switch ($nameOfDog) {
        case "Kiara":
            echo "Husky <br>";
            break;
        case "Rex":
            echo "Shepard <br>";
            break;
        case "Sharo":
            echo "Dog <br>";
            break;
        case "Maxi":
            echo "Bulldog <br>";
            break;

    }
}

findOfBreed("Kiara");
