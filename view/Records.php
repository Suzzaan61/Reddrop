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
    <title>Blood Donation History</title>
    <link rel="stylesheet" href="../styles/Records.css">
    <?php require "../view/LoggedNav.php"; ?>
</head>
<body>
<div class="container">

<h1>Blood Donation History</h1>

<div id="filters">
    <input type="text" id="search" oninput="filterTable()" placeholder="Search by Name">
    <select id="year" onchange="filterTable()">
        <option value="all">All</option>
        <option value="2024">2024</option>
        <option value="2023">2023</option>
        <option value="2022">2022</option>
    </select>
    <button onclick="printTable()">Print</button>
</div>

<table id="donationTable">
    <thead>
    <tr>
        <th>Name</th>
        <th>Blood Type</th>
        <th>Donation Date</th>
        <th>Location</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Suzan Ghimire</td>
        <td>A+</td>
        <td>2024-02-15</td>
        <td>New York</td>
    </tr>
    <tr>
        <td>Jane Smith</td>
        <td>O-</td>
        <td>2023-11-30</td>
        <td>Los Angeles</td>
    </tr>
    <tr>
        <td>Jane Smith</td>
        <td>O-</td>
        <td>2023-11-30</td>
        <td>Los Angeles</td>
    </tr>
    <tr>
        <td>Jane Smith</td>
        <td>O-</td>
        <td>2023-11-30</td>
        <td>Los Angeles</td>
    </tr><tr>
        <td>Jane Smith</td>
        <td>O-</td>
        <td>2023-11-30</td>
        <td>Los Angeles</td>
    </tr>
    <!-- Add more rows as needed -->
    </tbody>

</table>
    <button type="button" onclick="history.back()">Back</button>

    </div>
</div>

<script>
    function filterTable() {
        var input, year, filter, table, tr, td, i, txtValue;
        input = document.getElementById("search");
        year = document.getElementById("year").value;
        filter = input.value.toUpperCase();
        table = document.getElementById("donationTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those that don't match the search query and year
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0]; // Assume the name is in the first column
            yearColumn = tr[i].getElementsByTagName("td")[2]; // Assume the year is in the third column
            if (td && yearColumn) {
                txtValue = td.textContent || td.innerText;
                yearValue = yearColumn.textContent || yearColumn.innerText;
                if ((txtValue.toUpperCase().indexOf(filter) > -1 || filter === "") &&
                    (year === "all" || year === yearValue)) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }



    function printTable() {
        let printWindow = window.open('', '_blank');
        printWindow.document.write('<html><head><title>Blood Donation History</title><?php require "../controller/dashboard-fetch.php";?></head><body>');
        printWindow.document.write('<h1>RedDrop</h1>'); // Logo and website name
        printWindow.document.write(`<p><strong>Name:<?php
        if ($result) {
            $row = $result->fetch_assoc();
            echo "<p id='admin-name'>" . $row['name'] . "</p>";
        }
        ?></p>`);
        //printWindow.document.write(`<p><strong>Address:<?php
        //if ($result) {
        //    $row = $result->fetch_assoc();
        //    echo "<p id='admin-name'>" . $row['address'] . "</p>";
        //}
        //?>//</p>`);
        //printWindow.document.write(`<p><strong>Contact Number:<?php
        //if ($result) {
        //    $row = $result->fetch_assoc();
        //    echo "<p id='admin-name'>" . $row['contactNumber'] . "</p>";
        //}
        //?>//</p>`);
        //printWindow.document.write(`<p><strong>Blood Group:<?php
        //if ($result) {
        //    $row = $result->fetch_assoc();
        //    echo "<p id='admin-name'>" . $row['bloodtype'] . "</p>";
        //}
        //?>//</p>`);
        printWindow.document.write('<h1>Blood Donation History</h1>');
        printWindow.document.write(document.getElementById("donationTable").outerHTML);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();

    }
    // function printTable() {
    //     var printWindow = window.open('', '_blank');
    //     printWindow.document.write('<html><head><title>Blood Donation History</title></head><body>');
    //     printWindow.document.write('<h1>Blood Donation History</h1>');
    //     printWindow.document.write(document.getElementById("donationTable").outerHTML);
    //     printWindow.document.write('</body></html>');
    //     printWindow.document.close();
    //     printWindow.print();
    // }


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
