<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }

        h1 {
            color: #4CAF50;
            margin-bottom: 20px;
        }

        pre {
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 4px;
            overflow-x: auto;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff0000;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
        }

        a:hover {
            background-color: #cc0000;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome, You are successfully logged in.</h1>

        <?php
        echo "<pre>";
        echo print_r($this->session->all_userdata());
        echo "</pre>";
        ?>

        <a href='<?php echo base_url() . "index.php/Main/logout"; ?>'>Logout</a>
    </div>
</body>

</html>