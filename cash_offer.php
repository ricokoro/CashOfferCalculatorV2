<?php
 
// Initialize the session
session_start();

// Store post variables in session variables
$_SESSION['firstName'] = $_POST['firstName'];
$_SESSION['lastName'] = $_POST['lastName'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['phoneNumber'] = $_POST['phoneNumber'];

//print all session variables
echo "<pre>";
print_r($_SESSION);

//convert session variables to php variables
$address = $_SESSION['address'];
$numBedrooms = $_SESSION['numBedrooms'];
$numBathrooms = $_SESSION['numBathrooms'];
$livingAreaSize = $_SESSION['livingAreaSize'];
$lotSize = $_SESSION['lotSize'];
$ARV = $_SESSION['ARV'];
if($_SESSION['newFloors'] === "Good Condition"){
    $newFloors = false;
}
elseif($_SESSION['newFloors'] === "Needs Replacing"){
    $newFloors = true;
}

if($_SESSION['newPaint'] === "Good Condition"){
    $newPaint = false;
}
elseif($_SESSION['newPaint'] === "Needs Replacing"){
    $newPaint = true;
}

if($_SESSION['newKitchen'] === "Good Condition"){
    $newKitchen = false;
}
elseif($_SESSION['newKitchen'] === "Needs Replacing"){
    $newKitchen = true;
}

if($_SESSION['newBathrooms'] === "Good Condition"){
    $newBathrooms = false;
}
elseif($_SESSION['newBathrooms'] === "Needs Replacing"){
    $newBathrooms = true;
}

if($_SESSION['newRoof'] === "Good Condition"){
    $newRoof = false;
}
elseif($_SESSION['newRoof'] === "Needs Replacing"){
    $newRoof = true;
}

if($_SESSION['newHVAC'] === "No"){
    $newHVAC = false;
}
elseif($_SESSION['newHVAC'] === "Yes"){
    $newHVAC = true;
}

if($_SESSION['foundationIssues'] === "No"){
    $foundationIssues = false;
}
elseif($_SESSION['foundationIssues'] === "Yes"){
    $foundationIssues = true;
}

// calculate rehab budget
$rehabBudget = 0.0;
if($newFloors == true){
    $rehabBudget += (4.75 * $livingAreaSize);
}
if($newPaint == true){
    $rehabBudget += (2.75 * $livingAreaSize);
}
if($newKitchen == true){
    $rehabBudget += 12000;
}
if($newBathrooms == true){
    $rehabBudget += (5000 * $numBathrooms);
}
if($newRoof == true){
    $rehabBudget += 11000;
}
if($newHVAC == true){
    $rehabBudget += 6000;
}
switch($foundationIssues){
    case 1:
        $rehabBudget += 15000;
        break;
    case 2:
        $rehabBudget += 50000;
        break;    
}

//calculate offer range
$lowerLimit = (($ARV * 0.9) * 0.75) - ($rehabBudget * 1.25) - 5000;
$upperLimit = (($ARV * 0.75) - $rehabBudget - 5000);
$offerRange = array($lowerLimit, $upperLimit);

//output offer range
echo "Northstate Equity's Cash Offer Range: " . $offerRange[0] . " to " . $offerRange[1];

?>