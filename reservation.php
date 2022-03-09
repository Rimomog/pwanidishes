<?php
    // Output messages
    $responses = [];
    // Check if the form was submitted
    if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['date'], $_POST['time'], $_POST['people'], $_POST['message'])) {
    	// Process form data

        // Assign POST variables
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
    $phone = htmlspecialchars($_POST['phone'], ENT_QUOTES);
    $date = htmlspecialchars($_POST['date'], ENT_QUOTES);
    $time = htmlspecialchars($_POST['time'], ENT_QUOTES);
    $people = htmlspecialchars($_POST['people'], ENT_QUOTES);
    $message = htmlspecialchars($_POST['message'], ENT_QUOTES);

// Name must contain only alphabet characters.
if (!preg_match('/^[a-zA-Z]+$/', $name)) {
	$responses[] = 'Name must contain only characters!';
}
// Validate email adress
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $responses[] = 'Email is not valid!';
}
// Validate Phone Number
if (!preg_match('/^[0-9]{10}+$/', $phone)) {
    $responses[] = 'Enter a valid Phone Number!';
}
// validate the date
// $test_date = '03/22/2010';
$test_arr  = explode('/', $date);
if (!checkdate($test_arr[0], $test_arr[1], $test_arr[2])) {
    // valid date ...
    $responses[] = 'Enter a valid Phone Number!';
}
// validate the time
if() {
    
}
// validate the Number of field people
// Validate the message field

}
?>