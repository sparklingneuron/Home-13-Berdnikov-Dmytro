<?php
    if (isset($_POST['submit'])) {

        $mysqli = new mysqli('localhost', 'root', 'geekhub', 'home13');

        if (mysqli_connect_errno()) {
            printf("Cannot connect to MySQL database. Error: %s\n", mysqli_connect_error());
            exit;
        }

        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($result = $mysqli->query("SELECT * FROM site_users WHERE username = '$username'")) {
            if ($row = $result->fetch_assoc()) {
                if (password_verify($password, $row['password'])) {
                    $msg = "success";
                } else {
                    $msg = "<p>Password is wrong.</p>";
                }
            } else {
                $msg = "<p>There is no such user in the database. Please register.</p>";
            }

            $result->close();
        } else {
            $msg = "<p>Database query was not successfull</p>";
        }

        $mysqli->close();
    } else {
        $msg = "";
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework 13</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="login-page">
<?php if ($msg == "success") {
     echo "<p>Congratulations! You have been successfully logged in.</p>";
} else {
    echo $msg; ?>
    <h1>Please log in</h1>
    <form action="" method="post">
        <label>
            Username: <input type="text" name="username">
        </label>
        <label>
            Password: <input type="password" name="password">
        </label>
        <input type="submit" name="submit" value="Log In">
    </form>
    <a href="register.php" class="button">Register</a>
<?php } ?>
</body>
</html>