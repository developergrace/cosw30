<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Activity 1: Favorite Quote</title>
    </head>
    
    <body>
        <?php
            $text = $_POST['text'];
            $trimmed = trim($text); //omits whitespace before/after input when using count()
            $wordCount = str_word_count($trimmed,0);
            $textArray = explode(' ', $trimmed); //converts to array
            
            if ($wordCount < 5) {
                echo "<p>You have not entered at least 5 words separated by a space, please <a href=\"https://cosw30-grace.herokuapp.com/homework/homework4/quote.html\">go back</a> and resubmit.</p>";
            }
    
            else {
                echo "<h1>Favorite Quote Results Page</h1>";
                echo "<p><b>You entered:</b></p>";
                foreach($textArray as $key => $value) {
                    echo "<p>$value</p>";
                }
                echo "<p>(Your entry consists of $wordCount words)</p>";
        
                echo "<p><b>Your entry alphabetized:</b></p>";
                asort($textArray);
                foreach($textArray as $key => $value) {
                    echo "<p>$value</p>";
                }
                
                echo "<p><b>Your entry reverse alphabetized:</b></p>";
                arsort($textArray);
                foreach($textArray as $key => $value) {
                    echo "<p>$value</p>";
                }
                
                echo "<p><b>Your entry with three new words added:</b></p>";
                ksort($textArray);
                array_push($textArray,"veggie","patty","burgers");
                foreach($textArray as $key => $value) {
                    echo "<p>$value</p>";
                }
                echo "<p>(This entry consists of " . count($textArray) . " words)</p>";
                
                echo "<p><b>Your entry with the first three words omitted:</b></p>";
                ksort($textArray);
                array_splice($textArray,0,3);
                foreach($textArray as $key => $value) {
                    echo "<p>$value</p>";
                }
                echo "<p>(This entry consists of " . count($textArray) . " words)</p>";
                
                echo "<p><a href=\"https://cosw30-grace.herokuapp.com/homework/homework4/quote.html\">Enter another quote!</a></p>";
            }
        ?>
    </body>
</html>