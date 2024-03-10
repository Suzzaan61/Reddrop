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
    <title>Blood Donation Events</title>
    <link rel="stylesheet" href="../styles/Events.css">
    <?php require "../view/LoggedNav.php"; ?>
</head>
<body>
<div class="container">


<h1>Blood Donation Events</h1>

<div class="event-container">
    <!-- Sample Event Cards (Repeat this block for each event) -->
    <div class="event-card">
        <img src="../assets/event.png" alt="Event Poster" class="event-image">
        <div class="event-details">
            <h2>Event Name 1</h2>
            <p class="event-date-time">Date: January 1, 2023<br>Time: 10:00 AM - 3:00 PM</p>
            <div class="button-container">
                <button class="button" onclick="showPopup('Event Name 1', 'January 1, 2023', '10:00 AM - 3:00 PM', 'Location 1', 'Details for Event 1')">Location</button>
                <button class="button" onclick="showPopup('Event Name 1', 'January 1, 2023', '10:00 AM - 3:00 PM', 'Location 1', 'Details for Event 1')">More Details</button>
            </div>
        </div>
    </div>

    <!-- Repeat the above event card block for each event -->

    <div class="event-card">
        <img src="../assets/event.png" alt="Event Poster" class="event-image">
        <div class="event-details">
            <h2>Event Name 2</h2>
            <p class="event-date-time">Date: February 15, 2023<br>Time: 2:00 PM - 6:00 PM</p>
            <div class="button-container">
                <button class="button" onclick="showPopup('Event Name 2', 'February 15, 2023', '2:00 PM - 6:00 PM', 'Location 2', 'Details for Event 2')">Location</button>
                <button class="button" onclick="showPopup('Event Name 2', 'February 15, 2023', '2:00 PM - 6:00 PM', 'Location 2', 'Details for Event 2')">More Details</button>
            </div>
        </div>
    </div>

    <!-- Repeat the above event card block for each event -->

    <div class="event-card">
        <img src="../assets/event.png" alt="Event Poster" class="event-image">
        <div class="event-details">
            <h2>Event Name 2</h2>
            <p class="event-date-time">Date: February 15, 2023<br>Time: 2:00 PM - 6:00 PM</p>
            <div class="button-container">
                <button class="button" onclick="showPopup('Event Name 2', 'February 15, 2023', '2:00 PM - 6:00 PM', 'Location 2', 'Details for Event 2')">Location</button>
                <button class="button" onclick="showPopup('Event Name 2', 'February 15, 2023', '2:00 PM - 6:00 PM', 'Location 2', 'Details for Event 2')">More Details</button>
            </div>
        </div>
    </div>

    <!-- Repeat the above event card block for each event -->

    <div class="event-card">
        <img src="../assets/event.png" alt="Event Poster" class="event-image">
        <div class="event-details">
            <h2>Event Name 2</h2>
            <p class="event-date-time">Date: February 15, 2023<br>Time: 2:00 PM - 6:00 PM</p>
            <div class="button-container">
                <button class="button" onclick="showPopup('Event Name 2', 'February 15, 2023', '2:00 PM - 6:00 PM', 'Location 2', 'Details for Event 2')">Location</button>
                <button class="button" onclick="showPopup('Event Name 2', 'February 15, 2023', '2:00 PM - 6:00 PM', 'Location 2', 'Details for Event 2')">More Details</button>
            </div>
        </div>
    </div>

    <!-- Repeat the above event card block for each event -->

    <div class="event-card">
        <img src="../assets/event.png" alt="Event Poster" class="event-image">
        <div class="event-details">
            <h2>Event Name 2</h2>
            <p class="event-date-time">Date: February 15, 2023<br>Time: 2:00 PM - 6:00 PM</p>
            <div class="button-container">
                <button class="button" onclick="showPopup('Event Name 2', 'February 15, 2023', '2:00 PM - 6:00 PM', 'Location 2', 'Details for Event 2')">Location</button>
                <button class="button" onclick="showPopup('Event Name 2', 'February 15, 2023', '2:00 PM - 6:00 PM', 'Location 2', 'Details for Event 2')">More Details</button>
            </div>
        </div>
    </div>

    <!-- Repeat the above event card block for each event -->

    <div class="event-card">
        <img src="../assets/event.png" alt="Event Poster" class="event-image">
        <div class="event-details">
            <h2>Event Name 2</h2>
            <p class="event-date-time">Date: February 15, 2023<br>Time: 2:00 PM - 6:00 PM</p>
            <div class="button-container">
                <button class="button" onclick="showPopup('Event Name 2', 'February 15, 2023', '2:00 PM - 6:00 PM', 'Location 2', 'Details for Event 2')">Location</button>
                <button class="button" onclick="showPopup('Event Name 2', 'February 15, 2023', '2:00 PM - 6:00 PM', 'Location 2', 'Details for Event 2')">More Details</button>
            </div>
        </div>
    </div>

    <!-- Repeat the above event card block for each event -->

    <div class="event-card">
        <img src="../assets/event.png" alt="Event Poster" class="event-image">
        <div class="event-details">
            <h2>Event Name 2</h2>
            <p class="event-date-time">Date: February 15, 2023<br>Time: 2:00 PM - 6:00 PM</p>
            <div class="button-container">
                <button class="button" onclick="showPopup('Event Name 2', 'February 15, 2023', '2:00 PM - 6:00 PM', 'Location 2', 'Details for Event 2')">Location</button>
                <button class="button" onclick="showPopup('Event Name 2', 'February 15, 2023', '2:00 PM - 6:00 PM', 'Location 2', 'Details for Event 2')">More Details</button>
            </div>
        </div>
    </div>

    <!-- Repeat the above event card block for each event -->

    <div class="event-card">
        <img src="../assets/event.png" alt="Event Poster" class="event-image">
        <div class="event-details">
            <h2>Event Name 2</h2>
            <p class="event-date-time">Date: February 15, 2023<br>Time: 2:00 PM - 6:00 PM</p>
            <div class="button-container">
                <button class="button" onclick="showPopup('Event Name 2', 'February 15, 2023', '2:00 PM - 6:00 PM', 'Location 2', 'Details for Event 2')">Location</button>
                <button class="button" onclick="showPopup('Event Name 2', 'February 15, 2023', '2:00 PM - 6:00 PM', 'Location 2', 'Details for Event 2')">More Details</button>
            </div>
        </div>
    </div>



</div>

<!-- Popup for More Details -->
<div id="popup" class="popup">
    <div class="popup-content">
        <span class="close-btn" onclick="hidePopup()">&times;</span>
        <h2 id="popup-event-name"></h2>
        <p id="popup-event-details"></p>
    </div>
</div>
</div>

<script>
    function showPopup(name, date, time, location, details) {
        document.getElementById("popup-event-name").textContent = name;
        document.getElementById("popup-event-details").textContent = `Date: ${date}\nTime: ${time}\nLocation: ${location}\n\n${details}`;
        document.getElementById("popup").style.display = "flex";
    }

    function hidePopup() {
        document.getElementById("popup").style.display = "none";
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
