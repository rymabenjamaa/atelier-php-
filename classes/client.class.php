<?php
require 'dbconnect.class.php';
class student  
{
private $cnx;

public function __construct()
    {
            $db = new BaseDonne; 
            $this->cnx=  $db->connectDB();


    }   
public function readallStudents ()
    {
        try{    
                $req = 'SELECT * FROM students';
                $result = $this->cnx->prepare($req);
                $result->execute();
                return $result; 
            }catch (PDOException $e)
                {
                    echo $e->getMessage();
                }


    }
public function createclient ($firstn,$lastn,$email,$phone)
{
    try 
    {   $sql = "INSERT INTO students (id,firstname,lastname,email,phone) VALUES (null,:clt_nom,:clt_prenom,:clt_email,:clt_tel)";
        $result = $this->cnx->prepare($sql);
        $result->bindparam ("clt:nom", $firstn);
        $result->bindparam ("clt:prenom", $lastn);
        $result->bindparam ("clt:email", $email);
        $result->bindparam ("clt:tel", $phone);
        $result->execute();
    }  catch (PDOException $ex){

        echo $ex->getMessage();
        header('location: ../create.php');

                               }


}


}


?>