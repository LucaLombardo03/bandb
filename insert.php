<html>
    <head>
        <title>DB & PHP test: INSERT</title>
    </head>
    <body>
        <?php
        $CF=$_POST["CF"];
        $nome=$_POST["nome"];
        $cognome=$_POST["cognome"];
        $email=$_POST["email"];
        $numeroTelefono=$_POST["numeroTelefono"];
        $dataNascita=$_POST["dataNascita"];

        $conn=mysqli_connect("localhost","root","","bedandbreakfast");
        $query="select * from clienti";
        $result=mysqli_query($conn,$query);

        $query="insert into clienti (CF, nome, cognome, email, numeroTelefono, dataNascita) values ('$CF', '$nome', '$cognome', '$email', '$numeroTelefono', '$dataNascita')";
        $result=mysqli_query($conn,$query);
        echo "il cliente $nome è stato inserito nel db";

        mysqli_close($conn);
        ?>
        <br><br>
        <a href="/B&B/b&b.php"> Elenco clienti</a>    
    </body>
</html>