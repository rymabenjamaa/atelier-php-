<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter</title>
</head>
<body>
    <h3>Ajouter un etudiant</h3>
    <div class="container py-3">
            <form  action="store.php" method="POST" accept-charset="utf-8">
                    <div class="form-group">
                        <label for="firstn">First Name:</label>
                        <input type="text" class="form-control"  name="firstn" id="firstname">
                    </div>
                    <div class="form-group">
                            <label for="lastn">Last Name:</label>
                            <input type="text" class="form-control"  name="lastn" id="lastname">
                   </div>
                    <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control"  name="email" id="email">
                    </div>
                    <div class="form-group">
                            <label for="phone">phone:</label>
                            <input type="text" class="form-control"  name="phone" id="phone">
                    </div>

                <button type="submit" class="btn btn-outline-danger">Valider</button>
                <button type="submit" class="btn btn-outline-danger">Annuler</button>


            </form>
        </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    </body>
</html>