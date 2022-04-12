<html>

<head>
    <title>DB & PHP test</title>
</head>

<body background="yellow">

    <?php
    $conn = mysqli_connect("localhost", "root", "", "bedandbreakfast");
    $query = "select CF,nome,cognome,email,numeroTelefono,dataNascita from clienti";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) != 0) {
        echo "<table border>";
        echo "<tr>";
        echo "<th>CF</th>";
        echo "<th>nome</th>";
        echo "<th>cognome</th>";
        echo "<th>email</th>";
        echo "<th>numeroTelefono</th>";
        echo "<th>dataNascita</th>";
        echo "<tr>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>$row[CF]</td>";
            echo "<td>$row[nome]</td>";
            echo "<td>$row[cognome]</td>";
            echo "<td>$row[email]</td>";
            echo "<td>$row[numeroTelefono]</td>";
            echo "<td>$row[dataNascita]</td>";
            echo "<tr>";
        }
        echo "</table>";
    } else
        echo "Non ci sono clienti";
    mysqli_close($conn)
    ?>

    <br></br>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "bedandbreakfast");
    $query = "SELECT numeroCamera, capacità, costoNotte FROM camere";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) != 0) {
        echo "<table border>";
        echo "<tr>";
        echo "<th>numeroCamera</th>";
        echo "<th>capacità</th>";
        echo "<th>costoNotte</th>";
        echo "<tr>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>$row[numeroCamera]</td>";
            echo "<td>$row[capacità]</td>";
            echo "<td>$row[costoNotte]</td>";
            echo "<tr>";
        }
        echo "</table>";
    } else
        echo "Non ci sono clienti";
    mysqli_close($conn)
    ?>

    <br>
    <a href="/B&B/add.php"> Aggiungi un altro cliente</a>
    </br>
    <a href="/B&B/del.php"> Elimina un cliente</a>
    </br>
    <a href="/B&B/addCamera.php"> Aggiungi camera</a>
    </br>
    <a href="/B&B/delCamera.php"> Elimina camera</a>

</body>

</html>