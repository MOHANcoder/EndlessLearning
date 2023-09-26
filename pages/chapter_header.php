<?php
    $course_name = "Javascript";
    $number_of_pages = 7;
?>

<header>
    <h1><?php echo $course_name;?></h1>
    <nav>
        <?php
            for($i =0;$i<$number_of_pages;$i++){
                echo "<input type='radio' name='pagination' />";
            }
        ?>
    </nav>
    <hr/>
</header>