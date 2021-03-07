<?php
require_once("./database/connect.php"); //calling the connect.php
    $firstname = $lastname = $email = $contact = $pass = $cpass = "";
    $errorfirstname = $errorlastname = $erroremail = $errorcontact = $errorpass = $errorcpass = "";

 if(isset($_POST["btn"])){
     $error = 0;

     if(!is_numeric($_POST["contact"])){
         $error++;
         $errorcontact = "Please input numerical characters only!";
     }

     //form validation - number and null value

     if($error == 0){
         $firstname = $_POST["firstname"];
         $lastname  = $_POST["lastname"];
         $email     = $_POST["email"];
         $contact   = $_POST["contact"];
         $pass      = $_POST["pass"];
         $cpass     = $_POST["cpass"];

        //  echo $firstname . "<br>";
        //  echo $lastname . "<br>";
        //  echo $email . "<br>";
        //  echo $contact . "<br>";
        //  echo $pass . "<br>";
        //  echo $cpass . "<br>";

        //inserting the data in the database
        $sql = "INSERT INTO datatable(firstname, lastname, email, contact, pass, cpass) VALUES ('$firstname','$lastname','$email','$contact','$pass','$cpass')";
        if(mysqli_query($connect, $sql)){
       
            echo "<script language='javascript'>alert('New record has been inserted!')</script>";
            echo "<script>window.location.href='index.php';</script>";
       
        }
        else{
       
            echo "error" . $sql . "<br>" . mysqli_error($connect);
       
        }
       
        mysqli_close($connect);  //it is always closing the database connection
     }
 }

?>




<!DOCTYPE html>
<html>
<head>
    <title> iRegister </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>   
    <body>
        <center>
            <div>
                <?php
                    if(isset($_POST['btn'])){
                        $firstname  = $_POST['firstname'];
                        $lastname   = $_POST['lastname'];
                        $email      = $_POST['email'];
                        $contact    = $_POST['contact'];
                        $pass       = $_POST['pass'];
                        $cpass      = $_POST['cpass'];

                        // echo $firstname . " " . $lastname . " " . $email. " " . $contact . " " . $pass . " " . $cpass;
                    }
                ?>
            </div>
            <div>
                <form method = "POST" action = "<?php htmlspecialchars("PHP_SELF"); ?>">
                    <div class="container"> 
                        <div clas="row">
                            <div class="col-sm-3">
                                <h1> Registration</h1>
                                <p> Fill up the form with correct values </p>
                                <hr class="mb-3">
                                <label for="firstname"><b>First Name</b></label>
                                <input class="form-control" type="text" name="firstname" required>
                                <?php echo $errorfirstname; ?>
                    
                                <label for="lastname"><b>Last Name</b></label>
                                <input class="form-control" type="text" name="lastname" required>
                                <?php echo $errorlastname; ?>
                    
                                <label for="email"><b>Email Address</b></label>
                                <input class="form-control" type="email" name="email" required>
                                <?php echo $erroremail; ?>
                    
                                <label for="contact"><b>Phone Number</b></label>
                                <input class="form-control" type="text" name="contact" required>
                                <?php echo $errorcontact; ?>
                    
                                <label for="pass"><b>Password</b></label>
                                <input class="form-control" type="password" name="pass" required>
                                <?php echo $errorpass; ?>
                    
                                <label for="cpass"><b>Confirm Password</b></label>
                                <input class="form-control" type="password" name="cpass" required>
                                <?php echo $errorcpass; ?>
                    
                                <hr class="mb-3">
                                <input class="btn btn-primary" type="submit" name="btn" value="register">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </center>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src = "//cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script type = "text/javascript">
        $(function(){
            //alert('hello.');
            swal.fire({
                'title':'Successfully Registered!',
                'text' :'Click here to continue',
                'type' : 'success'
            })
        });
        </script>
    </body>
</html>
