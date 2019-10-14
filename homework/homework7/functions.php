<?php
    function calculate($a = 0, $b = 0) {
        return ($a + $b);
    }
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
?>

<!doctype HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Homework 7: Functions</title>
        <style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
                background-color: darkgray;
            }

            .results {
                margin-bottom: 1em;
                padding: 50px 10px;
                background-image: linear-gradient(to right bottom, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
                background-color: #d16ba5;
                border-radius: 5px;
                font-size: 2.5em;
                color: white;
            }

            main {
                margin: 10% 25%;
                text-align: center;
                background-color: rgba(255,255,255,.8);
                border-radius: 10px;
                padding: 25px 10px 75px;
            }

            input, select {
                font-size: 1em;
            }

        </style>
    </head>

    <body>
        <main>
            <h1>Calculator</h1>

            <div class="results">
                <?php
                    switch ($operator) {
                        case "add":
                            echo $num1 . " + " . $num2 . " = ";
                            echo calculate($num1+$num2);
                        break;
                        case "subtract":
                            echo $num1 . " - " . $num2 . " = ";
                            echo calculate($num1-$num2);
                        break;
                        case "multiply":
                            echo $num1 . " x " . $num2 . " = ";
                            echo calculate($num1*$num2);
                        break;
                        case "divide":
                            echo $num1 . " / " . $num2 . " = ";
                            echo calculate($num1/$num2);
                        break;
                    }
                ?>
            </div>

            <form action="functions.php" method="post">
                <input type="number" name="num1" placeholder="Enter Number">
                <select name="operator">
                    <option value="" selected disabled> Select Operator</option>
                    <option value="add"> + </option>
                    <option value="subtract"> - </option>
                    <option value="multiply"> x </option>
                    <option value="divide"> / </option>
                </select>
                <input type="number" name="num2" placeholder="Enter Number">
                <input type="submit" value="Calculate">
            </form>

        </main>
    </body>
</html>