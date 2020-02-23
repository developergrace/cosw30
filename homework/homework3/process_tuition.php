<!doctype HTML>
<html>
    <head>
        <title>Your Tuition Cost</title>
        <meta charset="utf-8">
        <style>
            body {
                margin: 0;
                color: #1D190E;
                font-family: Arial, sans-serif;
            }
            
            header {
                background-color: #1D190E;
                padding: 10px 0;
                margin-bottom: 2em;
            }
            
            header img {
                margin: 0 5%;
            }
            
            main {
                margin: 0 10%;
                height: 70vh;
            }
            
            p {
                padding-left: 10px;
            }
            
            .total {
                border-left: 5px #DC291F solid;
                padding-left: 5px;
                font-size: 1.5em;
            }
            
            .back {
                margin-top: 2em;
            }
            
            a:link {
                color: #DC291F;
            }
            
            a:hover {
                color: darkred;
            }
            
            footer {
                background-color: #1D190E;
                padding: 1em;
                text-align: center;
                color: white;
                margin-top: 2em;
            }
        </style>
    </head>
    
    <body>
        <header>
            <img src="lbcc_logo.svg" alt="LBCC logo">
        </header>
        <main>
            <?php
                //Or set values to cost
                // $resident = $_POST['resident'];
                // $units = $_POST['units'];
                // $cost = $resident * $units;
                // echo $cost;

                //Posted Variables
                $resident = $_POST['resident'];
                $units = $_POST['units'];
                $services = $_POST['services'];
                $parking = $_POST['parking'];
                $healthCost = 20;
                
                //Conditional Variables
                if($resident == 'Yes') {
                    $perUnit = 46;
                }
                else {
                    $perUnit = 265;
                }
                
                if($services == 'Yes') {
                    $servicesCost = 20;
                }
                else {
                    $servicesCost = 0;
                }
                
                if($parking == 'Yes') {
                    $parkingCost = 30;
                }
                else {
                    $parkingCost = 0;
                }
                
                //Calculations
                $tuitionCost = $units * $perUnit;
                $grossCost = $tuitionCost + $healthCost + $servicesCost + $parkingCost;
                $scholarship = rand(0,$grossCost);
                $netCost = $grossCost - $scholarship;

                //Check for Empty Fields
                if(!empty($resident && $units)) {
                    echo "<h1>Your Total Cost of Attendance:</h1>";
                    
                    //Unit Cost
                    echo "<p><b>Cost of Tuition:</b> $$tuitionCost ($units units x $$perUnit)</p>";
                    
                    //Mandatory Fee
                    echo "<p><b>Student Health Fee:</b> $$healthCost</p>";
                    
                    //Optional Fees
                    echo "<p><b>College Services Card:</b> $$servicesCost</p>";
                    echo "<p><b>Parking Permit:</b> $$parkingCost</p>"; 
                    
                    //Totals
                    echo "<p><b>Attendance Cost without Scholarship:</b> $$grossCost<p>";
                    echo "<p><b>Scholarship Award:</b> $$scholarship</p>";
                    echo "<p class=\"total\"><b>Total Due:</b> $$netCost</p>";
                    
                    echo "<p class=\"back\"><a href=\"tuition_calculator.html\">Go back</a></p>";
                }
            
                //Error Message
                else {
                    echo "<p>There were required fields left blank, please <a href=\"https://cosw30-grace.herokuapp.com/homework/homework3/tuition_calculator.html\">go back</a> and resubmit.</p>";
                }
            ?>
        </main>
        <footer>
            <p>&copy; 2019 by Grace Park for COSW 30</p>
        </footer>
    </body>
</html>