<?php
function insertData($conn, $arrival, $departure, $first_name, $last_name, $email, $phone, $adults, $children, $table_pref)
{
    $arrival = trim(mysqli_real_escape_string($conn, htmlspecialchars($arrival)));
    $departure = trim(mysqli_real_escape_string($conn, htmlspecialchars($departure)));
    $first_name = trim(mysqli_real_escape_string($conn, htmlspecialchars($first_name)));
    $last_name = trim(mysqli_real_escape_string($conn, htmlspecialchars($last_name)));
    $email = trim(mysqli_real_escape_string($conn, htmlspecialchars($email)));
    $phone = trim(mysqli_real_escape_string($conn, htmlspecialchars($phone)));
    $adults = trim(mysqli_real_escape_string($conn, htmlspecialchars($adults)));
    $children = trim(mysqli_real_escape_string($conn, htmlspecialchars($children)));
    $table_pref = trim(mysqli_real_escape_string($conn, htmlspecialchars($table_pref)));
    

    // IF NAME OR EMAIL IS EMPTY
    if (empty($arrival) || empty($departure) || empty($first_name) || empty($last_name) || empty($email) || empty($phone) || empty($adults)  || empty($children)  || empty($table_pref)) {
        return 'Please fill all required fields.';
    }
    //IF EMAIL IS NOT VALID
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return 'Invalid email address.';
    } else {

        // INSERTING THE USER DATA
        $query = mysqli_query($conn, "INSERT INTO `pwani`(`arrival`,`departure`,`first_name`,`last_name`,`email`,`phone`,`adults`,`children`,`table_pref`) VALUES('$arrival','$departure','$first_name','$last_name','$email','$phone','$adults','$children','$table_pref')");
        // IF RESERVATION INSERTED
        if ($query) {
            return true;
        }
        return 'Opps something is going wrong!';
    }
}