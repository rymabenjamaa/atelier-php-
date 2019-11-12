<?php
            require 'dbconnexion.php';
            $req = $bdd -> prepare (' DELETE * FROM students WHERE id= :id');
            $req-> bindParam (':id', $_GET['id']);
            $req-> execute();
            $data = $req->fetch();
        ?>