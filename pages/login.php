<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
            font-family: Arial, Helvetica, sans-serif;
        }

        form {
            display: flex;
            width: 45vw;
            height: 60vh;
            max-width: 500px;
            flex-direction: column;
            justify-content: space-around;
            border-radius: 20px;
            gap: 5vh;
            padding: 10vh 50px;
            box-shadow: 0px 0px 8px 0px grey;
            align-items: center;
            /* background-color: ; */
        }

        form div {
            width: 100%;
            height: 5vh;
        }

        input {
            height: 100%;
            width: 100%;
            font-size: large;
        }

        .signup-url {
            text-align: center;
        }

        .error-box {
            color: red;
        }
    </style>
</head>

<body>
    <form action="login.php" method="post">
        <h1>Login</h1>
        <div class="email">
            <label for="email">Email ID</label>
            <br />
            <input type="email" name="email" id="email" placeholder="email address" required />
            <div class="error-box"></div>
        </div>
        <div class="pass">
            <label for="pass">Password</label>
            <br />
            <input type="password" name="pass" id="pass" placeholder="your password" required />
            <div class="error-box"></div>
        </div>
        <div class="submit">
            <input type="submit" name="login" value="Login" />
            <div class="error-box"></div>
        </div>
        <div class="signup-url">
            Don't have an account? <a href="signup.php">signup</a>
        </div>
    </form>
</body>

</html>

<?php
include("database.php");
session_start();
if (isset($_POST["login"])) {
    // $username = filter_input(INPUT_POST,"name",FILTER_SANITIZE_SPECIAL_CHARS);
    $useremail = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, "pass");

    $errors = array();

    // if(empty($username)){
    //    array_push($errors,"Invalid username");
    // }

    if (empty($useremail)) {
        array_push($errors, "Invalid email");
    }

    if (empty($password)) {
        array_push($errors, "Invalid password");
    }

    if (count($errors) == 0) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "SELECT * FROM USER WHERE email = '$useremail'";
        try {
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) == 1) {
                $user_details = mysqli_fetch_assoc($result);
                if(password_verify($password,$user_details["password"])){
                    $_SESSION["user_id"] = $user_details["user_id"];
                    $_SESSION["user_name"] = $user_details["username"];
                    header("Location: ../index.php");
                    exit();
                }
                
            }else{
                echo "Invalid credentials";
            }
        } catch (mysqli_sql_exception $e) {
            echo "user not found";
        }

        mysqli_close($conn);
    }
}
?>