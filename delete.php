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

?>

<div class="delete-confirm container d-grid gap-2 col-4 mx-auto">

    <h3>Are You Sure You Want To Delete Appointment of:<br> <?php echo $_GET["Email"] ?></h3>
    <a href="deleteConfirmed.php?Email=<?php echo $_GET['Email'] ?>" class="btn btn-outline-dark btn-sm">Delete</a>
    <a href="adminProfile.php" class="btn btn-outline-danger btn-sm">Cancel</a>

</div>


<?php

    include("includes/footer.php");

?>














