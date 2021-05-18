<?php
	session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Dashboard</title>
</head>
<body>
    <header style="text-align: center;">
        <br>
        <h2>Benvenuto <?php echo $_SESSION['session_user'];?></h2>
        <a href="logout.php"><button><p>LOGOUT</p></button></a>
    </header>
    <br>
    <br>
    <br>
    <br>
        <div class="box">
            <h2>INFORMAZIONI UTENTE</h2>
            <br>
            <h3>Nome Utente: <?php echo $_SESSION['session_user'];?></h3>
            <br>
            <h3>Password: <?php echo $_SESSION['password'];?></h3>
        </div>
        <br>
        <br>
        
</body>
</html>
