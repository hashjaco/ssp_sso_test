<?php
include 'src/Modules/saml.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Example Form</title>
</head>
<body>
<form action="process-form.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br>

    <label for="message">Message:</label>
    <textarea id="message" name="message"></textarea><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>
