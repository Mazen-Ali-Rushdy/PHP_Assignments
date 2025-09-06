<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>

<?php

$admins = ["Osama", "Ahmed", "Sayed"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['user']) && !empty($_POST['user'])) {
        $username = htmlspecialchars($_POST['user']); // Sanitize input

        echo "The Request Method Is Post And Username Is " . $username . "<br>";

        if (in_array($username, $admins)) {
            echo "This Username " . $username . " Is Admin";
        }
    } else {
        echo "Please enter a username.";
    }
}

// Input Name "Osama"

// Needed Output
// "The Request Method Is Post And Username Is Osama"
// "This Username Osama Is Admin"