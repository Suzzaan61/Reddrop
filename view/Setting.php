<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: ../view/Home.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['next'])){
        echo "HELLO";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Settings</title>
    <link rel="stylesheet" href="../styles/Setting.css">
    <?php require "../view/LoggedNav.php";
    require "../controller/dashboard-fetch.php";?>
</head>
<body>

<div class="container">


<div class="profile-container">
    <img src="../assets/Profile.jpg" alt="Profile Image" class="profile-image">
</div>

    <div class="profile-details">
        <div class="name"><p><?php

                if ($result) {
                    $row = $result->fetch_assoc();
                    echo $row['name'];
                }

                ?>
            </p></div>
        <div class="blood-group">Blood Group: O+</div>
        <div class="last-donation-date">Last Donation: January 15, 2023</div>
    </div>

<form class="settings-form">
    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="123 Main St, Cityville" disabled>
        <button type="button" class="edit-btn" onclick="enableInput('address')">Edit</button>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="john.doe@example.com" disabled>
        <button type="button" class="edit-btn" onclick="enableInput('email')">Edit</button>
    </div>

    <div class="form-group">
        <label for="contact">Contact Number:</label>
        <input type="tel" id="contact" name="contact" pattern="[0-9]{10}" value="1234567890" disabled>
        <button type="button" class="edit-btn" onclick="enableInput('contact')">Edit</button>
    </div>
    <div class="form-group">
        <label for="contact">Available for Donation?</label>
        <select name="donation-status"  id="donation-status" disabled>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
        <button type="button" class="edit-btn" onclick="enableInput('donation-status')">Edit</button>
    </div>

    <div class="update-btn hidden" onclick="updateDetails()">Update</div>
</form>
</div>

<script>
    function enableInput(fieldId) {
        var inputField = document.getElementById(fieldId);
        inputField.removeAttribute('disabled');
        inputField.focus();

        var updateBtn = document.querySelector('.update-btn');
        updateBtn.classList.remove('hidden');
    }

    function updateDetails() {
        // Add logic to update details (e.g., send to server)
        // For demonstration, just disabling input fields and hiding update button
        var inputFields = document.querySelectorAll('.form-group input');
        inputFields.forEach(function (input) {
            input.setAttribute('disabled', true);
        });

        var updateBtn = document.querySelector('.update-btn');
        updateBtn.classList.add('hidden');
    }
</script>

</body>
</html>

<?php
if (isset($_SESSION['userid']) && $_SESSION['userid'] >= 0) {
    echo "<style> 
.profile-img {
        display: inline-block;
    }
    .dropdown{
        display: inline-block;
    }
    .register{
        display: none;
    }<style>";
}
?>
