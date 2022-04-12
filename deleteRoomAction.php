<html>
    <head>
        <title>DB & PHP test: DELETE </title>
</head>
<body>
    <?php
        $personaggio=$_POST["personaggio"];
        $citta=$_POST["citta"];
        $connection=mysqli_connect("localhost","root","","bedandbreakfast");
        $query="delete from personaggi where nome = '$personaggio' ";
        $result=mysqli_query($connection,$query);
        echo "il personaggio $personaggio è stato eliminato dal db";
        mysqli_close($connection);
    ?>
<br><br>
<a href="/DisneyLand/Disneyland5CI.php">Visualizza elenco personaggi</a>
</body>
</html>
