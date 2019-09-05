<!doctype HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login Page</title>
        <style>
            body {
            margin: 0;
            }
            label, button {
                display: block;
                margin: 10px 0;
            }
            header, footer {
                background-color: teal;
                padding: 25px 0;
            }
            a {
                margin: 0 10px;
                color: white;
                text-decoration: none;
                font-size: 1.3em;
            }
            a:hover {
                color: silver;
            }
            
            h1 {
                margin: 1em 1em 0;
            }
            
            form {
                margin: 0 2em 1em;
            }
            
            footer p {
                text-align: center;
                font-size: 1.3em;
                color: white;
            }

        </style>
    </head>
    <body>
        <header>
            <a href="/">Login Page</a>
            <a href="https://github.com/developergrace" target="_blank">Grace's Github</a>
            <a href="https://github.com/rockondiana0416" target="_blank">Diana's Github</a>
        </header>
        
        <h1>Login Form</h1>
        <form method="POST" action="process_login.php">
            <fieldset><legend>Please enter your email and password to login.</legend>
            <label for="log_email">Email Address:</label>
            <input name="email" id="log_email" type="email" required>
            
            <label for="log_pass">Password:</label>
            <input name="password" id="log_pass" type="password" required>
            
            <input type="hidden" value="login" name="type">
            
            <button>Login</button>
        </fieldset></form>
        
        <h1>Registration Form</h1>
        <form method="POST" action="process_login.php">
            <fieldset><legend>Register today!</legend>
            <label for="first_name">First Name:</label>
            <input name="first_name" id="first_name" type="text" required>
            
            <label for="last_name">Last Name:</label>
            <input name="last_name" id="last_name" type="text" required>
            
            <label for="reg_email">Email Address:</label>
            <input name="email" id="reg_email" type="email" required>
            
            <label for="reg_pass">Password:</label>
            <input name="password" id="reg_pass" type="password" required>
            
            <label for="confirm_pass">Confirm Password:</label>
            <input name="confirm_pass" id="confirm_pass" type="password" required>
            
            <input type="hidden" value="register" name="type">
            
            <button>Register</button>
        </fieldset></form>
        
        <footer>
            <p>created by Grace Park and Diana Hinchcliffe.</p>
        </footer>
        
        
    </body>
</html>