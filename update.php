<?php
    $servername = "localhost";
    $username = "webadmin";
    $password = "1234";
    $dbname = "myDB1";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }
    $conn->close();

?>