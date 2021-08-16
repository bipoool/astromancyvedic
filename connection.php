<?php

    $server = "localhost";
    $username = "vip3022";
    $password = "Vipul@212001";

    

    try{
        $conn = new PDO("mysql:host=$server;dbname=AstromancyVedic", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $addAppointMentQuery = $conn->prepare("INSERT INTO Appointments (Name, Email, Number, DateOfAppointment, DateOfBirth, TimeOfBirth, BirthPlace) 
                                VALUES (:Name, :Email, :Number, :DateOfAppointment, :DateOfBirth, :TimeOfBirth, :BirthPlace)");

        $addAppointMentQuery->bindParam(':Name', $Name);
        $addAppointMentQuery->bindParam(':Email', $Email);
        $addAppointMentQuery->bindParam(':Number', $Number);
        $addAppointMentQuery->bindParam(':DateOfAppointment', $DateOfAppointment);
        $addAppointMentQuery->bindParam(':DateOfBirth', $DateOfBirth);
        $addAppointMentQuery->bindParam(':TimeOfBirth', $TimeOfBirth);
        $addAppointMentQuery->bindParam(':BirthPlace', $BirthPlace);

        $allAppointMentQuery = $conn->prepare("SELECT * FROM Appointments");

        $deleteAppointmentQuery = $conn->prepare("DELETE FROM Appointments WHERE Email = :Email");
        $deleteAppointmentQuery->bindParam(':Email', $Email);

        $deleteAllAppointmentsQuery = $conn->prepare("TRUNCATE TABLE Appointments");
       
    }catch(PDOException $e){

        die($e->getMessage());

    }

?>