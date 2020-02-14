<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error_msg = [];

    if(empty($_POST['first_name'])) {
        $error_msg[0] = 'You cannot leave this field blank.';
    } else {
        $first_name = trim($_POST['first_name']);
    }

    if(empty($_POST['last_name'])) {
        $error_msg[1] = 'You cannot leave this field blank.';
    } else {
        $last_name = trim($_POST['last_name']);
    }

    if(strlen($_POST['phone']) == 0) {
        $error_msg[2] = 'You cannot leave this field blank.';
    } elseif(strlen($_POST['phone']) != 12) {
        $error_msg[8] = 'Your phone number must be 10 digits long.';
    } else {
        $phone = trim($_POST['phone']);
    }

    if(empty($_POST['email'])) {
        $error_msg[3] = 'You cannot leave this field blank.';
    } else {
        $email = trim($_POST['email']);
    }

    if(empty($_POST['street'])) {
        $error_msg[4] = 'You cannot leave this field blank.';
    } else {
        $street = trim($_POST['street']);
    }

    if(empty($_POST['city'])) {
        $error_msg[5] = 'You cannot leave this field blank.';
    } else {
        $city = trim($_POST['city']);
    }

    if(strlen($_POST['zip']) == 0) {
        $error_msg[6] = 'You cannot leave this field blank.';
    } elseif(strlen($_POST['zip']) != 5) {
        $error_msg[9] = 'Your zip must be 5 digits long.';
    } else {
        $zip = trim($_POST['zip']);
    }

    if(empty($_POST['tickets'])) {
        $error_msg[7] = 'Please select tickets.';
    } else {
        $tickets = trim($_POST['tickets']);
    }

    if(empty($error_msg)) {
        $to = "Michael Mei Real Estate Group <mmei@mmgroupoc.com>"; //update your email here
        $from = $_POST['email'];
        $subject = "[Onward] " . $first_name . " Made a Reservation"; //update YOUR email subject title
        $subject2 = "Onward Movie Private Screening with Michael Mei"; //update CLIENT's email subject title

        //this message is sent to YOU
        $message = $first_name . " " . $last_name . " reserved " . $tickets . " tickets for this event.

        Below is their contact information for your records:
        Phone: " . $phone . " 
        Email: " . $email . " 
        Street: " . $street . " 
        City: " . $city . " 
        Zip: " . $zip; 

        //this message is sent to CLIENT
        $message2 = "Hi " . $first_name . ", 

        You have reserved " . $tickets . " tickets for the Onward private screening event hosted by the Michael Mei Real Estate Group. 
        Please remember to pick up your ticket(s) at our office between March 1 and March 6 during our business hours 9AM to 5PM. Our office is located at: 
        
        Keller Williams Realty Irvine
        4010 Barranca Parkway #100 
        Irvine, CA 92604.
        
        If you have any questions, feel free to contact us at (949) 285-7818. See you soon!

        Kindly,
        Michael Mei Real Estate Group
        (949) 285-7818
        Keller Williams Realty Irvine
        4010 Barranca Pkwy #100
        Irvine, CA 92604";

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers2);

        $_SESSION['confirm'] = "<p class=\"alert\" role=\"alert\"><strong>Please check your email with instructions on how to retrieve your tickets!</strong><br><i>Check your spam folder or search email for Onward Movie Private Screening.</i></p>
        <div class=\"bordered\"></div>
        <p style=\"text-align:center; margin-top: .5em\" class=\"important\">You have successfully reserved <strong>" . $tickets . "</strong> seat(s)</p>
        <div class=\"important flex-row d-flex\"><div class=\"key\">When:</div><div class=\"col col-10\">March 7 @ 10AM*</div></div>
        <p class=\"text-success note\">*Please arrive by 9:30 AM to enter our raffle for an Apple iWatch, Razor Scooter, and more!</p>
        <div class=\"important flex-row d-flex\"><div><div class=\"key\">Where:</div></div><div class=\"col col-10\">Regal Edwards Theater at The Market Place<br>13782 Jamboree Rd, Irvine, CA 92602</div></div>
        <h1 class=\"note\">See You Soon!</h1>
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3318.4579562908884!2d-117.79281478529288!3d33.72297224245835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcdc79502f28f7%3A0xc60425fbcbdc23a1!2s13782%20Jamboree%20Rd%2C%20Irvine%2C%20CA%2092602!5e0!3m2!1sen!2sus!4v1581190876089!5m2!1sen!2sus\" width=\"300\" height=\"300\" frameborder=\"0\" style=\"border: 0\"></iframe>
        ";
        header('Location: confirm.php');
        exit;
    }
}
?>

