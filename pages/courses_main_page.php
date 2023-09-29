<?php
$courses = array(
    "Javascript" => array(
        "thumbnail" => "bday2.jpg",
        "chapters" => 5,
        "time" => 5.0,
        "instructor" => "Good Teacher"
    ),
    "Javascript2" => array(
        "thumbnail" => "bday2.jpg",
        "chapters" => 5,
        "time" => 5.0,
        "instructor" => "Good Teacher"
    ),
    "Javascript3" => array(
        "thumbnail" => "bday2.jpg",
        "chapters" => 5,
        "time" => 5.0,
        "instructor" => "Good Teacher"
    ),
    "Javascript4" => array(
        "thumbnail" => "bday2.jpg",
        "chapters" => 5,
        "time" => 5.0,
        "instructor" => "Good Teacher"
    ),
);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/header.css">
    <title>Courses</title>
    <style>
        header h1{
            font-style: italic;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        main{
            padding: 2vh 2vh;
            display: grid;
            grid-template-columns: repeat(auto-fit,minmax(200px,1fr));
            place-content: center;
            gap: 4rem;
        }

        .card{
            display: flex;
            flex-direction: column;
            border: 2px ridge;
            padding: 10px;
        }

        .card h3{
            font-family: Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-transform: capitalize;
            text-align: center;
        }

        .card div{
            background-color: rgb(255, 220, 254);
            padding: 2px 7px;
        }

        .no-of-chapters{
            float: left;
        }

        .duration{
            float: right;
        }

        .card div span{
            font-weight: bolder;
        }

        .instructor{
            text-align: center;
            padding: 2px 7px;
            font-weight: 700;
            font-style: italic;
        }

        .card:hover{
            box-shadow: 0px 0px 5px 0px orange;
        }

        .enroll{
            text-align: center;
            padding: 5px;
            text-decoration: none;
            background-color: rgb(244, 178, 227);
        }
    </style>
</head>

<body>
    <header>
        <h1>EndlessLearning</h1>
        <nav>
            <a href="../index.php">Home</a>
            <a href="about.php">About</a>
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
    <main>
        <?php
        foreach ($courses as $name => $course) {
            $thumbnail = $course["thumbnail"];
            $chapters = $course["chapters"];
            $time = $course["time"];
            $instructor = $course["instructor"];
            echo "<div class='card'>";
            echo "<img src='$thumbnail' />";
            echo "<h3>$name</h4>";
            echo "<div>";
            echo "<span class='no-of-chapters'>Chapters : $chapters</span>";
            echo "<span class='duration'>Duration : $time Hrs</span>";
            echo "</div>";
            echo "<span class='instructor'>Instructor : $instructor</span>";
            echo "<a class='enroll' href=''>Enroll</a>";
            echo "</div>";
        }
        ?>
    </main>
</body>

</html>