<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prova DB</title>
</head>
<body>
    <?php
        $connection = mysqli_connect("localhost","root","","database");
        $query = "SELECT nome, denominazione FROM Persone, Citta
                  WHERE Persone.citta = Citta.sigla
                  ORDER BY nome";
        $result = mysqli_query($connection, $query);
        
        if(mysqli_num_rows($result) != 0){
            echo"<table>";
            echo"<tr>";
            echo"<th>Persone</tr>";
            echo"<th>Citt&agrave;</th>";
            while($row = mysqli_feach_array($result)){
                echo"<tr>";
                echo"<td>$row[nome]</td>";
                echo"<td>$row[denominazione]</td>";
                echo"</tr>";
            }
            echo "</table>";       
        }
        else
            echo "Nessuna Persona inserita &egrave; presente nel db.";
    mysqli_close($connection);
        
    ?>
</body>
</html>