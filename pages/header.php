<header>
    <h1>EndlessLearning</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="./pages/about.php">About</a>
        <a href="./pages/courses_main_page.php">Courses</a>
        <a href="./pages/signup.php">
        <?php
            session_start();
            if(isset($_SESSION["user_id"])){
                echo $_SESSION["user_name"];
            }else{
                echo "Register";
            }
        ?>
        </a>
    </nav>
</header>