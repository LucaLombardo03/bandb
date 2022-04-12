<html>

<head>
    <title> DB & PHP test: DELETE</title>
</head>

<body>
    <?php
    $numeroCamera = array_key_exists('id_camera', $_POST) ? $_POST['id_camera'] : '';

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bedandbreakfast";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // sql to delete a record
    $sql = "DELETE FROM camere WHERE numeroCamera=1";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
    ?>
</body>

</html>