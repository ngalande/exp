<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Last Visited Date-Time</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            text-align: center;
        }

        h1 {
            color: #333;
        }
    </style>
</head>

<body>
    <h1>Welcome to Our Website</h1>
    <?php
    // Define the cookie name
    $cookie_name = 'lastVisit';

    // Check if the cookie exists
    if (isset($_COOKIE[$cookie_name])) {
        // Retrieve the last visit date-time from the cookie
        $last_visit = $_COOKIE[$cookie_name];
        echo "<p>Your last visit was on: <strong>$last_visit</strong></p>";
    } else {
        echo "<p>This is your first visit!</p>";
    }

    // Set the cookie with the current date-time
    $current_visit = date('Y-m-d H:i:s');
    setcookie($cookie_name, $current_visit, time() + (86400 * 30), "/"); // Cookie set to expire in 30 days

    echo "<p>Current visit date-time has been saved.</p>";
    ?>
</body>

</html>