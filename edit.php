<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="create.php">
    <fieldset>
    <legend>Nouvel etudiant</legend>
    <br>
    <div>
    <label for="">Firstname</label>
    <input type="text" name="firstname" value="<?php echo $_POST["firstname"]?>">
    <label for="">lastname</label>
    <input type="text" name="lastname" id="" value="<?php echo $_POST["lastname"]?>">
    </div>
    <br>
    <div>
    <label for="">email</label>
    <input type="text" name="email" id="" value="<?php echo $_POST["email"]?>">
    <label for="">phone</label>
    <input type="text" name="phone" value="<?php echo $_POST["phone"]?>">
    </div>
    <br>
    <div>
        <input type="submit" name="" id="" value="Enregistrer">
        <input type="submit" name="" id="" value="Annuler">
    </div>
    </fieldset>
</form>
   </div> 
    </form>
</body>
</html>