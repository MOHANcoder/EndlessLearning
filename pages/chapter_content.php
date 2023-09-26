<?php
    $page = array(
        "sub_heading" => "Variables",
        "img_url" => "bday2.jpg",
        "main_content" => "idfgbvisgfbviou gviujhbgdfuy ugyyyyyyyyyyyyyy yyyyyyyyyyyyyy yyyyyyyyyyyyyyyyyyyyy yyyyyyyyyyyyyyyyyy yyyyyyyyyyyyyyyyyyy yyvddocaiusgvsi uygfgfuhgfvo egfcw8ouvvv vvvvvvvvvvvvvvv8 7wwwwww87rgccccgf xyrgfbciwuhfiuh fcm;aoeiikoaaaaaaaa aaaaaaaaaa aaaaaaaaaaaaaaa aaaaaaaaaa aaaaaaaaaaaaaa aienccccc ccccccccccccccccc ccccccccccccc cc",
        "tips" => "Ykhdfhsfih sifhisd hsfyubsdgf uygdiyuf uygfdiuyds"
    );
?>

<main>
    <?php
        foreach($page as $page_element_type => $page_element_content){
            echo "<section class='{$page_element_type}'>";
            if($page_element_type == "sub_heading"){
                echo "<h2>$page_element_content</h2>";
            }elseif($page_element_type == "img_url"){
                echo "<img src='{$page_element_content}'/>";
            }elseif($page_element_type == "tips"){
                echo "<h3>NOTE</h3><p>$page_element_content</p>";
            }else{
                echo "$page_element_content";
            }
            echo "</section>";
        }
    ?>
</main>