<?php include('onward/background.php') ?>
                    <h1>Join Us At Our Private Screening!</h1>
                </div>

                <form action="onward.php" method="post" class="container-fluid background">
                    <div class="form-row justify-items-center">
                        <div class="col-md-6 col-sm-12">
                            <label for="first_name">First Name*</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo $_POST['first_name'];  ?>">
                            <?php if(isset($error_msg[0])) { echo '<p class="text-danger">' . $error_msg[0] . '</p>'; } ?>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="last_name">Last Name*</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" value="<?php echo $_POST['last_name'];  ?>">
                            <?php if(isset($error_msg[1])) { echo '<p class="text-danger">' . $error_msg[1] . '</p>'; } ?>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 col-sm-12">
                            <label for="phone">Phone*</label>
                            <input type="tel" class="form-control" name="phone" id="phone" onBlur="addDashes(this)" value="<?php echo $_POST['phone'];  ?>">
                            <?php if(isset($error_msg[2])) { echo '<p class="text-danger">' . $error_msg[2] . '</p>'; } 
                            if(isset($error_msg[8])) { echo '<p class="text-danger">' . $error_msg[8] . '</p>'; } ?>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="email">Email*</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Ex: youremail@gmail.com" value="<?php echo $_POST['email'];  ?>">
                            <?php if(isset($error_msg[3])) { echo '<p class="text-danger">' . $error_msg[3] . '</p>'; } ?>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <label for="street">Street Address*</label>
                            <input type="text" class="form-control" name="street" id="street" value="<?php echo $_POST['street'];  ?>">
                            <?php if(isset($error_msg[4])) { echo '<p class="text-danger">' . $error_msg[4] . '</p>'; } ?>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 col-sm-12">
                            <label for="city">City*</label>
                            <input type="text" class="form-control" name="city" id="city" value="<?php echo $_POST['city'];  ?>">
                            <?php if(isset($error_msg[5])) { echo '<p class="text-danger">' . $error_msg[5] . '</p>'; } ?>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="zip">Zip*</label>
                            <input type="text" class="form-control" name="zip" id="zip" pattern="[0-9]*" placeholder="Ex: 90015" value="<?php echo $_POST['zip'];  ?>">
                            <?php if(isset($error_msg[6])) { echo '<p class="text-danger">' . $error_msg[6] . '</p>'; } if(isset($error_msg[9])) { echo '<p class="text-danger">' . $error_msg[9] . '</p>'; } ?>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <label for="tickets">Tickets*</label>
                            <select class="form-control" id="tickets" name="tickets">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <?php if(isset($error_msg[7])) { echo '<p class="text-danger">' . $error_msg[7] . '</p>'; } ?>
                        </div>
                    </div>
                    <button class="btn btn-success mx-auto" style="display:block; width:auto" type="submit">Reserve My Tickets</button>
                </form>
                <script>
                    function addDashes(f) {
                            f.value = f.value.replace(/\D/g, '');
                            f.value = f.value.slice(0,3)+"-"+f.value.slice(3,6)+"-"+f.value.slice(6,10);
                    }
                </script>
            </div>
        </div>  
    </body>
</html>