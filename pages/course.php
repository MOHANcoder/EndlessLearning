<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course</title>
    <link rel="stylesheet" href="../styles/course.css">
</head>
<body>
    <?php
        $course_name = "Javascript";
        $chapters = array(
            array(
                "name" => "introduction",
                "image_url" => "src.jpg",
                "chapter_link" => "link"
            ),
            array(
                "name" => "variables",
                "image_url" => "src.jpg",
                "chapter_link" => "link"
            ),
            array(
                "name" => "control structure",
                "image_url" => "src.jpg",
                "chapter_link" => "link"
            ),
            array(
                "name" => "functions",
                "image_url" => "src.jpg",
                "chapter_link" => "link"
            )
        );
    ?>
    <header>
        <h1><?php echo "{$course_name}"?></h1>
    </header>
    <main>
    <?php
        foreach($chapters as $chapter){
            echo "<div class='chapter'>";
            echo "<img src={$chapter['image_url']}/>";
            echo "<a href={$chapter['chapter_link']}>{$chapter['name']}</a>";
            echo "</div>";
        }
    ?>
    </main>
</body>
</html>