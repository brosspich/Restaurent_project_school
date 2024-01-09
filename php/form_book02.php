<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- -------------------- meta name title ------------  -->
    <title>RESTAURANT | Booking</title>
    <meta name="title" content="RESTAURANT">
    <meta name="description" content="RESTAURANT description .........">

    <!-- --------------- link logo ------------------- -->
    <link rel="shshortcut icon" href="../img/logo1.png">

    <!-- ----------------------- link icons ----------------------------- -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <!-- -------------- link css --------------------- -->
    <link rel="stylesheet" href="../css/styleform.css">

    <!-- -------------- link js --------------------- -->

    <!-- -------------- link google fonts ------------------ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formbook01";
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
    $sql = "INSERT INTO `form_book_restaurent`(`Name`, `Email`, `Telephone`, `Persons`, `Date`, `Time`, `Message`) VALUES ('$Name','$Email','$Phone','$Persons','$Date','$Time','$Message')";


    if($conn->query($sql) == TRUE){
        echo "
            <section class='contanai'>
                <div class='contanai_succ'>
                    <img src='../img/congratulations-icon.svg'>
                    <p>Book A Table Successfully</p>
                    <a href='../index.php' class='btn_succ'>Done</a>
                </div>
            </section>
        ";
    }
    else{
        echo "Error: ".$sql . "</br>" .$conn->error;
    }

}
$conn->close();

?>

</body>
</html>