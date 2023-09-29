<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="../styles/signup.css">
</head>

<body>
    <form action="signup.php" method="post">
        <h1>Sign Up</h1>
        <div class="name">
            <label for="name">Name</label>
            <br />
            <input type="text" name="name" id="name" placeholder="name" required />
            <div class="error-box"></div>
        </div>
        <div class="email">
            <label for="email">Email ID</label>
            <br />
            <input type="email" name="email" id="email" placeholder="email address" required />
            <div class="error-box"></div>
        </div>
        <div class="pass">
            <label for="pass">Password</label>
            <br />
            <input type="password" name="pass" id="pass" placeholder="your password" required/>
            <div class="error-box"></div>
        </div>
        <div class="submit">
            <input type="submit" name="signup" value="Sign Up" />
            <div class="error-box"></div>
        </div>
        <div class="login-url">
            Already have an account? <a href="login.php">login</a>
        </div>
    </form>
</body>

</html>

<?php

    if(isset($_POST["signup"])){
        $username = filter_input(INPUT_POST,"name",FILTER_SANITIZE_SPECIAL_CHARS);
        $useremail = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST,"pass");

        $errors = array();

        if(empty($username)){
           array_push($errors,"Invalid username");
        }

        if(empty($useremail)){
            array_push($errors,"Invalid email");
        }

        if(empty($password)){
            array_push($errors,"Invalid password");
        }

        if(count($errors) == 0){
            $hashed_password = password_hash($password,PASSWORD_DEFAULT);

            $sql = "INSERT INTO User (username,password,email) VALUES ('$username','$hashed_password','$useremail')";
            try{
                mysqli_query($conn,$sql);
                $_SESSION["user_id"] = mysqli_insert_id($conn);
                $_SESSION["user_name"] = $username;
                header("Location: ../index.php");
                exit();

            }catch(mysqli_sql_exception $e){
                echo "user not registered";
            }

            mysqli_close($conn);
        }
    }
?>