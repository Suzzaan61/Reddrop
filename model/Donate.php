<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: ../components/Home.php");
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
    <title>Donate</title>
    <link rel="stylesheet" href="../public/styles/Donate.css">
    <?php require "../components/LoggedNav.php"; ?>
</head>

<body>
    <div class="container">
        <div class="title">
            <i class="fa-duotone fa-droplet"></i>
            <p>Donate</p>
        </div>
        <?php
        $lastDonationDate = 10;
        $eligibleDonationDate = 20;
        if ($eligibleDonationDate >= $lastDonationDate + 3) {
        ?>
            <form action="../controller/process_donation.php" method="post">

                <div id="donate-first">
                    <label for="blood_group">Blood Group:</label>
                    <div class="box">
                        <select id="blood_group" name="blood_group" required>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>


                    <p>Health Conditions (check all that apply):</p>

                    <div class="checkbox-group checkbox-wrapper-1">
                        <div class="check-items">
                            <input type="checkbox" class="substituted" id="health_condition1" name="health_conditions[]" value="nausea">
                            <label for="health_condition1">Nausea</label>
                        </div>
                        <div class="check-items">
                            <input type="checkbox" class="substituted" id="health_condition2" name="health_conditions[]" value="headache">
                            <label for="health_condition2">Headache</label>
                        </div>
                        <div class="check-items">
                            <input type="checkbox" class="substituted" id="health_condition3" name="health_conditions[]" value="fever">
                            <label for="health_condition3">Fever</label>
                        </div>
                        <div class="check-items">
                            <input type="checkbox" class="substituted" id="health_condition4" name="health_conditions[]" value="fatigue">
                            <label for="health_condition4">Fatigue</label>
                        </div>
                        <div class="check-items">
                            <input type="checkbox" class="substituted" id="health_condition5" name="health_conditions[]" value="dizziness">
                            <label for="health_condition5">Dizziness</label>

                        </div>
                        <div class="check-items">
                            <input type="checkbox" class="substituted" id="health_condition6" name="health_conditions[]" value="shortness_of_breath">
                            <label for="health_condition6">Shortness of Breath</label>

                        </div>
                        <div class="check-items">
                            <input type="checkbox" class="substituted" id="health_condition7" name="health_conditions[]" value="pain">
                            <label for="health_condition7">Pain (Specify):</label>

                            <input type="text" id="pain_condition" name="pain_condition">
                        </div>
                    </div>

                    <p>Other Health Information:</p>

                    <label for="drugs_taken">Any Drugs Taken?</label>
                    <input type="text" id="drugs_taken" name="drugs_taken">

                    <label for="existing_diseases">Any Existing Diseases?</label>
                    <input type="text" id="existing_diseases" name="existing_diseases">

                    <div class="continue">
                        <input type="button" value="back" onclick="history.back()">
                        <input type="button" value="next" onclick="nextTo()">

                    </div>
                </div>

                <div id="donate-second" hidden>
                    <div class="container">
                        <h2 class="mb-4">Select Donation Date and Time</h2>

                        <div class="form-group">
                            <label for="datepicker">Choose Date:</label>
                            <input type="date" id="datepicker" required>
                        </div>

                        <div class="form-group">
                            <label for="timepicker">Choose Time:</label>
                            <input type="time" id="timepicker" required>
                        </div>
                    </div>

                    <label for="donation_center">Select Donation Center:</label>
                    <div class="box">
                        <select id="donation_center" name="donation_center" required>
                            <option value="center1">Donation Center 1</option>
                            <option value="center2">Donation Center 2</option>  
                            <option value="center3">Donation Center 3</option>

                        </select>
                    </div>
                    <div class="continue">
                        <input type="button" value="back" onclick="backToFirst()">
                        <input type="submit" value="Book">

                    </div>
                </div>
            </form>

        <?php } else { ?>
            <div>
                <span class="last-donation-date">Last Donation Date : 2020/01/01</span>
                <span class="last-donation-date">Eligible Donation Date : 2020/01/01</span>
            </div>
            <h1 class='not-eligible'>Not eligible for donation until</h1>
            <span><?php echo $eligibleDonationDate ?></span>
        <?php } ?>



    </div>

    <script>
        const backToFirst = () => {
            document.getElementById('donate-second').setAttribute("hidden", "");
            document.getElementById('donate-first').removeAttribute("hidden");

        }
        const nextTo = () => {
            document.getElementById('donate-first').setAttribute("hidden", "");
            document.getElementById('donate-second').removeAttribute("hidden");

        }
    </script>
</body>

</html>
<?php require "../Modules/Footer.php" ?>

<?php
if (isset($_SESSION['userid']) && $_SESSION['userid'] >= 0 && isset($_GET['successful']) && $_GET['successful'] == 1) {
    echo "<style>.profile-img {
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