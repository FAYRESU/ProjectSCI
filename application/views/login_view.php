<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('your-background-image.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            color: #000000;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            border: 2px solid #ff0000;
        }

        h1 {
            text-align: center;
            color: #ff0000;

        }

        p {
            margin: 15px 0;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #000000;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #f9f9f9;
            color: #000000;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #ff0000;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #cc0000;
        }

        .error {
            color: green;
            margin-bottom: 15px;
        }

        .signup-link {
            margin-top: 15px;
            text-align: center;
        }

        .signup-link a {
            color: #ff0000;
            text-decoration: none;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h1>Login</h1>

        <?php
        echo form_open('Main/login_action');

        if (validation_errors()) {
            echo "<div class='error'>" . validation_errors() . "</div>";
        }

        echo "<p><label for='username'>Username:</label>";
        echo form_input('username', $this->input->post('username'), ['id' => 'username']);
        echo "</p>";

        echo "<p><label for='password'>Password:</label>";
        echo form_password('password', '', ['id' => 'password']);
        echo "</p>";

        echo "<p>";
        echo form_submit('login_submit', 'Login');
        echo "</p>";

        echo form_close();
        ?>

        <div class="signup-link">
            <a href='<?php echo base_url() . "index.php/Main/signin"; ?>'>Sign In</a>
        </div>
    </div>
</body>

</html>