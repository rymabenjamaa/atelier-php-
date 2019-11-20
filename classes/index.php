<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion des clients</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h2>Gestion des étudiants</h2>
        </div>
        <button type="submit" class="btn btn-outline-danger" ><a href="../create.php">Ajouter</a></button>
        <br>

        <table class="table table-hover">
        <thead>
        
              <tr>id</tr>
            <tr>First Name</tr>
            <tr>Last Name</tr>
            <tr>Email</tr>
            <tr>Phone</tr>

        </thead>
        
        
        
        <tbody>
             <?php
                include 'client.class.php';
                $student = new student;
                $listetud = $student -> readallStudents();
                while ($data = $listetud->fetch()){
                    ?> 
                    <tr>
                    <td><?= $data['id']?></td>
                    <td><?= $data['firstname']?></td>
                    <td><?= $data['lastname']?></td>
                    <td><?= $data['email']?></td>
                    <td><?= $data['phone']?></td>

                    </tr>

            <?php }
            ?>
        </tbody>
        </table>
    </div>
</body>
</html>