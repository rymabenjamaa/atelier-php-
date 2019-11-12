<?php 
require 'dbconnexion.php';
   

        $firstn = $_POST['firstn'];
        $lastn = $_POST['lastn'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $id = $_POST ['id'];
  
        //  header('location:index.php');
        $req = $bdd->prepare(
        'UPDATE students
       SET firstn = :firstn , lastn = :lastn , email = :email , phone = :phone WHERE id = :id '
       );
      $req->bindParam(':firstn', $firstn );
       $req->bindParam(':lastn', $lastn );
       $req->bindParam(':email', $email );
       $req->bindParam(':phone', $phone );
       $req->bidParam(':id', $id);
            $req->execute();
?>