<html>
    <head>
        <title>DB & PHP test: DELETE</title>
    </head>
    <body>
    <?php
        $nome = array_key_exists( 'nome' , $_POST ) ? $_POST['nome'] : '' ;

        $conn=mysqli_connect("localhost","root","","bedandbreakfast");

        $query="DELETE FROM clienti WHERE nome = '$nome'";

        $result=mysqli_query($conn,$query);

        echo "il cliente $nome è stato eliminato dal db";
        mysqli_close($connection);
    ?>
<br><br>
<a href="/B&B/b&b.php">Visualizza elenco</a>
</body>
</html>