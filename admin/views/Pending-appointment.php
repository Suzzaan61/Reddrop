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
            <th>Donation Center</th>
            <th>Appointment Date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php require "../model/Admin-donation-fetch.php";
            if ($done->num_rows >= 0){
                while($donationData = $done->fetch_assoc()){?>
                <tr>
                    <td><?php echo $donationData['name']?></td>
                    <td><?php echo $donationData['bloodtype']?></td>
                    <td><?php echo $donationData['CONTACT_NUMBER']?></td>
                    <td><?php echo $donationData['D_NAME']?></td>
                    <td><?php  echo date($donationData['LAST_BOOKED_TIME'])?></td>
                    <td>
                        <button class="view-btn" onclick="viewAppointment(this)">View</button>
                        <button class="delete-btn" onclick="deleteAppointment(this)">Delete</button>
                    </td>
                </tr>
        <?php
        }}?>
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

