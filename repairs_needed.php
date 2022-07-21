<h1>Repair Information</h1>
<p><span class="error">* required field</span></p>

<?php
  
// Initialize the session
session_start();
       
// store post variables in session variables
$_SESSION['address'] = $_POST['address'];
$_SESSION['numBedrooms'] = $_POST['numBedrooms'];
$_SESSION['numBathrooms'] = $_POST['numBathrooms'];
$_SESSION['livingAreaSize'] = $_POST['livingAreaSize'];
$_SESSION['lotSize'] = $_POST['lotSize'];
$_SESSION['ARV'] = $_POST['ARV'];
           
?>

<html>
<body>

<p>What is the condition of the flooring?</p>
<form action="user_info.php" method="post">
<input type="radio" id="good_condition" name="newFloors" value="Good Condition">
<label for="good_condition">Good Condition</label><br>
<input type="radio" id="needs_replacing" name="newFloors" value="Needs Replacing">
<label for="needs_replacing">Needs Replacing</label><br>

<p>What is the condition of the interior paint?</p>
<!form action="kitchen_repairs.php" method="post">
<input type="radio" id="good_condition" name="newPaint" value="Good Condition">
<label for="good_condition">Good Condition</label><br>
<input type="radio" id="needs_replacing" name="newPaint" value="Needs Replacing">
<label for="needs_replacing">Needs Replacing</label><br>

<p>What is the condition of kitchen?</p>
<!form action="bathroom_repairs.php" method="post">
<input type="radio" id="good_condition" name="newKitchen" value="Good Condition">
<label for="good_condition">Good Condition</label><br>
<input type="radio" id="needs_replacing" name="newKitchen" value="Needs Replacing">
<label for="needs_replacing">Needs Replacing</label><br>

<p>What condition are the bathrooms in?</p>
<!form action="roof_repairs.php" method="post">
<input type="radio" id="good_condition" name="newBathrooms" value="Good Condition">
<label for="good_condition">Good Condition</label><br>
<input type="radio" id="needs_replacing" name="newBathrooms" value="Needs Replacing">
<label for="needs_replacing">Needs Replacing</label><br>

<p>What is the condition of the roof?</p>
<!form action="hvac_repairs.php" method="post">
<input type="radio" id="good_condition" name="newRoof" value="Good Condition">
<label for="good_condition">Good Condition</label><br>
<input type="radio" id="needs_replacing" name="newRoof" value="Needs Replacing">
<label for="needs_replacing">Needs Replacing</label><br>

<p>Does your property need a new HVAC system?</p>
<!form action="foundation_repairs.php" method="post">
<input type="radio" id="yes" name="newHVAC" value="Yes">
<label for="yes">Yes</label><br>
<input type="radio" id="no" name="newHVAC" value="No">
<label for="no">No</label><br>

<p>Does your property have foundational issues?</p>
<!form action="user_info.php" method="post">
<input type="radio" id="yes" name="foundationIssues" value="Yes">
<label for="yes">Yes</label><br>
<input type="radio" id="no" name="foundationIssues" value="No">
<label for="no">No</label><br><br>
<input type="submit" value="Next: Your Information">
</form>

</body>
</html>