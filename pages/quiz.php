<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/chapter_header.css">
    <link rel="stylesheet" href="../styles/chapter_content.css">
    <title>Quiz</title>
</head>
<body>
    <?php
        include("chapter_header.php");
    ?>
    <form action="quiz.php" method="post">
    <?php
        foreach($page as $page_element_type => $page_element_content){
            echo "<section class='{$page_element_type}'>";
            if($page_element_type == "sub_heading"){
                echo "<h2>$page_element_content</h2>";
            }elseif($page_element_type == "question"){
                echo "<h3>$page_element_content</h3>";
            }elseif($page_element_type == "options"){
                foreach($page_element_content as $i => $option){
                    echo "<div class='option'>";
                    echo "<input type='radio' name='quiz' value='$option' id='option$i'/>";
                    echo "<label for='option$i'>$option</label>";
                    echo "</div>";
                }
            }elseif($page_element_type == "button"){
                echo "<input type='submit' value='submit'/>";
            }
            echo "</section>";
        }
    ?>
    </form>
</body>
</html>