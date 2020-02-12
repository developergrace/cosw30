<!doctype HTML>
<html>
    <head>
        <title>Thank You!</title>
        <meta charset="utf-8">
        <link href="cstyle.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Adamina|Lato&display=swap" rel="stylesheet">
    </head>
    <body>
        <main>
            
            <?php
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $email = $_POST['email'];
                $gender = $_POST['gender'];
                $age = $_POST['age'];
                $contribution = $_POST['contribution'];
                $comments = $_POST['comments'];
                
                //Check for Empty Fields
                if(!empty($first_name && $last_name && $email && $gender && $age)) {

                    //Intro Messsage
                    echo "<h1>Thank you for your support!</h1>";
                    echo "<p>Your support is most appreciated $first_name $last_name.</p>";
                    echo "<p>You indicated that you identify as $gender between the ages of $age.</p>";
            
                    //Email and Mailing List Confirmation
                    if(!empty($_POST['mailing'])) {
                        echo "<p>You have signed up for our mailing list. We will send updates to your email at $email.</p>";
                    }
                    else {
                        echo "<p>We will send a confirmation email to you at $email. You have not signed up for our mailing list.</p>"; 
                    }
        
                    //Interests
                    if(!empty($_POST['interests'])) {
                        echo "<p>You indicated that you are interested in the following:</p>";
                        foreach($_POST['interests'] as $check) {
                            echo "<p>$check</p>";
                        }
                    }
                    else {
                        echo "<p>You did not indicate any interests.</p>"; 
                    }
        
                    //Contribution
                    if(!empty($_POST['contribution'])) {
                        echo "<p>Thank you for your contribution amount of $contribution!</p>";
                    }
                    else {
                        echo "<p>You did not make a contribution.</p>"; 
                    }
        
                    //Comments
                    if(!empty($_POST['comments'])) {
                        echo "<p>Thank you for your comment of:</p>";
                        echo "<p>$comments</p>";
                        echo "<p>We will review your comment and respond when we are able to.</p>";
                    }
                    else {
                        echo "<p>You did not leave any comments.</p>"; 
                    }
                }
                
                else {
                    echo "<p>You have incomplete form fields</p>";
                    echo "<p>Please <a href=\"https://cosw30-grace.herokuapp.com/homework/homework2/contact.html\">go back</a> and resubmit.</p>";
                }

            ?>
            
        </main>
        <footer>
            <p>&copy; 2019 by Grace Park for COSW 30</p>
        </footer>
    </body>
</html>