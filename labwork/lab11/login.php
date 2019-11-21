<?php
include('includes/header.php');
include('includes/database.php');
// Check if the user is already logged in
// If they are, redirect to welcome.php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Grab values from the form inputs
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Validate the form data
    // Check if the user's email and password are in the database
    $query = "";
    $result = mysqli_query($connection, $query);
    // If they are, log them in
    if($result) {
        // Add their user id to the $_SESSION
        // Redirect to the welcome.php page
    // If they aren't, show the log in form with an error
    } else { 
    }
} // END of $_SERVER['REQUEST_METHOD']
?>

<main class="container">

<div class="card bg-light mb-3 m-auto">
    <div class="card-header">Login Form</div>
    <div class="card-body">
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

</main>

<?php include('includes/footer.php'); ?>