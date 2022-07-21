<h1>Your Information</h1>
<p><span class="error">* required field</span></p>

<?php
  
// Initialize the session
session_start();

// store post variables in session variables
$_SESSION['newFloors'] = $_POST['newFloors'];
$_SESSION['newPaint'] = $_POST['newPaint'];
$_SESSION['newKitchen'] = $_POST['newKitchen'];
$_SESSION['newBathrooms'] = $_POST['newBathrooms'];
$_SESSION['newRoof'] = $_POST['newRoof'];
$_SESSION['newHVAC'] = $_POST['newHVAC'];
$_SESSION['foundationIssues'] = $_POST['foundationIssues'];
           
?>

<html>
<body>

<form action="cash_offer.php" method="post">
Enter your first name: <input type="text" name="firstName"><br>
Elease enter your last name: <input type="text" name="lastName"><br>
Enter your e-mail: <input type="text" name="email"><br>
Enter your phone number: <input type="text" name="phoneNumber"><br><br>
<input type="submit" value="Get Your Cash Offer">
</form>

</body>
</html>