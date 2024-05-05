<?php
include_once 'item-details-nav.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .form-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: bold;
            color: #333;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-button:hover {
            background-color: #0056b3;
        }

        .form-message {
            margin-top: 10px;
            font-size: 14px;
            text-align: center;
        }

        .form-message a {
            text-decoration: none;
            color: #007bff;
        }

        .form-message a:hover {
            text-decoration: underline;
        }

        .error-message {
            color: red;
            margin-bottom: 10px;
        }

        .already-have-account {
            margin-top: 20px;
            font-size: 14px;
            text-align: center;
        }

        .already-have-account a {
            text-decoration: none;
            color: #007bff;
        }

        .already-have-account a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <form action="includes/sign.inc.php" method="post">
            <label for="name" class="form-label">Name</label><br>
            <input type="text" name="name" id="name" class="form-input" placeholder="Enter your Name"><br><br>
            <label for="email" class="form-label">Email</label><br>
            <input type="text" name="email" id="email" class="form-input" placeholder="Enter your Email"><br><br>
            <label for="uname" class="form-label">User name</label><br>
            <input type="text" name="uname" id="uname" class="form-input" placeholder="Enter your User name"><br><br>
            <label for="password" class="form-label">Password</label><br>
            <input type="password" name="password" id="password" class="form-input" placeholder="Enter your Password"><br><br>
            <label for="password" class="form-label">Again Password</label><br>
            <input type="password" name="againpassword" id="againpassword" class="form-input" placeholder="Enter your Password again"><br><br>
            <button type="submit" name="submit" class="form-button">Register</button>
        </form>
        <?php
        if (isset($_GET["error"]) && !empty($_GET['error'])) {
            echo "<div class='error-message'>Error</div>";
        }
        ?>
    </div>
    <div class="already-have-account">Already have an account. <a href="login.php">Please login!<a></div>
</body>

</html>