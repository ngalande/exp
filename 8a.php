<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Greeting Message</title>
</head>

<body>
    <h1>Enter Your Name</h1>
    <form method="post" action="">
        <label for="username">User Name:</label>
        <input type="text" id="username" name="username" required>
        <button type="submit">Submit</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['username'])) {
        $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');

        // Define an array of greeting messages
        $greetings = [
            "Hello, $username! Welcome to our website.",
            "Hi, $username! Hope you're having a great day!",
            "Greetings, $username! Nice to see you here.",
            "Hey, $username! Thanks for visiting us."
        ];

        // Randomly choose a greeting message
        $randomGreeting = $greetings[array_rand($greetings)];

        // Display the greeting message
        echo "<h2>$randomGreeting</h2>";
    }
    ?>
</body>

</html>