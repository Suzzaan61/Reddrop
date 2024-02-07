<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="../styles/register.css">
</head>

<body>
    <div class="container">
        <h2>User Registration</h2>
        <div class="registration-form">

            <form action="process_registration.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br>

                <label for="bloodType">Blood Type:</label>
                <select id="bloodType" name="bloodType" required>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>


                <label for="addressId">Address ID:</label>
                <input type="text" id="addressId" name="addressId" required><br>

                <label for="healthStatus">Health Status:</label>
                <input type="text" id="healthStatus" name="healthStatus" required><br>

                <label for="donorStatus">Donor Status:</label>
                <input type="text" id="donorStatus" name="donorStatus" required><br>
                <div class="btn-container"><input type="submit" value="Register"> 
                <a href="../components/login.php"><input type="button" value="Login"></div></a>

            </form>
        </div>
    </div>

</body>

</html>