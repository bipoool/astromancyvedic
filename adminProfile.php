<?php

    session_start();
    if(!$_SESSION["UserName"]){
        session_unset();
        session_destroy();
        header("location: admin.php");
    }
    include("connection.php");

    //including navbar
    include("includes/navbar.php");

    try{

        $allAppointMentQuery->execute();
        $result = $allAppointMentQuery->fetchAll();

    }
    catch(PDOException $e){
        die($e->getMessage());
    }

    echo "<table class = 'table table-hover'><tr><th>Name</th><th>Email</th><th>Number</th><th>DateOfBooking</th><th>DateOfAppointment</th><th>DateOfBirth</th><th>TimeOfBirth</th><th>BirthPlace</th><th>Edit</th></tr>";
    
    
    foreach($result as $key){
        echo "<tr><td>" . $key["Name"] . "</td><td>" . $key["Email"] . "</td><td>" . $key["Number"] . "</td><td>" . $key["DateOfBooking"] ."</td><td>" . $key["DateOfAppointment"] . "</td><td>" . $key["DateOfBirth"] . "</td><td>" . $key["TimeOfBirth"] . "</td><td>" . $key["BirthPlace"] . "</td><td><a href='delete.php?Email=" . $key["Email"] . "'class = 'btn btn-outline-danger btn-sm'><i class='bi bi-trash-fill'></i></a></td>" . "</tr>";
    }
    
    
    echo "</table>";
    echo "<div class='d-grid gap-2 col-2 mx-auto'>
            <a class = 'btn btn-danger center-block' href='delete.php?Email=All'>DELETE ALL!!</a>
          </div>";

?>




<?php

    include("includes/footer.php");

?>














