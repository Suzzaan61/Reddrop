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
        <input type="text" id="searchFilter" placeholder="Search by Name, Address, Location, or Phone Number">
    </div>

    <table id="requestTable">
        <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Location</th>
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
        <tr>
            <td>John Doe</td>
            <td>123 Main St</td>
            <td>Cityville</td>
            <td>123-456-7890</td>
            <td>City Hospital</td>
            <td>456 Hospital St</td>
            <td>789-123-4567</td>
            <td>Jane Doe</td>
            <td>987-654-3210</td>
            <td>
                <button class="green-button" onclick="markAsDone('John Doe')">Done</button>
                <button class="red-button" onclick="openCancellationPopup('John Doe')">Cancel</button>
            </td>
        </tr>
        <tr>
            <td>Alice Smith</td>
            <td>456 Oak Ave</td>
            <td>Townsville</td>
            <td>321-654-9870</td>
            <td>Town General Hospital</td>
            <td>789 Medical Dr</td>
            <td>654-321-9876</td>
            <td>Bob Smith</td>
            <td>123-789-4560</td>
            <td>
                <button class="green-button" onclick="markAsDone('Alice Smith')">Done</button>
                <button class="red-button" onclick="openCancellationPopup('Alice Smith')">Cancel</button>
            </td>
        </tr>

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
