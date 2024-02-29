<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Centers</title>
    <link rel="stylesheet" href="../Public/styles/Donation-center.css">
</head>
<body>

<div id="donationCenters">

    <h2>Donation Centers</h2>

    <input type="text" class="search-bar" placeholder="Search..." oninput="searchDonationCenters(this.value)">

    <button class="add-donation-center-btn" onclick="openPopup()">Add Donation Center</button>

    <!-- Donation Centers Table -->
    <table id="donationCenterTable">
        <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Google Maps Link</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <!-- Sample donation center data -->
        <tr>
            <td>Red Cross</td>
            <td>123 Main St, Cityville</td>
            <td>123-456-7890</td>
            <td><a href="https://maps.google.com/?q=123+Main+St+Cityville" target="_blank">Google Maps Link</a></td>
            <td>
                <button class="edit-btn" onclick="editDonationCenter(this)">Edit</button>
                <button class="delete-btn" onclick="deleteDonationCenter(this)">Delete</button>
            </td>
        </tr>
        <!-- Add more rows as needed -->
        </tbody>
    </table>

    <!-- Edit Donation Center Popup -->
    <div class="popup" id="editDonationCenterPopup">
        <div class="popup-content">
            <h3>Edit Donation Center</h3>
            <label for="editName">Name:</label>
            <input type="text" id="editName" name="editName" required>

            <label for="editAddress">Address:</label>
            <textarea id="editAddress" name="editAddress" rows="2" required></textarea>

            <label for="editContact">Contact:</label>
            <input type="text" id="editContact" name="editContact" required>

            <label for="editGoogleMapLink">Google Maps Link:</label>
            <input type="text" id="editGoogleMapLink" name="editGoogleMapLink" placeholder="Paste Google Maps link">

            <button onclick="saveEditedDonationCenter()">Save Changes</button>
            <button class="delete-btn" onclick="closeEditPopup()">Cancel</button>
        </div>
    </div>

    <!-- Add Donation Center Popup -->
    <div class="popup" id="addDonationCenterPopup">
        <div class="popup-content">
            <h3>Add Donation Center</h3>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="2" required></textarea>

            <label for="contact">Contact:</label>
            <input type="text" id="contact" name="contact" required>

            <label for="googleMapLink">Google Maps Link:</label>
            <input type="text" id="googleMapLink" name="googleMapLink" placeholder="Paste Google Maps link">

            <button onclick="addDonationCenter()">Submit</button>
            <button class="delete-btn" onclick="closePopup()">Cancel</button>
        </div>
    </div>

</div>

<script>
    let editingRow;

    function openPopup() {
        const popup = document.getElementById('addDonationCenterPopup');
        popup.style.display = 'flex';
    }

    function closePopup() {
        const popup = document.getElementById('addDonationCenterPopup');
        popup.style.display = 'none';
    }

    function openEditPopup() {
        const popup = document.getElementById('editDonationCenterPopup');
        popup.style.display = 'flex';
    }

    function closeEditPopup() {
        const popup = document.getElementById('editDonationCenterPopup');
        popup.style.display = 'none';
    }

    function addDonationCenter() {
        const name = document.getElementById('name').value;
        const address = document.getElementById('address').value;
        const contact = document.getElementById('contact').value;
        const googleMapLink = document.getElementById('googleMapLink').value;

        // Add the new donation center to the table
        const table = document.getElementById('donationCenterTable');
        const newRow = table.insertRow(table.rows.length);
        const cell1 = newRow.insertCell(0);
        const cell2 = newRow.insertCell(1);
        const cell3 = newRow.insertCell(2);
        const cell4 = newRow.insertCell(3);
        const cell5 = newRow.insertCell(4);

        cell1.innerHTML = name;
        cell2.innerHTML = address;
        cell3.innerHTML = contact;
        cell4.innerHTML = `<a href="${googleMapLink}" target="_blank">Google Maps Link</a>`;
        cell5.innerHTML = `<button class="edit-btn" onclick="editDonationCenter(this)">Edit</button>
                         <button class="delete-btn" onclick="deleteDonationCenter(this)">Delete</button>`;

        // Clear the form fields
        document.getElementById('name').value = '';
        document.getElementById('address').value = '';
        document.getElementById('contact').value = '';
        document.getElementById('googleMapLink').value = '';

        // Close the popup after submission
        closePopup();
    }

    function editDonationCenter(button) {
    }

    function saveEditedDonationCenter() {

    }

    function deleteDonationCenter(button) {

    }

    function searchDonationCenters(query) {
        const table = document.getElementById('donationCenterTable');
        const rows = table.getElementsByTagName('tr');

        for (let i = 1; i < rows.length; i++) {
            const name = rows[i].cells[0].innerText.toLowerCase();
            const address = rows[i].cells[1].innerText.toLowerCase();
            const contact = rows[i].cells[2].innerText.toLowerCase();

            if (name.includes(query) || address.includes(query) || contact.includes(query)) {
                rows[i].style.display = '';
            } else {
                rows[i].style.display = 'none';
            }
        }
    }
</script>

</body>
</html>
