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
            <th>SN.</th>
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
                $i=1;
                while($donationData = $done->fetch_assoc()){?>
                <tr>
                    <td><?php echo $donationData['DONATION_ID'];?></td>
                    <td><?php echo $donationData['name']?></td>
                    <td><?php echo $donationData['bloodtype']?></td>
                    <td><?php echo $donationData['CONTACT_NUMBER']?></td>
                    <td><?php echo $donationData['D_NAME']?></td>
                    <td><?php  echo date($donationData['DONATION_DATE'])?></td>
                    <td>
                        <button class="view-btn" onclick="viewAppointment(this)">View</button>
                        <button class="delete-btn" onclick="deleteAppointment(this)">Delete</button>
                    </td>
                </tr>
        <?php
        $i++;}}?>
        </tbody>
    </table>
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

