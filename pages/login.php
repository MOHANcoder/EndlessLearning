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

        .error-box{
            color: red;
        }
    </style>
</head>

<body>
    <form action="index.php" method="post">
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
            <input type="password" name="pass" id="pass" placeholder="your password" required/>
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

    if(isset($_POST["submit"])){
        foreach($_POST as $key => $value){
            echo "{$key} => {$value} <br/>";
        }
    }
?>