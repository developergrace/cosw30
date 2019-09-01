<!doctype HTML>
<html>
    <head>
        <title>Labwork 1: Hello World</title>
    </head>
    
    <body>
        <?php
        /*
        File Name: lab1.php
        Created By: Grace Park
        Due Date: 9/1/19
        */
        ?>
        
        <h1>Welcome to my First PHP Page!</h1>
        <p>
            My name is Grace and I am a student at LBCC. I am pursuing a career in web development. I have no experience with backend languages so PHP is entirely new to me. This is also my first semester back as a full-time student so I am a little worried about getting adjusted.
        </p>
        <p>
            My hobbies include video games, UFC, and food. I like fiction novels of the mystery, science fiction, domestic, and absurdist varities. I would greatly appreciate any audiobook recommendations!   
        </p>
        <p>
            While you're here, check out my <a href="https://github.com/developergrace" target="_blank">Github account</a>.
        </p>
        
        <?php echo
            '<p>As for websites, I like to watch food-related videos on <a href="https://www.youtube.com/" target=_blank">Youtube</a> and browse <a href="https://www.reddit.com/" target="_blank">Reddit</a> for interesting or humorous stories.</p>
            
            <p>This was my first time using PHP so it was a little hard for me to wrap my head around and get used to. In particular, I had trouble with escaping the quotation marks inside the a tags in the previous paragraph. Although typing PHP can be hard on the eyes, after reading Chapter 1 of the textbook, I now understand the benefits of using PHP and look forward to learning more.</p>';
        ?>
        
    </body>
</html>
