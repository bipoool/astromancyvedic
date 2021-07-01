<?php

    $server = "localhost";
    $username = "root";
    $password = "";

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

        //const $query = $addAppointMentQuery;

    }catch(PDOException $e){

        die($e->getMessage());

    }


?>