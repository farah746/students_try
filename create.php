<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
   <div class="container">
<form action="store.php" method="POST">
    <div class="form-group">
    <fieldset>
    <legend class="alert alert-warning">Nouvel Etudiant</legend>
    <div>
    <div class="form-group">
    <label for="">Firstname</label>
    <br>
    <input type="text" name="firstname">
    </div>
    <div class="form-group">
    <label for="">lastname</label>
    <br>
    <input type="text" name="lastname" id="">
    </div>
    </div>
    <div>
    <div class="form-group">
    <label for="">email</label>
    <br>
    <input type="text" name="email" id="">
    </div>
    <div class="form-group">
    <label for="">phone</label>
    <br>
    <input type="text" name="phone">
    </div>
    </div>
    <br>
    <div>
        <input class="btn btn-primary" type="submit" name="enregistrer" id="" value="Enregistrer">
        <input class="btn btn-primary" type="submit" name="" id="" value="Annuler">
    </div>
    </fieldset>
    </div>
</form>
   </div> 
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>