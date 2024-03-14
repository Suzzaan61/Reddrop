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
        <!-- event card -->
        <?php
        require "../model/Admin-events-fetch.php";
            if($done->num_rows>0){
               while ($row=$done->fetch_assoc()) {
?>                      <div class="event-card">
                       <img src="<?php echo $row['E_BANNER']?>" alt="Event Banner">
                       <div class="event-details">
                           <div class="event-title"><?php echo $row['E_TITLE']?></div>
                           <div class="event-date"><?php echo $row['E_DATE']?></div>
                           <div class="event-date"><?php echo $row['E_ADDRESS']?></div>
                           <button class="edit-btn" onclick="editEvent(this)">Edit</button>
                           <button class="delete-btn" onclick="deleteEvent(this)">Delete</button>
                       </div>
                   </div>

                   <?php
               }
            }
        ?>
        <!-- Add more event cards here -->
    </div>
    <div class="page-info">
        <?php
        if(!isset($_GET['page-nr'])){
            $page = 1;
        }else{
            $page = $_GET['page-nr'];
        }
        ?>
        Showing  <?php echo $page ?> of <?php echo $pages; ?> pages
    </div>

    <div class="pagination">
        <a href="?page-nr=1">First</a>

        <!-- Go to the previous page -->
        <?php
        if(isset($_GET['page-nr']) && $_GET['page-nr'] > 1){
            ?> <a href="?page-nr=<?php echo $_GET['page-nr'] - 1 ?>">Previous</a> <?php
        }else{
            ?> <a>Previous</a>	<?php
        }
        ?>

        <!-- Output the page numbers -->
        <div class="page-numbers">
            <?php
            if(!isset($_GET['page-nr'])){
                ?> <a class="active" href="?page-nr=1">1</a> <?php
                $count_from = 2;
            }else{
                $count_from = 1;
            }
            ?>

            <?php
            for ($num = $count_from; $num <= $pages; $num++) {
                if($num == @$_GET['page-nr']) {
                    ?> <a class="active" href="?page-nr=<?php echo $num ?>"><?php echo $num ?></a> <?php
                }else{
                    ?> <a href="?page-nr=<?php echo $num ?>"><?php echo $num ?></a> <?php
                }
            }
            ?>
        </div>

        <!-- Go to the next page -->
        <?php
        if(isset($_GET['page-nr'])){
            if($_GET['page-nr'] >= $pages){
                ?> <a>Next</a> <?php
            }else{
                ?> <a href="?page-nr=<?php echo $_GET['page-nr'] + 1 ?>">Next</a> <?php
            }
        }else{
            ?> <a href="?page-nr=2">Next</a> <?php
        }
        ?>
        <a href="?page-nr=<?php echo $pages;?>">Last</a>

    <!-- Event Popup -->
    <div class="popup" id="eventPopup">
        <div class="popup-content">
            <h3>Event Details</h3>
            <label for="eventTitle">Title:</label>
            <input type="text" id="eventTitle" name="eventTitle" required>

            <label for="eventBanner">Banner Image:</label>
            <input type="file" id="eventBanner" name="eventBanner" accept="image/*">

            <label for="eventDate">Date:</label>
            <input type="date" id="eventDate" name="eventDate" required>

            <label for="eventLocation">Google Location:</label>
            <input type="text" id="eventLocation" name="eventLocation" required>

            <label for="eventAddress">Address:</label>
            <input type="text" id="eventAddress" name="eventAddress" required>

            <label for="eventDesc">Descriptions:</label>
            <input type="text" id="eventDesc" name="eventDesc" required>


            <button onclick="saveEvent()">Save</button>
            <button class="delete-btn" onclick="closeEventPopup()">Cancel</button>
        </div>
    </div>

    <!-- Add Event Popup -->
    <div class="popup" id="addEventPopup">
        <div class="popup-content">
            <form action="../controller/add-event.php" method="post" enctype="multipart/form-data">
                <h3>Event Details</h3>
                <label for="eventTitle">Title:</label>
                <input type="text" id="eventTitle" name="eventTitle" required>

                <label for="eventBanner">Banner Image:</label>
                <input type="file" id="eventBanner" name="eventBanner" accept="image/*">

                <label for="eventDate">Date:</label>
                <input type="date" id="eventDate" name="eventDate" required>

                <label for="eventLocation">Google Location:</label>
                <input type="text" id="eventLocation" name="googleMapLink" required>

                <label for="eventAddress">Address:</label>
                <input type="text" id="eventAddress" name="eventAddress" required>

                <label for="eventDesc">Descriptions:</label>
                <input type="text" id="eventDesc" name="eventDesc" required>


                <button type="submit">Save</button>
                <button class="delete-btn" onclick="closeEventPopup()">Cancel</button>
            </form>
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
