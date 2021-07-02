<?php

    $server = "localhost";
    $username = "root";
    $password = "";

    try{
        $conn = new PDO("mysql:host=$server;dbname=AstromancyVedic", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $addAdminQuery = $conn->prepare("INSERT INTO Users (Name, Email, Password) VALUES (:Name, :Email, :Password)");
        $addAdminQuery->bindParam(':Name', $Name);
        $addAdminQuery->bindParam(':Email', $Email);
        $addAdminQuery->bindParam(':Password', $Password);

        $loginAdminQuery = $conn->prepare("SELECT Password, Name FROM Users Where Email = :Email");
        $loginAdminQuery->bindParam(':Email', $Email);


        

    }catch(PDOException $e){
        die($e->getMessage());
    }


?> 