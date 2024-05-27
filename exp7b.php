<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Execute UNIX Command</title>
</head>

<body>
    <h1>Execute UNIX Command</h1>
    <form method="post" action="">
        <label for="command">Enter UNIX command:</label>
        <input type="text" id="command" name="command" required>
        <button type="submit">Execute</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $command = $_POST['command'];

        // Sanitize the command input
        $allowed_commands = ['ls', 'pwd', 'whoami', 'date']; // Example of allowed commands
        $command_parts = explode(' ', $command);
        if (in_array($command_parts[0], $allowed_commands)) {
            // Execute the command
            $output = shell_exec(escapeshellcmd($command));
            echo "<h2>Command Output:</h2>";
            echo "<pre>" . htmlspecialchars($output, ENT_QUOTES, 'UTF-8') . "</pre>";
        } else {
            echo "<p style='color: red;'>Error: Command not allowed.</p>";
        }
    }
    ?>
</body>

</html>