<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>les etudiants</title>
</head>
    <body>
        <a href ="create.php"> Nouvel Etudiant</a>        
        
        <div class="container py-3">
              <table class= "table table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>first name</th>
                        <th>last Name</th>
                        <th>Email</th>
                        <th>phone</th>
                        <th>Opération</th>
                      </tr>
                    </thead>
                    <tbody>

                
                          <?php
                          include 'dbconnexion.php';
                          $rep= $bdd->query('SELECT * FROM students');
                          while ($data= $rep->fetch())
                              {

                                  echo '<td>'.$data['id'].'</td>';
                                  echo '<td>'.$data['firstname'].'</td>';
                                  echo '<td>'.$data['lastname'].'</td>';
                                  echo '<td>'.$data['email'].'</td>';
                                  echo '<td>'.$data['phone'].'</td>';
                                  echo '<td> <a href="edit.php?id=' .$data['id']. '">editer</a> &nbsp; &nbsp; <a href="delete.php?id=' .$data['id']. '">supprimer </a> </td>';
                              echo'</tr>';
                              }
                          
                          ?>
                  </tbody>

                </table>

          </div>
      
        
    </body>
</html>
