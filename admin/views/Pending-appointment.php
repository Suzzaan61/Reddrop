<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending Donation Appointments</title>
    <link rel="stylesheet" href="../Public/styles/Pending-appointment.css">
</head>
<body>

<div id="appointments">

    <h2>Pending Donation Appointments</h2>

    <!-- Appointments Table -->
    <table id="appointmentsTable">
        <thead>
        <tr>
            <th>Name</th>
            <th>Blood Type</th>
            <th>Contact Number</th>
            <th>Hospital</th>
            <th>Appointment Date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <!-- Sample appointment data -->
        <tr>
            <td>John Doe</td>
            <td>A+</td>
            <td>Main Hospital</td>
            <td>9800008888</td>
            <td>2024-02-28</td>
            <td>
                <button class="view-btn" onclick="viewAppointment(this)">View</button>
                <button class="delete-btn" onclick="deleteAppointment(this)">Delete</button>
            </td>
        </tr>
        <!-- Add more rows as needed -->
        </tbody>
    </table>

</div>

<script>
    function viewAppointment(button) {
        const row = button.parentNode.parentNode;
        const patientName = row.cells[0].innerText;
        const bloodType = row.cells[1].innerText;
        const hospital = row.cells[2].innerText;
        const appointmentDate = row.cells[3].innerText;

        alert(`Appointment Details:\nPatient Name: ${patientName}\nBlood Type: ${bloodType}\nHospital: ${hospital}\nAppointment Date: ${appointmentDate}`);
    }

    function deleteAppointment(button) {
        const row = button.parentNode.parentNode;
        const table = row.parentNode;
        table.deleteRow(row.rowIndex);
    }
</script>

</body>
</html>

