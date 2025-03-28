<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
</head>
<body>

<h2>User Form</h2>
<form method="post" action="">
    First Name: <input type="text" name="first_name"><br><br>
    Last Name: <input type="text" name="last_name"><br><br>
    Email ID: <input type="email" name="email"><br><br>

    Programming Skills:<br>
    <input type="checkbox" name="skills[]" value="C"> C
    <input type="checkbox" name="skills[]" value="C++"> C++
    <input type="checkbox" name="skills[]" value="Java"> Java
    <input type="checkbox" name="skills[]" value="HTML"> HTML
    <input type="checkbox" name="skills[]" value="CSS"> CSS
    <input type="checkbox" name="skills[]" value="JavaScript"> JavaScript
    <br><br>

    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <input type="radio" name="gender" value="Other"> Other
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    echo "<h3>Form Data Submitted:</h3>";
    echo "First Name: " . htmlspecialchars($_POST['first_name']) . "<br>";
    echo "Last Name: " . htmlspecialchars($_POST['last_name']) . "<br>";
    echo "Email: " . htmlspecialchars($_POST['email']) . "<br>";

    if (!empty($_POST['skills'])) {
        echo "Programming Skills: " . implode(", ", $_POST['skills']) . "<br>";
    } else {
        echo "Programming Skills: None<br>";
    }

    if (isset($_POST['gender'])) {
        echo "Gender: " . $_POST['gender'] . "<br>";
    } else {
        echo "Gender: Not selected<br>";
    }
}
?>

</body>
</html>