<?php

    include("connection.php");

    $NameError = "";
    $EmailError = "";

    function validateData($data){
        $data = trim(stripslashes($data));
        return $data;
    }

    if(isset($_POST["Submit"])){
        
        if($_POST["Name"]){
            $Name = $_POST["Name"];
            $Name = validateData($Name);
            $Name = filter_var($Name, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        }
        else{
            $NameError = "Plz Enter Name";
        }

        if($_POST["Email"]){
            $Email = $_POST["Email"];
            $Email = validateData($Email);
            $Email = filter_var($Email, FILTER_SANITIZE_EMAIL);
            if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
                $EmailError = "Plz Enter a Valid Email";
            }
        }
        else{
            $EmailError = "Plz Enter Email";
        }

        if($_POST["Number"]){
            $Number = $_POST["Number"];
            $Number = validateData($Number);
            if (!filter_var($Number, FILTER_VALIDATE_INT)){
                $NumberError = "Number is not valid";
            } 

        }
        else{
            $NumberError = "Plz Enter Number";
        }

        if($_POST["BirthPlace"]){
            $BirthPlace = $_POST["BirthPlace"];
            $BirthPlace = validateData($BirthPlace);
            $BirthPlace = filter_var($BirthPlace, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        }
        else{
            $BirthPlaceError = "Plz Enter BirthPlace";
        }

        if($_POST["TimeOfBirth"]){
            $TimeOfBirth = $_POST["TimeOfBirth"];
            $TimeOfBirth = validateData($TimeOfBirth);
        }
        else{
            $TimeOfBirthError = "Plz Enter TimeOfBirth";
        }

        if($_POST["DateOfBirth"]){
            $DateOfBirth = $_POST["DateOfBirth"];
            $DateOfBirth = validateData($DateOfBirth);
        }
        else{
            $DateOfBirthError = "Plz Enter DateOfBirth";
        }

        if($_POST["DateOfAppointment"]){
            $DateOfAppointment = $_POST["DateOfAppointment"];
            $DateOfAppointment = validateData($DateOfAppointment);
        }
        else{
            $BookingDateError = "Plz Enter BookingDate";
        }

        if(!$NameError && !$EmailError && !$NumberError && !$BirthPlaceError && !$TimeOfBirthError && !$BookingDateError && !$DateOfBirthError){

            try{
                $addAppointMentQuery->execute();
            }
            catch(PDOException $e){
                die("There is some Error! Try again");
            }
            header("location: index.php?Booked=true");
        }

    }

    //including navbar(includes/navbar.php)
    include("includes/navbar.php");

?>

        <!-- Masthead-->
        <header class="masthead">
            
        <div class="container position-relative row justify-content-center">
            <h2 class="text-center">Enter Details</h2>

            <form class = "col-lg-4 col-sm-6 col-xs-8 col-lg-offset-4 col-sm-offset-3 col-xs-offset-2" action = '<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>' method = "POST">
                <br>
                <div class="mb-3">
    
                    <div class= "alert-danger"><?php echo $NameError ?></div>
                    <input type="text" class="form-control gray-bg gray-text" placeholder="Name.." name = "Name" value = "<?php echo $_POST['Name']; ?>">

                </div>

                <div class="mb-3">

                    <div class= "alert-danger"><?php echo $EmailError ?></div>
                    <input type="email" class="form-control gray-bg gray-text" placeholder="Email.." name = "Email" value = "<?php echo $_POST['Email']; ?>">

                </div>

                <div class="mb-3">

                    <div class= "alert-danger"><?php echo $NumberError ?></div>
                    <input type="text" class="form-control gray-bg gray-text" placeholder="Mobile Number.." name = "Number" value = "<?php echo $_POST['Number']; ?>">

                </div>

                <div class="mb-3">

                    <div class= "alert-danger"><?php echo $BirthPlaceError ?></div>
                    <input type="text" class="form-control gray-bg gray-text" placeholder="BirthPlace.." name = "BirthPlace" value = "<?php echo $_POST['BirthPlace']; ?>">

                </div>

                <div class="mb-3">
                
                    <label for="exampleInputEmail1" class="form-label text-white">Time Of Birth</label>
                    <div class= "alert-danger"><?php echo $TimeOfBirthError ?></div>
                    <input type="time" class="form-control gray-bg gray-text" name = "TimeOfBirth" value = "<?php echo $_POST['TimeOfBirth']; ?>">

                </div>

                <div class="mb-3">
                
                    <label for="exampleInputEmail1" class="form-label text-white">Date Of Birth</label>
                    <div class= "alert-danger"><?php echo $DateOfBirthError ?></div>
                    <input type="date" class="form-control gray-bg gray-text" placeholder="Booking Date" name = "DateOfBirth" value = "<?php echo $_POST['DateOfBirth']; ?>">

                </div>

                <div class="mb-3">
                
                    <label for="exampleInputEmail1" class="form-label text-white">Booking Date</label>
                    <div class= "alert-danger"><?php echo $BookingDateError ?></div>
                    <input type="date" class="form-control gray-bg gray-text" placeholder="Booking Date" name = "DateOfAppointment" value = "<?php echo $_POST['DateOfAppointment']; ?>">

                </div>

                <input type="submit" class="btn btn-info btn-lg center-content" value="Book Now" name = "Submit">

            </form>
        </div>
                        
        </header>
        
<?php

include("includes/footer.php")

?>
