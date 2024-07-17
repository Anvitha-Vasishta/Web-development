<?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "book_db";
       $conn = new mysqli($servername,$username,$password,$dbname);

       if($conn->connect_error){
        die("Connection failed: " .$conn->connect_error);
       }
       if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $location = $_POST["location"];
        $guests = $_POST["guests"];
        $arrivals = $_POST["arrivals"];
        $departure = $_POST["departure"];

        $sql = "INSERT INTO book_form( name, email, phone, address, location, guests, arrivals, departure) VALUES ('$name','$email','$phone','$address','$location','$guests','$arrivals','$departure')";

        if($conn->query($sql) == TRUE){
            echo "Booked Successfully";
        }else{
            echo "Error: " .$sql . "<br>" .$conn->error;
        }
       }
       $conn->close();
?>