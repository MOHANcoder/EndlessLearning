<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="../styles/signup.css">
</head>

<body>
    <form action="index.php" method="post">
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

    if(isset($_POST["submit"])){
        foreach($_POST as $key => $value){
            echo "{$key} => {$value} <br/>";
        }
    }
?>