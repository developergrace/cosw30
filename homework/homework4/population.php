<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Activity 2: Array Table Output</title>
    </head>
    
    <style>
        table {
            margin: 1em 1em 2em;
        }
        
        th, tr {
            border: 1px solid black;
            padding: 5px;
        }
        
        td {
            padding: 5px;
        }
    </style>
    
    <body>
        <?php
            $states = [
                'New York, New York' => '8,622,698',
                'Los Angeles, California' => '3,999,759',
                'Chicago, Illinois' => '2,716,450',
                'Houston, Texas' => '2,312,717',
                'Phoenix, Arizona' => '1,626,078',
                'Philadelphia, Pennsylvania' => '1,580,863',
                'San Antonio, Texas' => '1,511,946',
                'San Diego, California' => '1,419,516',
                'Dallas, Texas' => '1,341,075',
                'San Jose, California' => '1,035,317',
                'Austin, Texas' => '950,715',
                'Jacksonville, Florida' => '892,062',
                'San Francisco, California' => '884,363',
                'Columbus, Ohio' => '879,170',
                'Fort Worth, Texas' => '874,168'
            ];
        ?>
        
        <table>
            <tr>
                <th colspan="3">The 15 Most Populous Cities as of July 1, 2017</th>
            </tr>
            
            <tr>
                <th>Rank</th>
                <th>City, State</th>
                <th>2017 total population</th>
            </tr>
            
            <?php
                $counter = 1;
                foreach($states as $key => $value):
            ?>
            
            <tr>
                <td><?php echo "$counter"; ?></td>
                <td><?php echo $key; ?></td>
                <td><?php echo $value; ?></td>
            </tr>
            
            <?php 
                $counter++;
                endforeach; 
            ?>
        </table>
        
        
        <?php
            ksort($states);
        ?>
        <table>
            <tr>
                <th colspan="3">15 Populous Cities In Alphabetical Order</th>
            </tr>
            
            <tr>
                <th>Rank</th>
                <th>City, State</th>
                <th>2017 total population</th>
            </tr>
            
            <?php
                $counter = 1;
                foreach($states as $key => $value):
            ?>
            
            <tr>
                <td><?php echo "$counter"; ?></td>
                <td><?php echo $key; ?></td>
                <td><?php echo $value; ?></td>
            </tr>
            
            <?php 
                $counter++;
                endforeach; 
            ?>
        </table>
        <p><a href="https://cosw30-grace.herokuapp.com/homework/homework4/quote.html" target="_blank">Check out my quote page while you're here!</a></p>
        
        
    </body>
</html>