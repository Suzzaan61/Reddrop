<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending Appointments</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #B91216;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #B91216;
            color: white;
            font-weight: bold;
        }

        /* Action Buttons */
        .action-btns button {
            padding: 8px 12px;
            margin-right: 5px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
        }

        .done-btn {
            background-color: #4CAF50;
            color: white;
        }

        .delete-btn {
            background-color: #f44336;
            color: white;
        }

        /* Search Styles */
        .search-container {
            text-align: left;
            margin-bottom: 20px;
        }

        .search-container input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Pending Appointments</h1>

    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search by Name or Location" onkeyup="searchTable()">
    </div>

    <table id="appointmentTable">
        <thead>
        <tr>
            <th>Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Location</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <!-- Sample Data -->
        <tr>
            <td>John Doe</td>
            <td>2024-02-25</td>
            <td>10:00 AM</td>
            <td>New York Blood Center</td>
            <td class="action-btns">
                <button class="done-btn">Done</button>
                <button class="delete-btn">Delete</button>
            </td>
        </tr>
        <tr>
            <td>Jane Smith</td>
            <td>2024-03-01</td>
            <td>02:30 PM</td>
            <td>Red Cross Blood Donation Center</td>
            <td class="action-btns">
                <button class="done-btn">Done</button>
                <button class="delete-btn">Delete</button>
            </td>
        </tr>
        <!-- Add more sample data as needed -->
        </tbody>
    </table>
</div>

<script>
    function searchTable() {
        var input, filter, table, tr, td, i, j, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("appointmentTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td");
            for (j = 0; j < td.length; j++) {
                if (td[j]) {
                    txtValue = td[j].textContent || td[j].innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                        break;
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    }
</script>

</body>
</html>
