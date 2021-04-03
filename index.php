<?php
require_once("./database/connect.php"); //calling the connect.php
    $username = $email = $pass = $cpass = "";
    $errorusername =  $erroremail = $errorpass = $errorcpass = "";

 if(isset($_POST["btn"])){
     $error = 0;

    //  if(!is_numeric($_POST["contact"])){
    //      $error++;
    //      $errorcontact = "Please input numerical characters only!";
    //  }

     //form validation - number and null value

     if($error == 0){
         $username = $_POST["username"];
        //  $firstname = $_POST["firstname"];
        //  $lastname  = $_POST["lastname"];
         $email     = $_POST["email"];
         //$contact   = $_POST["contact"];
         $pass      = $_POST["pass"];
         $cpass     = $_POST["cpass"];

        //  echo $firstname . "<br>";
        //  echo $lastname . "<br>";
        //  echo $email . "<br>";
        //  echo $contact . "<br>";
        //  echo $pass . "<br>";
        //  echo $cpass . "<br>";

        //inserting the data in the database
        $sql = "INSERT INTO users_personal_data(username, email, pass, cpass) VALUES ('$username','$email','$pass','$cpass')";
        if(mysqli_query($connect, $sql)){
       
            echo "<script language='javascript'>alert('Successfully Registered! Click ok to Sign In.')</script>";
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
<html lang="en">
    <head>

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

            <script
                src="https://kit.fontawesome.com/64d58efce2.js"
                crossorigin="anonymous"
            ></script>

                <link rel="stylesheet" href="css/style.css" />
                    <title> iRegister </title>
    </head>   
    <body>
        <div>
            <?php
                if(isset($_POST['btn'])){
                    $username   = $_POST['username'];
                    // $firstname  = $_POST['firstname'];
                    // $lastname   = $_POST['lastname'];
                    $email      = $_POST['email'];
                    //$contact    = $_POST['contact'];
                    $pass       = $_POST['pass'];
                    $cpass      = $_POST['cpass'];

                    // echo $firstname . " " . $lastname . " " . $email. " " . $contact . " " . $pass . " " . $cpass;
                }
            ?>
        </div>

            <div class="container">
                    <div class="forms-container">
                        <div class="signin-signup">

                            <form action="secondpage.php" class="sign-in-form">
                                <h2 class="title">Sign in</h2>
                                    <div class="input-field">
                                        <i class="fas fa-user"></i>
                                        <input type="text" placeholder="Username" required/>
                                    </div>
                                    <div class="input-field">
                                        <i class="fas fa-lock"></i>
                                        <input type="password" placeholder="Password" name="pass" required/>
                                    </div>
                                    <input type="submit" value="Login" name="btn2" class="btn solid" />
                            </form>

                            <form method= "post" action= "<?php $_PHP_SELF?>" class="sign-up-form">
                        
                                        <h1> Sign Up </h1>
                                        <hr class="mb-3">
                                        <div class="input-field">
                                            <i class="fas fa-user"></i>
                                            <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username" required />
                                            <?php echo $errorusername; ?>
                                        </div>
                                        <div class="input-field">
                                            <i class="fas fa-envelope"></i>
                                            <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email" required />
                                            <?php echo $erroremail; ?>
                                        </div>
                                        <div class="input-field">
                                            <i class="fas fa-lock"></i>
                                            <input type="password" name="pass" placeholder="Password" required />
                                            <?php echo $errorpass; ?>
                                        </div>
                                        <div class="input-field">
                                            <i class="fas fa-lock"></i>
                                            <input type="password" name="cpass" placeholder="Confirm Password" required />
                                            <?php echo $errorcpass; ?>
                                        </div>
                                        <hr class="mb-3">
                                        <input class="btn btn-primary" type="submit" name="btn" class="btn" id = "register1" value="Sign Up" />

                            </form>
                        </div>
                    </div>    
                <div class="panels-container">
                    <div class="panel left-panel">
                        <div class="content">
                            <h3>Doesn't have an account yet ?</h3>
                            <p>
                                Click here to Sign Up!
                            </p>
                                <button class="btn transparent" id="sign-up-btn">
                                    Sign up
                                </button>
                        </div>
                            <img src="img/log.svg" class="image"/>
                    </div>
                    <div class="panel right-panel">
                        <div class="content">
                                <h3>Has an account already ?</h3>
                                <p>
                                    Click here to Sign In.
                                </p>
                                <button class="btn transparent" id="sign-in-btn">
                                    Sign in
                                </button>
                        </div>
                            <img src="img/register.svg" class="image"/>
                    </div>
                </div>
            </div>
            
      <script src="statics/app.js"></script>
    </body>
</html>

