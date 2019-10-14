<?php
//git push origin header
//go to fork > plus sign > comment > check mark > three dots > push
//three dots > pull -- get changes from original/repo/upstream; don't do until after changes approved

?>

<?php
    //array version
    $name = ['Grace', 'Gary', 'Felix', 'Felicia'];
    foreach($names as $name) {
        greeting($name); //this will output the same results as the below
    }

    //function version
    function greeting($nameTest) {
        echo '<p>Hello, my name is '.$nameTest.'</p>';
    }
    greeting("Grace");
    greeting("Gary");
    greeting("Felix");
    greeting("Felicia");

    // <p>Hello, my name is Grace</p>
    // <p>Hello, my name is Gary</p>
    // <p>Hello, my name is Felix</p>
    // <p>Hello, my name is Felicia</p>

?>