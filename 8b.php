<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Visitor Count</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }

        h1 {
            color: #333;
        }

        p {
            font-size: 1.2em;
        }
    </style>
</head>

<body>
    <h1>Welcome to Our Website</h1>
    <?php
    // File to store the visitor count
    $file = 'visitor_count.txt';

    // Check if the file exists
    if (file_exists($file)) {
        // Read the current count from the file
        $count = (int)file_get_contents($file);
    } else {
        // Initialize the count if the file does not exist
        $count = 0;
    }

    // Increment the count
    $count++;

    // Write the new count back to the file
    file_put_contents($file, $count);

    // Display the count
    echo "<p>You are visitor number: <strong>$count</strong></p>";
    ?>
</body>

</html>