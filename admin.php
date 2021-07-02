<?php

    //including conectionAdmin
    include("connectionAdmin.php");

     //incding the navbar(includes/navbar)
    include("includes/navbar.php");

    $EmailError = "";
    $PasswordError = "";

    function validateData($data){
        $data = trim(stripslashes($data));
        return $data;
    }

    if(isset($_POST["Submit"])){

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

        if($_POST["Password"]){
            $Password = $_POST["Password"];
            
        }
        else{
            $PasswordError = "Plz Enter Password";
        }

        if(!$EmailError && !$PasswordError){
            
            try{

                $loginAdminQuery->execute();
                $result = $loginAdminQuery->fetchAll();
                $hashedPassword = $result[0]["Password"];

            }
            catch(PDOException $e){
                die($e->getMessage());
            }
            if(password_verify($Password, $hashedPassword)){

                session_start();
                $_SESSION["UserName"] = $result[0]["Name"];
                header("location: adminProfile.php");

            }
            else{
                echo "<div class= 'alert-danger'>Wrong Email or Password</div>";
            }

        }


    }


?>

    <div class="container position-relative row justify-content-center">
        <h2 class="text-center">Enter Details</h2>

        <form class = "col-lg-4 col-sm-6 col-xs-8 col-lg-offset-4 col-sm-offset-3 col-xs-offset-2" action = '<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>' method = "POST">
            <br>
                <div class="mb-3">

                    <div class= "alert-danger"><?php echo $EmailError ?></div>
                    <input type="email" class="form-control gray-bg gray-text" placeholder="Email.." name = "Email" value = "<?php echo $_POST['Email']; ?>">

                </div>

                <div class="mb-3">

                    <div class= "alert-danger"><?php echo $PasswordError ?></div>
                    <input type="password" class="form-control gray-bg gray-text" placeholder="Password" name = "Password">

                </div><br>

                <input type="submit" class="btn btn-info btn-lg center-content" value="Login" name = "Submit">

            </form>
        </div><br><br>


<?php

    //including the footer
    include("includes/footer.php");

?>