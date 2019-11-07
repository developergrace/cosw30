<?php
include('database.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    //if there is no id in the url, else will automatically redirect to crud.php
    header('Location: crud.php');
    exit;
}

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $update_msg = [];

    //for sql, need single quotes for data that will be strings, no single quotes on $id b/c it is number data
    if(empty($field_msg)) {
        $update_query = "UPDATE USER_PARK
                         SET first_name     = '$first_name',
                             last_name      = '$last_name',
                             email          = '$email',
                             password       = '$password'
                         WHERE user_id      = $id";

        if($result = mysqli_query($connection, $update_query)) {
            $update_msg[0] = 'You\'ve edited your enrollment!';
        } else {
            $update_msg[1] = 'There was an error updating your enrollment, please try again.';
        }
    }
}

$query = "SELECT * FROM USER_PARK WHERE user_id = $id";

$result = mysqli_query($connection, $query);

if($result) {
    $user = mysqli_fetch_assoc($result);
    $first_name = $user['first_name'];
    $last_name = $user['last_name'];
    $email = $user['email'];
    $password = $user['password'];
} else {
    // Output an error
    $table_msg[0] = 'There was an error generating the user table.';
    }

?>

<!doctype html>
<html>
<head>
    <title>CRUD Camp</title>
    <link rel="stylesheet" href="crud_style.css">
</head>
<body>

    <header>
        <div class="hero">
            <h1>Adventure Awaits</h1>
            <video width="100%" autoplay loop>
                <source src="crudcamp.mp4" type="video/mp4">
                <img src="crudcamp.png" title="Your browser does not support the video tag" alt="Crud Camp Logo">
            </video>
        </div>
    </header>

    <main>
        <h2>CRUD Camp</h2>
        <p class="blurb">The adventure of a lifetime awaits at CRUD Camp, a sleep-away camp focusing on tech for kids ages 10-17.
        Each camper's experience is unique: from coding, to robotics, animation, and more. CRUD Camp has all the resources
        and tools your tech-loving kid needs to succeed in the future. Not only will campers learn about tech fields and get
        hands-on experience creating and designing, they will have plenty of opportunities to swim, hike, and have outdoor
        adventures. </p>
        <p class="blurb">CRUD campers develop new skills, form lifelong friendships, and create lasting memories.
        Don't miss out, enroll your kid(s) today!</p>

        <h2>Update Application</h2>
        <form action="update_crud.php?id=<?php echo $id; ?>" method="POST">

            <div class="field">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" value="<?php echo $first_name; ?>"><br>
                <?php
                    if(isset($field_msg[0])) {
                        echo '<p class="error">' . $field_msg[0] . '</p>';
                    }
                ?>
            </div>

            <div class="field">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" value="<?php echo $last_name;  ?>"><br>
                <?php
                    if(isset($field_msg[1])) {
                        echo '<p class="error">' . $field_msg[1] . '</p>';
                    }
                ?>
            </div>

            <div class="field">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo $email;  ?>"><br>
                <?php
                    if(isset($field_msg[2])) {
                        echo '<p class="error">' . $field_msg[2] . '</p>';
                    }
                ?>
            </div>

            <div class="field">
                <label for="pass1">Password</label>
                <input type="text" id="pass1" name="pass1" value="<?php echo $password;  ?>"><br>
                <?php
                    if(isset($field_msg[4])) {
                        echo '<p class="error">' . $field_msg[4] . '</p>';
                    }
                ?>
            </div>

            <div class="field">
                <label for="pass2">Confirm Password</label>
                <input type="text" id="pass2" name="pass2" value="<?php echo $password;  ?>"><br>
                <?php
                    if(isset($field_msg[3])) {
                        echo '<p class="error">' . $field_msg[3] . '</p>';
                    }
                ?>
            </div>

            <!--
            //Instead of changing the form action, you can use a hidden input instead
            <input type="hidden" name="user_id" value="<?php echo $id; ?>">
            -->

            <button>Update</button>

            <?php
                if(isset($update_msg[0])) {
                    echo '<p class="success">' . $update_msg[0] . '</p>';
                }
                if(isset($update_msg[1])) {
                    echo '<p class="error">' . $update_msg[1] . '</p>';
                }
            ?>
        </form>
    </main>

    <footer>
        <p>&copy; 2019 Grace Park for COSW30</p>
    </footer>
</body>
</html>