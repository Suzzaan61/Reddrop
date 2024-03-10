<?php
session_start();
require "../model/Admin-request-fetch.php";
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
    <title>Blood Request Management</title>
    <link rel="stylesheet" href="../Public/styles/BloodRequest.css">
</head>
<body>

<div id="BloodRequest">

    <h2>Blood Request Management</h2>

    <div class="search-container">
        <input type="text" id="searchFilter" placeholder="Search">
    </div>

    <table id="requestTable">
        <thead>
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Hospital Name</th>
            <th>Hospital Address</th>
            <th>Hospital Contact</th>
            <th>Patient Name</th>
            <th>Patient Contact</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        <?php require "../model/Admin-request-fetch.php";
        if ($done->num_rows >= 0){
            $i = 1;

            while($requestData = $done->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $requestData['name']?></td>
                    <td><?php echo $requestData['address']?></td>
                    <td><?php echo $requestData['contactNumber']?></td>
                    <td><?php echo $requestData['HOSPITAL_NAME']?></td>
                    <td><?php echo $requestData['HOSPITAL_ADDRESS']?></td>
                    <td><?php echo $requestData['HOSPITAL_CONTACT']?></td>
                    <td><?php echo $requestData['PATIENT_NAME']?></td>
                    <td><?php echo $requestData['HOSPITAL_CONTACT']?></td>
                    <td>
                        <button class="view-btn green-button" onclick="doneRequest()">Done</button>
                        <button class="delete-btn red-button" onclick="deleteRequest(this)">Delete</button>
                    </td>
                </tr>
                <?php $i++;
            }}?>
        </tbody>
    </table>

    <div class="popup-container" id="cancellationPopup">
        <div class="popup-content">
            <h3>Provide Remarks for Cancellation</h3>
            <textarea id="remarks" rows="4" cols="50" placeholder="Enter remarks"></textarea>
            <button class="close-btn" onclick="closeCancellationPopup()">Submit</button>
        </div>
    </div>

</div>

<script>
    function markAsDone(name) {
        // Implement logic to mark the request as done
        alert(`Marking ${name}'s request as done`);
    }

    function openCancellationPopup(name) {
        // Implement logic to open the cancellation popup
        const popup = document.getElementById('cancellationPopup');
        popup.style.display = 'flex';
    }

    function closeCancellationPopup() {
        // Implement logic to close the cancellation popup
        const popup = document.getElementById('cancellationPopup');
        popup.style.display = 'none';
        // You can also submit the remarks data here
    }

    function searchRequests() {
        // Implement logic to filter the table based on search criteria
        const searchFilter = document.getElementById('searchFilter').value.toLowerCase();

        const table = document.getElementById('requestTable');
        const rows = table.getElementsByTagName('tr');

        for (let i = 1; i < rows.length; i++) {
            const cells = rows[i].getElementsByTagName('td');
            let matchFound = false;

            for (let j = 0; j < cells.length; j++) {
                const cellContent = cells[j].textContent.toLowerCase();
                if (cellContent.includes(searchFilter)) {
                    matchFound = true;
                    break;
                }
            }

            if (matchFound) {
                rows[i].style.display = '';
            } else {
                rows[i].style.display = 'none';
            }
        }
    }

    // Real-time search on input change
    document.getElementById('searchFilter').addEventListener('input', searchRequests);
</script>

</body>
</html>
