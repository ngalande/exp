<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Digital Clock</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        #clock {
            font-size: 48px;
            color: #333;
        }
    </style>
</head>

<body>
    <div id="clock">
        <?php
        // Get the current server time
        echo date('H:i:s');
        ?>
    </div>

    <script>
        function startClock() {
            // Get the clock element
            var clock = document.getElementById('clock');

            // Update the clock every second
            setInterval(function() {
                // Create a new date object with the current time
                var now = new Date();

                // Format the time as HH:MM:SS
                var hours = String(now.getHours()).padStart(2, '0');
                var minutes = String(now.getMinutes()).padStart(2, '0');
                var seconds = String(now.getSeconds()).padStart(2, '0');

                // Update the clock element with the formatted time
                clock.textContent = hours + ':' + minutes + ':' + seconds;
            }, 1000);
        }

        // Start the clock when the page loads
        window.onload = startClock;
    </script>
</body>

</html>