<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Server Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <h1>Server Information</h1>
    <table>
        <tr>
            <th>Information</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Server Name</td>
            <td><?php echo $_SERVER['SERVER_NAME']; ?></td>
        </tr>
        <tr>
            <td>Server Software</td>
            <td><?php echo $_SERVER['SERVER_SOFTWARE']; ?></td>
        </tr>
        <tr>
            <td>Server Protocol</td>
            <td><?php echo $_SERVER['SERVER_PROTOCOL']; ?></td>
        </tr>
        <tr>
            <td>CGI Revision</td>
            <td><?php echo $_SERVER['GATEWAY_INTERFACE']; ?></td>
        </tr>
        <tr>
            <td>Server Address</td>
            <td><?php echo $_SERVER['SERVER_ADDR']; ?></td>
        </tr>
        <tr>
            <td>Server Port</td>
            <td><?php echo $_SERVER['SERVER_PORT']; ?></td>
        </tr>
        <tr>
            <td>Document Root</td>
            <td><?php echo $_SERVER['DOCUMENT_ROOT']; ?></td>
        </tr>
        <tr>
            <td>Current Script</td>
            <td><?php echo $_SERVER['SCRIPT_NAME']; ?></td>
        </tr>
        <tr>
            <td>Request Method</td>
            <td><?php echo $_SERVER['REQUEST_METHOD']; ?></td>
        </tr>
        <tr>
            <td>Request URI</td>
            <td><?php echo $_SERVER['REQUEST_URI']; ?></td>
        </tr>
        <tr>
            <td>Query String</td>
            <td><?php echo $_SERVER['QUERY_STRING']; ?></td>
        </tr>
        <tr>
            <td>HTTP Host</td>
            <td><?php echo $_SERVER['HTTP_HOST']; ?></td>
        </tr>
        <tr>
            <td>HTTP User Agent</td>
            <td><?php echo $_SERVER['HTTP_USER_AGENT']; ?></td>
        </tr>
        <tr>
            <td>HTTPS</td>
            <td><?php echo isset($_SERVER['HTTPS']) ? 'Yes' : 'No'; ?></td>
        </tr>
    </table>
</body>

</html>