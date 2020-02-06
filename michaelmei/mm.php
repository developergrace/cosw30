<?php 
    if(isset($_POST['submit'])) {
        $to = "gpark2351@gmail.com"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $street = $_POST['street'];
        $city = $_POST['city'];
        $zip = $_POST['zip'];
        $ticket = $_POST['ticket'];

        $subject = "[Onward] " . $first_name . " Made a Reservation";
        $subject2 = "REMINDER: Onward Ticket Reservation";
        $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $email . " " . $street . " "
        . $phone . " " . $city . " " . $zip . " " . $ticket;
        $message2 = "Thank you " . $first_name . " for reserving your tickets for Onward, hosted by the 
        Michael Mei Real Estate Group. Please remember to pick up your ticket(s) at our office between March 1 and 
        March 6. ";

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
        echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
        // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Michael Mei | Onward</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="mmstyle.css">
    </head>

    <body>
        <header>
            <img src="mm_logo.png" alt="Michael Mei Logo" id="logo">
        </header>

        <main>
            <form action="" method="post">
                <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                <input type="tel" class="form-control" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Phone (010-888-8888)" required>
                <input type="email" class="form-control" name="email" placeholder="Email" required>
                
                <input type="text" class="form-control" name="street" placeholder="Street" required>
                <input type="text" class="form-control" name="city" placeholder="City" required>
                <input type="text" class="form-control" name="zip" pattern="[0-9]*" placeholder="Zip" required>

                <select class="form-control" name="tickets" required>
                    <option value="1">1</option><option value="2">2</option><option value="3">3</option>
                    <option value="4">4</option><option value="5">5</option>
                </select>

                <button type="submit" class="btn btn-primary">Reserve Tickets</button>
            </form>
        </main>

        <footer>
            <p>4010 Barranca Parkway #100 Irvine, CA 92604 | (818) 395-3480</p>
        </footer>

    </body>
</html> 