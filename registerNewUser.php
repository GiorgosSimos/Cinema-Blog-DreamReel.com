<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>The Best Place for MovieLovers. | MovieRant.com</title>
    <link rel="stylesheet" type="text/css" href="CSS/myStyle.css" >
    <link sizes="16x16" rel="icon" href="images/camera_icon.ico">
</head>
<body>
<div id="site_logo_container">
    <img id="welcome_logo" src="images\site_logo.jpg" alt="site_logo" width="60px" height="60px">
    <p id="welcome_note">MovieRant.com</p>
</div>
<div class="topnav">
    <a href="home.html">Αρχική</a>
    <a href="topFilms.html">Καλύτερες Ταινίες</a>
    <a href="topFilmMakers.html">Κορυφαίοι Δημιουργοί</a>
    <a class="active" href="registerNewUser.php">Εγγραφή</a>
    <a href="Bio.html">Βιογραφικό</a>
</div>
<p id="reg_request">Γίνετε τώρα μέλος της κοινότητας μας και απολαύστε μοναδικά προνόμια και εκπτώσεις!</p>
<form method="POST" action="registerNewUser.php">
    <fieldset><legend>Φόρμα Καταχώρησης Νέου Χρήστη</legend>
        <table class="table_form">
            <tr>
                <td><span class="details">Ονοματεπώνυμο:</span></td>
                <td><input type="text" pattern="[Α-Ωα-ωΆΈΉΊΌΎΏάέήίόύώ \t\n\r]+" placeholder="Μόνο ελληνικούς χαρακτήρες με τόνους" id="fullname" name="fullname" size="36" required></td>
            </tr>
            <tr>
                <td><span class="details">Διεύθυνση Κατοικίας:</span></td>
                <td><input id="address" type="text" placeholder="Γράψτε την διεύθυνση σας" size="30" name="address"></td>
            </tr>
            <tr>
                <td>Χώρα Διαμονής:</td>
                <td>
                    <select id="country" name="country">
                        <optgroup label="Ευρώπη">
                            <option selected>Ελλάδα</option>
                            <option>Αγγλία</option>
                            <option>Γαλλία</option>
                            <option>Ισπανία</option>
                        </optgroup>
                        <optgroup label="Ευρασία">
                            <option>Ρωσία</option>
                        </optgroup>
                        <optgroup label=" Β. Αμερική">
                            <option>Ηνωμένες Πολιτείες</option>
                        </optgroup>
                    </select>
                </td>
            </tr>
            <tr>
                <td><span class="details">Ταχ. Κώδικας:</span></td>
                <td><input id="zip" type="text" pattern="[0-9]{5}" placeholder="12345" size="8" maxlength="5" name="zip" required></td>
            </tr>
            <tr>
                <td><span class="details">E-mail:</span></td>
                <td><input id="mail" type="email" placeholder="name@webmail.gr" size="30" name="mail" required></td>
            </tr>
            <tr>
                <td><span class="details">Σταθερό Τηλέφωνο:</span></td>
                <td><input id="telephone_num" type="tel" pattern="\+30210\d{7}" size="15" value="+30210XXXXXXX" maxlength="13" name="telephone_num" required></td>
            </tr>
            <tr>
                <td><span class="details">Αρ. Πιστωτικής Κάρτας:</span></td>
                <td><input id="card_num" type="text" placeholder="ΧΧΧΧ ΧΧΧΧ ΧΧΧΧ ΧΧΧΧ" pattern="[0-9]{16}" maxlength="16" name="card_num" required></td>
            </tr>
            <tr>
                <td>Τύπος Κάρτας:</td>
                <td>
                    <select  id="card_type" name="card_type">
                        <option selected>Visa</option>
                        <option>Mastercard</option>
                        <option>Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input id="submit_button" type="submit" value="Καταχώρηση" name="submit_button"></td>
                <td><input id="reset_button" type="reset" value="Καθαρισμός στοιχείων"></td>
                <td colspan="2"><input value='Εκτύπωση Σελίδας' type='button' id="print_button" onclick="printPage()"/>
                    <script type="text/javascript">
                        function printPage() {
                            window.print();
                        }
                    </script>
                </td>
            </tr>
        </table>
    </fieldset>
</form>

<form method="get" action="registerNewUser.php">
    <label for="user">Αναζήτηση σύμφωνα με το e-mail: </label>
    <input type="text" id="user" name="user" required>
    <input type="submit" name="search_button" id="search_button" value="Αναζήτηση" >
    <br><br>
</form>

