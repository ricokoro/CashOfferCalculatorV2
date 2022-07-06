<!?php
// define variables and set to empty values
$addressErr = $bedroomsErr = $bathroomsErr = $housesizeErr = $lotsizeErr = $ARVErr = "";
$address = $numBedrooms = $numBathrooms = $livingAreaSize = $lotSize = $ARV = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address = test_input($_POST["address"]);
  }

  if (empty($_POST["numBedrooms"])) {
    $bedroomsErr = "Number of bedrooms is required";
  } else {
    $numBedrooms = test_input($_POST["numBedrooms"]);
  }

  if (empty($_POST["numBathrooms"])) {
    $bathroomsErr = "Number of bathrooms is required";
  } else {
    $numBathrooms = test_input($_POST["numBathrooms"]);
  }

  if (empty($_POST["livingAreaSize"])) {
    $housesizeErr = "House size is required";
  } else {
    $ARV = test_input($_POST["livingAreaSize"]);
  }

  if (empty($_POST["lotSize"])) {
    $lotsizeErr = "Lot size is required";
  } else {
    $lotSize = test_input($_POST["lotSize"]);
  }

  if (empty($_POST["ARV"])) {
    $ARVErr = "Property value is required";
  } else {
    $ARV = test_input($_POST["ARV"]);
  }

}
?>

<h1>Property Details</h1>
<p><span class="error">* required field</span></p>

<html>
<body>

<form action="repairs_needed.php" method="post">
Enter the address of the property: <input type="text" name="address">
<span class="error">* <?php echo $addressErr;?></span><br>
# bedrooms: <input type="number" name="numBedrooms">
<span class="error">* <?php echo $bedroomsErr;?></span><br>
# bathrooms: <input type="float" name="numBathrooms">
<span class="error">* <?php echo $bathroomsErr;?></span><br>
House size (sqft): <input type="number" name="livingAreaSize">
<span class="error">* <?php echo $housesizeErr;?></span><br>
Lot size (sqft): <input type="number" name="lotSize">
<span class="error">* <?php echo $lotsizeErr;?></span><br>
What is your estimated property value? <input type="number" name="ARV">
<span class="error">* <?php echo $ARVErr;?></span><br><br>
<input type="submit" value="Next: Repair Info">
</form>

</body>
</html>