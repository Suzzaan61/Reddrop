<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
        }

        #userManagement {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
        }

        h2 {
            color: #B91216;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #B91216;
            color: #fff;
        }
        td.btn-group{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
        }

        .add-user-form, #editUserModal {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
            padding: 20px;
            margin-top: 20px;
            /*display: none; !* Initially hidden *!*/
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #B91216;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .button{
            background-color: #B91216;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            text-align: center;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #971010;
        }
        @media (max-width: 600px) {
            .add-user-form, #editUserModal {
                max-width: 100%;
            }
    </style>
</head>
<body>

<div id="userManagement">

    <h2>User Management</h2>

    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Blood Group</th>
            <th>Last Donation Date</th>
            <th>Contact Number</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
        <!-- Sample user data -->
        <tr>
            <td>Suzan Ghimire</td>
            <td>O+</td>
            <td>2023-01-15</td>
            <td>981009999</td>
            <td class="btn-group">
                <button class="button" onclick="editUser(1, 'Suzan Ghimire', 'O+', '2023-01-15')">Edit</button>
                <button class="button">Delete</button>
            </td>

        </tr>
        <tr>
            <td>Suzan Ghimire</td>
            <td>O+</td>
            <td>2023-01-15</td>
            <td>981009999</td>
            <td class="btn-group">
                <button class="button" onclick="editUser(1, 'Suzan Ghimire', 'O+', '2023-01-15')">Edit</button>
                <button class="button">Delete</button>
            </td>

        </tr>
        <tr>
            <td>Suzan Ghimire</td>
            <td>O+</td>
            <td>2023-01-15</td>
            <td>981009999</td>
            <td class="btn-group">
                <button class="button" onclick="editUser(1, 'Suzan Ghimire', 'O+', '2023-01-15')">Edit</button>
                <button class="button">Delete</button>
            </td>
        </tr>

        <!-- Add more user rows as needed -->
        </tbody>
    </table>

    <div class="add-user-form">
        <h2>Add User</h2>
        <form method="post" action="#">
            <div class="form-group">
                <label for="newUserName">Name:</label>
                <input type="text" id="newUserName" name="newUserName" required>
            </div>

            <div class="form-group">
                <label for="newUserBloodGroup">Blood Group:</label>
                <input type="text" id="newUserBloodGroup" name="newUserBloodGroup" required>
            </div>

            <div class="form-group">
                <label for="newUserLastDonationDate">Last Donation Date:</label>
                <input type="date" id="newUserLastDonationDate" name="newUserLastDonationDate" required>
            </div>
            <button class="button" type="submit" name="addUser">Add User</button>
        </form>
    </div>

    <div id="editUserModal">
        <h2>Edit User</h2>
        <form method="post" action="#">
            <input type="hidden" id="editUserId" name="userId">
            <div class="form-group">
                <label for="editUserName">Name:</label>
                <input type="text" id="editUserName" name="updatedName" required>
            </div>

            <div class="form-group">
                <label for="editUserBloodGroup">Blood Group:</label>
                <input type="text" id="editUserBloodGroup" name="updatedBloodGroup" required>
            </div>

            <div class="form-group">
                <label for="editUserLastDonationDate">Last Donation Date:</label>
                <input type="date" id="editUserLastDonationDate" name="updatedLastDonationDate" required>
            </div>

            <button class="button" type="submit" name="updateUser">Update User</button>
            <br><br>
            <button class="button" type="button" onclick="">Cancel</button>
        </form>
    </div>

</div>

</body>
</html>
<?php
