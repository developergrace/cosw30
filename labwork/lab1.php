<!doctype HTML>
<html>
    <head>
        <title>Labwork 1: Hello World</title>
        <style>
            body {
                background-image: url('http://thepatternlibrary.com/img/r.png');
                margin: 0;
                font-family: Verdana, Geneva, sans-serif;
            }
            
            main {
                background-color: rgba(255,255,255,.9);
                border-radius: 10px;
                margin: 1% 10%;
                padding: 1% 5%;
            }
            
            a {
                text-decoration: none;
                color: #E3655B;
                font-weight: bold;
            }
            
            a:hover {
                color: #129490;
            }

        </style>
    </head>
    
    <body>
        <?php
        /*
        File Name: lab1.php
        Created By: Grace Park
        Due Date: 9/1/19
        */
        ?>
        
        <main>
            <h1>Welcome to my First PHP Page!</h1>
            <p>
                My name is Grace and I am a student at LBCC. I am pursuing a career in web development. I have no experience with backend languages so PHP is entirely new to me. This is also my first semester back as a full-time student so I am a little worried about getting adjusted.
            </p>
            <p>
                My hobbies include video games, UFC, and food. I like fiction novels of the mystery, science fiction, domestic, and absurdist varieties. I would greatly appreciate any audiobook recommendations!   
            </p>
            <p>
                While you're here, check out my <a href="https://github.com/developergrace" target="_blank">Github account</a>.
            </p>
        
            <?php echo
                '<p>As for websites, I like to watch food-related videos on <a href="https://www.youtube.com/" target=_blank">Youtube</a> and browse <a href="https://www.reddit.com/" target="_blank">Reddit</a> for interesting or humorous stories.</p>
            
                <p>This was my first time using PHP so it was a little hard for me to wrap my head around and get used to. In particular, I had trouble with escaping the quotation marks inside the a tags in the previous paragraph. Although typing PHP can be hard on the eyes, after reading Chapter 1 of the textbook, I now understand the benefits of using PHP and look forward to learning more.</p>';
            ?>
        </main>
    </body>
</html>
