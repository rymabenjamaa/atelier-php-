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

        <?php
            require 'dbconnexion.php';
            $req = $bdd -> prepare (' SELECT * FROM students WHERE id= :id');
            $req-> bindParam (':id', $_GET['id']);
            $req-> execute();
            $data = $req->fetch();
        ?>
    <fieldset>
    <h3>Editer l'etudiant</h3>
            <div class="container py-3">
            <form  action="update.php" method="POST" accept-charset="utf-8">
                    <div class="form-group">
                        <label for="firstn">First Name:</label>
                        <input type="text" value="<?= $data['firstname'] ?>" class="form-control"  name="firstn">
                    </div>
                    <div class="form-group">
                            <label for="lastn">Last Name:</label>
                            <input type="text" value="<?= $data['lastname'] ?>" class="form-control"  name="lastn">
                   </div>
                    <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" value="<?= $data['email'] ?>" class="form-control"  name="email">
                    </div>
                    <div class="form-group">
                            <label for="phone">phone:</label>
                            <input type="text" value="<?= $data['phone'] ?>" class="form-control"  name="phone">
                    </div>
                    <input type="number" name="id" value="<?= $data['id'] ?>" hidden>
                <button type="submit" class="btn btn-outline-danger">Valider</button>
                <button type="submit" class="btn btn-outline-danger">Annuler</button>


            </form>
        </div>
        </fieldset>
        </body>
        </html>