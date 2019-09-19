<?php
    $numParagraphs = $_POST['paragraphs'];
    $text = $_POST['text'];
    $textExplode = explode(' ', $text);
    shuffle($textExplode);
    
    ////implode method
    $textImplode = implode(' ', $textExplode);
    
    //foreach method
    foreach($textExplode as $key => $value) {
        echo "<p>$key Value: $value</p>";
    }
    
    for($i = 0; $i < $numParagraphs; $i++) {
        //output a paragraph
        echo "<p>$textImplode</p>";
    }

?>