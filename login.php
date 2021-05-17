<?php
        $username = htmlentities($_POST['username'], ENT_HTML5, 'UTF-8');
        $password = htmlentities($_POST['password'], ENT_HTML5, 'UTF-8');
        $user = 'Lucio';
        $pwd = 'Ciaone1234';
        
        if (empty($username) || empty($password)) {
            header("Location: index.php?errore=Inserire Username e/o Password");
            exit();
        }else {
            if ($username !== $user || $password !== $pwd) {
                header("Location: index.php?errore=Credenziali utente errate");
                exit();
            } else {
                session_start();
                $_SESSION['session_id'] = session_id();
                $_SESSION['session_user'] = $user;
                $_SESSION['password'] = $pwd;
                header('Location: dashboard.php');
                exit;
            }
        }
?>