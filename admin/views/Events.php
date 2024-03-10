<?php
session_start();
if (!isset($_SESSION['adminId'])) {
    header("Location: ../../client/view/Home.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Events</title>
    <link rel="stylesheet" href="../Public/styles/Events.css">
</head>
<body>

<div id="events">

    <h2>Blood Donation Events</h2>
    <button class="add-events-btn" onclick="addEventPopup()">Add Events</button>

    <div class="event-cards" id="eventCards">
        <!-- Sample event card -->
        <div class="event-card">
            <img src="../Public/Images/event.png" alt="Event Banner">
            <div class="event-details">
                <div class="event-title">Blood Drive</div>
                <div class="event-date">2024-02-28</div>
                <button class="edit-btn" onclick="editEvent(this)">Edit</button>
                <button class="delete-btn" onclick="deleteEvent(this)">Delete</button>
            </div>
        </div>
        <div class="event-card">
            <img src="../Public/Images/event.png" alt="Event Banner">
            <div class="event-details">
                <div class="event-title">Blood Drive</div>
                <div class="event-date">2024-02-28</div>
                <button class="edit-btn" onclick="editEvent(this)">Edit</button>
                <button class="delete-btn" onclick="deleteEvent(this)">Delete</button>
            </div>
        </div>
        <div class="event-card">
            <img src="../Public/Images/event.png" alt="Event Banner">
            <div class="event-details">
                <div class="event-title">Blood Drive</div>
                <div class="event-date">2024-02-28</div>
                <button class="edit-btn" onclick="editEvent(this)">Edit</button>
                <button class="delete-btn" onclick="deleteEvent(this)">Delete</button>
            </div>
        </div>
        <div class="event-card">
            <img src="../Public/Images/event.png" alt="Event Banner">
            <div class="event-details">
                <div class="event-title">Blood Drive</div>
                <div class="event-date">2024-02-28</div>
                <button class="edit-btn" onclick="editEvent(this)">Edit</button>
                <button class="delete-btn" onclick="deleteEvent(this)">Delete</button>
            </div>
        </div>
        <div class="event-card">
            <img src="../Public/Images/event.png" alt="Event Banner">
            <div class="event-details">
                <div class="event-title">Blood Drive</div>
                <div class="event-date">2024-02-28</div>
                <button class="edit-btn" onclick="editEvent(this)">Edit</button>
                <button class="delete-btn" onclick="deleteEvent(this)">Delete</button>
            </div>
        </div>
        <!-- Add more event cards here -->
    </div>

    <!-- Event Popup -->
    <div class="popup" id="eventPopup">
        <div class="popup-content">
            <h3>Event Details</h3>
            <label for="eventTitle">Title:</label>
            <input type="text" id="eventTitle" name="eventTitle" required>

            <label for="eventDate">Date:</label>
            <input type="date" id="eventDate" name="eventDate" required>

            <label for="eventBanner">Banner Image:</label>
            <input type="file" id="eventBanner" name="eventBanner" accept="image/*">

            <button onclick="saveEvent()">Save</button>
            <button class="delete-btn" onclick="closeEventPopup()">Cancel</button>
        </div>
    </div>

    <!-- Add Event Popup -->
    <div class="popup" id="addEventPopup">
        <div class="popup-content">
            <h3>Event Details</h3>
            <label for="eventTitle">Title:</label>
            <input type="text" id="eventTitle" name="eventTitle" required>

            <label for="eventDate">Date:</label>
            <input type="date" id="eventDate" name="eventDate" required>

            <label for="eventBanner">Banner Image:</label>
            <input type="file" id="eventBanner" name="eventBanner" accept="image/*">

            <button onclick="saveEvent()">Save</button>
            <button class="delete-btn" onclick="closeEventPopup()">Cancel</button>
        </div>
    </div>

</div>

<script>
    let editingEvent;

    function editEvent(button) {
        editingEvent = button.parentNode.parentNode;

        const title = editingEvent.querySelector('.event-title').innerText;
        const date = editingEvent.querySelector('.event-date').innerText;

        document.getElementById('eventTitle').value = title;
        document.getElementById('eventDate').value = date;

        openEventPopup();
    }

    function deleteEvent(button) {

    }
    function addEventPopup(){
        document.getElementById('addEventPopup').style.display = 'flex';
    }

    function openEventPopup() {
        const popup = document.getElementById('eventPopup');
        popup.style.display = 'flex';
    }

    function closeEventPopup() {
        const popup = document.getElementById('eventPopup');
        const eventPopup = document.getElementById('addEventPopup');
        popup.style.display = 'none';
        eventPopup.style.display = 'none';
    }

    function saveEvent() {

    }
</script>

</body>
</html>
