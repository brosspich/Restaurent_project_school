<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formbook";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connextion Failed:".$conn->connect_error);
}


// Handle form submission
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $Name = $_POST["name"];
    $Email = $_POST["email"];
    $Phone = $_POST["phone"];
    $Persons = $_POST["persons"];
    $Date = $_POST["date"];
    $Time = $_POST["time"];
    $Message = $_POST["message"];


    // prepare and execute the database insertion
    $sql = "INSERT INTO `form_book`(`Name`, `Email`, `Phone`, `Persons`, `Date`, `Time`, `Message`) VALUES ('$Name','$Email','$Phone','$Persons','$Date','$Time','$Message')";


    if($conn->query($sql) == TRUE){
        echo "Book A Table Successfully";
    }
    else{
        echo "Error: ".$sql . "</br>" .$conn->error;
    }

}
$conn->close();


?>