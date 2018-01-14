<?php
    if (isset($_POST['submit'])) {

        $mysqli = new mysqli('localhost', 'root', 'geekhub', 'home13');

        if (mysqli_connect_errno()) {
            printf("Cannot connect to MySQL database. Error: %s\n", mysqli_connect_error());
            exit;
        }

        $stmt = $mysqli->prepare("INSERT INTO site_users (first_name, last_name, gender, age, hobbies, username,
 password, date_of_birth, card_number, about, categories) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('sssssssssss', $firstName, $lastName, $gender, $age, $hobbies, $username, $password,
            $dateOfBirth, $cardNumber, $about, $categories);

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $hobbies = implode(", ", $_POST['hobbies']);
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $dateOfBirth = $_POST['dateOfBirth'];
        $cardNumber = $_POST['cardNumber'];
        $about = $_POST['about'];
        $categories = implode(", ", $_POST['categories']);

        if ($stmt->execute()) {
            $msg = "<p>Success! You have just been registered!</p>";
        } else {
            $msg = "<p>Error: cannot add user's data to the database</p>";
        }

        $stmt->close();
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
<body class="register-page">
<?php if ($msg != "") {
    echo $msg;
} ?>
<h1>Please register</h1>
<form action="" method="post">
    <ul>
        <li>
            <label>
                First name: <input type="text" name="firstName" required>
            </label>
        </li>
        <li>
            <label>
                Last name: <input type="text" name="lastName" required>
            </label>
        </li>
        <li>
            Gender:
            <label>
                Male <input type="radio" name="gender" value="male" checked required>
            </label>
            <label>
                Female <input type="radio" name="gender" value="female" required>
            </label>
        </li>
        <li>
            <label>
                Age: <input type="number" name="age" required>
            </label>
        </li>
        <li>
            <label>
                Hobbies:
                <select name="hobbies[]" multiple required>
                    <option value="football" >Football</option>
                    <option value="basketball">Basketball</option>
                    <option value="hockey">Hockey</option>
                    <option value="ski">Ski</option>
                </select>
            </label>
        </li>
        <li>
            <label>
                Username: <input type="text" name="username" required>
            </label>
        </li>
        <li>
            <label>
                Password: <input type="password" name="password" minlength="8" required>
            </label>
        </li>
        <li>
            <label>
                Date of birth: <input type="date" name="dateOfBirth" required>
            </label>
        </li>
        <li>
            <label>
                Credit card number: <input type="text" name="cardNumber" pattern="[0-9]{16}" placeholder="example: 1234567812345678" required>
            </label>
        </li>
        <li>
            <label>
                About: <textarea name="about" cols="30" rows="10" required>Add info about yourself...</textarea>
            </label>
        </li>
        <li>
            <label>
                Categories:
                <select name="categories[]"  multiple required>
                    <option value="art" >Art</option>
                    <option value="work">Work</option>
                    <option value="travel">Travel</option>
                    <option value="family">Family</option>
                </select>
            </label>
        </li>
        <li>
            <input type="submit" name="submit" value="Register">
        </li>
    </ul>
</form>
</body>
</html>