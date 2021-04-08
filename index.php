<?php 
//read ariables sent via POST
$sessionID = $_POST["sessionID"];
$sericeCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

if ($text = ""){
    //first request 
    $response = "CON What would you want to check? \n";;
    $response .= "1. My Account number \n";
    $response .= "2. My Phone Number \n";
}
else if ($text == "1"){
    //first level response
    $response = "CON Choose account information \n";
    $response .= "1. Account number \n";
    $response .= "2. Account Balance \n";

}
else if ($text == "2"){
    $response = "END Your Phonenumber is".$phoneNumber;

}
else if ($text == "1*1"){
    $accountNumber = "ACC1001";
    $response = "END Your account number is" .$accountNumber;

}
else if($text == "1*2") {
    //second leel 
    $balance = "KES 20000";
    $response = "END Your balance is".$balane;  
}
//echo the respone to the api 
header('Context-type; text/plain');
echo $response;


?>




















