<?php

    session_start();
    if(!$_SESSION["UserName"]){
        session_unset();
        session_destroy();
        header("location: admin.php");
    }
    include("connection.php");

    $Email = $_GET["Email"];

    if($Email == "All"){
        
        try{
            $deleteAllAppointmentsQuery->execute();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
        
        header("location: adminProfile.php");
    }

    try{

        $deleteAppointmentQuery->execute();

    }
    catch(PDOException $e){
        die($e->getMessage());
    }

    header("location: adminProfile.php");

?>
