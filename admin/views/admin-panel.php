

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
        }

        #sidePanel {
            width: 300px;
            height: 100vh;
            background-color: #B91216;
            color: #fff;
            padding: 20px;
            box-sizing: border-box;

            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        #content {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        h1, h2 {
            color: #fff;
        }
    </style>
</head>
<body>

<div id="sidePanel">
    <h1>Admin Panel</h1>
    <ul>
        <li><a href="./admin-dashboard.php" target="contentFrame">Dashboard</a></li>
        <li><a href="./usermanagement.php" target="contentFrame">User Management</a></li>
        <li><a href="profile_settings.php" target="contentFrame">Profile Settings</a></li>
    </ul>
</div>

<div id="content">
    <iframe name="contentFrame" src="./usermanagement.php"></iframe>
</div>

</body>
</html>
