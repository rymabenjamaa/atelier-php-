<?php 
    require 'client.class.php';
        $f=$_POST['firstn'];
            $e=$_POST['lastn'];
            $c=$_POST['email'];
            $d=$_POST['phone'];
        $new= new student;
        $newEtud = $new-> createclient ($f,$e,$c,$d);
               header('location:create.php');
?>