<p id="errors" style="color: crimson;"></p>
<script>
    function checkMe(){

        var fullname = document.getElementById("fullname").value;
        if (/^[Α-Ωα-ωΆΈΉΊΌΎΏάέήίόύώ \t\n\r]+$/.test(fullname))
        {
            document.getElementById("errors").innerText = "";
            document.getElementById("fullname").style = "";
        } else {
            document.getElementById("errors").innerText = "Το πεδίο του ονόματος πρέπει να περιέχει μόνο ελληνικούς χαρακτήρες με στίξη και να μην είναι κενό.";
            document.getElementById("fullname").style = "border:2px solid red;";
        }

        zip = document.getElementById("zip").value;
        if ( /^[0-9]{5}$/.test(zip) ) {
            document.getElementById("errors").innerText="";
            document.getElementById("zip").style="" ;
        } else {
            document.getElementById("errors").innerText += "\nΟ ταχ. κώδικας πρέπει να περιέχει 5 αριθμούς και να μην είναι κενός. ";
            document.getElementById("zip").style = "border:2px solid red;";
        }

        e_mail = document.getElementById("mail").value;
        if (e_mail.includes("@")) {
            document.getElementById("errors").innerText="";
            document.getElementById("mail").style="" ;
        } else {
            document.getElementById("errors").innerText += "\nΤο e-mail πρέπει να περιλαμβάνει οπωσδήποτε το σύμβολο @. ";
            document.getElementById("mail").style = "border:2px solid red;";
        }

        hardline_num = document.getElementById("telephone_num").value;
        var remainingDigits = hardline_num.slice(6);

        if (hardline_num.startsWith("+30210") && remainingDigits.length === 7 && !isNaN(remainingDigits)) {
            document.getElementById("errors").innerText = "";
            document.getElementById("telephone_num").style = "" ;
        } else {
            document.getElementById("errors").innerText += "\nΤο σταθερό τηλέφωνο πρέπει να είναι της μορφής +30210xxxxxxx. ";
            document.getElementById("telephone_num").style = "border:2px solid red;";
        }

        credit_card_num = document.getElementById("card_num").value;
        if (/^[0-9]{16}$/.test(credit_card_num)) {
            document.getElementById("errors").innerText = "";
            document.getElementById("card_num").style = "" ;
        } else {
            document.getElementById("errors").innerText += "\nΟ αριθμός της πιστωτικής κάρτας πρέπει να αποτελείται απο ακριβώς 16 ψηφία. ";
            document.getElementById("card_num").style = "border:2px solid red;";
        }

        if (document.getElementById("errors").innerText !== "") {
            alert("Λανθασμένη/ελλιπής υποβολή στοιχείων, συμβουλευτείτε τις οδηγίες στο τέλος της σελίδας");// αν ο χρήστης επιθυμεί ένα καθολικό μήνυμα για όλα τα σφάλματα
        }

    }
    document.getElementById("submit_button").addEventListener("click", function () {checkMe()});

</script>
<?php

require_once 'credent.php';

$dbconn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_BASE);

if (!$dbconn) {
    die("Connection failed: " . mysqli_connect_error ());
}
//Κωδικοποίηση UTF-8 για ελληνικά
mysqli_set_charset($dbconn, "utf8");

//Δημιουργία ερωτήματος - Καταχώρηση Νέου Χρήστη
if (isset($_POST['submit_button']) && $_POST['submit_button'] === 'Καταχώρηση'){

    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $zip = $_POST['zip'];
    $mail = $_POST['mail'];
    $phone_num = $_POST['telephone_num'];
    $card_num = $_POST['card_num'];
    $card_type = $_POST['card_type'];

    $fullname = mysqli_real_escape_string($dbconn, $fullname);
    $address = mysqli_real_escape_string($dbconn, $address);
    $country = mysqli_real_escape_string($dbconn, $country);
    $zip = mysqli_real_escape_string($dbconn, $zip);
    $mail = mysqli_real_escape_string($dbconn, $mail);
    $phone_num = mysqli_real_escape_string($dbconn, $phone_num);
    $card_num = mysqli_real_escape_string($dbconn, $card_num);
    $card_type = mysqli_real_escape_string($dbconn, $card_type);

    $sql = "insert into customer (fullname, address, country, zip, mail, telephone_num, card_num, card_type)
    values ('$fullname','$address', '$country', '$zip','$mail', '$phone_num', '$card_num', '$card_type')";

    $result = mysqli_query($dbconn, $sql) ;
    if ($result)
    {
        echo '<script>alert("Συγχαρητήρια! Η καταχώρηση του νέου χρήστη ολοκληρώθηκε με επιτυχία.");</script>';
    }//if
    else
    {
        echo "<br>Χμμ... Η καταχώρηση του νέου χρήστη απέτυχε.<br>";
        die('Query failed: ' . mysqli_last_error());
    }//else
}//if
else
{
    if (isset($_GET['user']))
    {
        $given_mail = $_GET['user'];
        $sql = "SELECT * FROM customer WHERE mail = '$given_mail'";
        $result = mysqli_query($dbconn, $sql);
        $rowCount = mysqli_num_rows($result);//Γραμμές με αποτελέσματα που επιστρέφει το ερώτημα που υποβάλαμε στη βάση

        if ($rowCount > 0)
        {
            // Εμφάνιση αποτελεσμάτων στα πεδία της φόρμας
            while($row = mysqli_fetch_array($result))
            {
                echo '<script>document.getElementById("fullname").value = "' . $row['fullname'] . '";</script>';
                echo '<script>document.getElementById("address").value = "' . $row['address'] . '";</script>';
                echo '<script>document.getElementById("country").value = "' . $row['country'] . '";</script>';
                echo '<script>document.getElementById("zip").value = "' . $row['zip'] . '";</script>';
                echo '<script>document.getElementById("mail").value = "' . $row['mail'] . '";</script>';
                echo '<script>document.getElementById("telephone_num").value = "' . $row['telephone_num'] . '";</script>';
                echo '<script>document.getElementById("card_num").value = "' . $row['card_num'] . '";</script>';
                echo '<script>document.getElementById("card_type").value = "' . $row['card_type'] . '";</script>';
            }//while
        }//if
        else
        {
            echo '<script>alert("Δεν υπάρχει χρήστης με αυτό το email");</script>';
        }//else
    }//if
}//else

//κλείσιμο σύνδεσης
mysqli_close($dbconn);
?>
<h3>&copy; Copyright. All rights reserved: Georgios Simos</h3>
</body>
</html>