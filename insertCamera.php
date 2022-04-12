<html>

<head>
    <title>DB & PHP test: INSERT</title>
</head>

<body>
    <?php
    $numeroCamera = $_POST["numeroCamera"];
    $capacità = $_POST["capacità"];
    $costoNotte = $_POST["costoNotte"];

    $conn = mysqli_connect("localhost", "root", "", "bedandbreakfast");
    $query = "select * from camere";
    $result = mysqli_query($conn, $query);

    $query = "insert into camere (numeroCamera, capacità, costoNotte) values ('$numeroCamera', '$capacità', '$costoNotte')";
    $result = mysqli_query($conn, $query);
    echo "camera $numeroCamera è stata inserito nel db";

    mysqli_close($conn);
    ?>
    <br><br>
    <a href="/B&B/b&b.php"> HOME PAGE</a>
</body>

</html>