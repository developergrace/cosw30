<?php
    $type = $_POST['type'];
    
    if($type == 'login') {
        //Capture the data from our form
        $email = $_POST['email'];
        $password = $_POST['password']; 
        
        //Create variables to match email and password
        $correct_email = 'test@test.com';
        $correct_password = 'supersecure123';
        
        if($email == $correct_email && $password == $correct_password) {
        //Successful - check password
        echo '<h1>You logged in successfully!</h1>';
        echo "<p>Email Address: $email</p>";
        echo "<p>Password: $password</p>";
        }
        
        else {
        //Error - output an error message
        echo '<h1>Sorry, try again</h1>';
        echo '<a href="login.php">Go back</a>';
        }
    }
    
    if($type == 'register') {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name']; 
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_pass = $_POST['confirm_pass'];
       
        if($password != $confirm_pass) {
            echo '<p>Your passwords do not match!</p>';
            echo '<p><a href="login.php">Go back</a></p>';
        }
            
        else {
            echo "<p>You have successfully registered!</p>";
            echo "<p>First Name: $first_name</p>";
            echo "<p>Last Name: $last_name</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Password: $password</p>";
        }    
    }
?>