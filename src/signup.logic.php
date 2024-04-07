<?php 


if (empty($_POST["logname"])) {
    die("Name is required");
}


if ( ! filter_var($_POST["logemail"], FILTER_VALIDATE_EMAIL)) {
    die("Please enter a valid Email");
}


if (strlen($_POST["logpass"]) < 8) {
    die("Password must be at least 8 characters long");
}


if ( ! preg_match("/[a-z]/i", $_POST["logpass"])) {
    die("Password must contain at least 1 letter");
}


if ( ! preg_match("/[0-9]/", $_POST["logpass"])) {
    die("Password must contain at least 1 number");
}


$password_hash = password_hash($_POST["logpass"], PASSWORD_DEFAULT);


$mysqli = require __DIR__ . "/database.php";


$sql = "INSERT INTO user (name, email, password_hash)
        VALUES (?, ?, ?)";


$stmt = $mysqli->stmt_init();


if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}


$stmt->bind_param("sss",
                        $_POST["logname"],
                        $_POST["logemail"],
                        $password_hash);


                        try {
                            if ($stmt->execute()) {
                                header("Location: signup-success.html");
                                exit;
                            } else {
                                die("Signup failed for an unknown reason."); // 
                            }
                        } catch (mysqli_sql_exception $e) {
                            if ($e->getCode() == 1062) { 
                                die("Email is already in use."); 
                            } else {
                                die("An error occurred: " . $e->getMessage()); 
                            }
                        }
                        
                        




print_r($_POST);
var_dump($password_hash);