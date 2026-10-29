<?php
$conn = mysqli_connect("localhost", "root", "", "Contacts");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$sql = "INSERT INTO my_contact (name, email, contact) VALUES (?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "sss", $name, $email, $contact);

if (mysqli_stmt_execute($stmt)) {
    echo "Contact saved sucessfully!";
} else {
    echo "Error saving contact.";
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
       

