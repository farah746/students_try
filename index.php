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
    <div class="alert alert-info">
    <div class="jumbotron">
    <strong>  la liste des étudiants DSI22 G1 </strong>
    </div>
    </div>
    <div class="container">
    <button type="button" class="btn btn-primary" onclick=window.location='../students/create.php'>Nouvel Etudiant</button>
    </div>
    <br>
    <div class="container">
<table border="1" class="table table-striped">
        <tr class="table-danger">
            <th class="text-primary">id</th>
            <th class="text-primary">firstname</th>
            <th class="text-primary">lastname</th>
            <th class="text-primary">email</th>
            <th class="text-primary">phone</th>
            <th class="text-primary">opérations</th>
        </tr>
<?php 
try {
    $bdd = new PDO('mysql:host=localhost:3307;dbname=dsi22_g1_2019;charset=utf8', 'root', '');
   } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
   }
include 'dbconnexion.php';
$info= $bdd->query('SELECT * FROM students');
while ($tableau=$info->fetch())
{
    echo '<tr>';
       echo '<td>'.$tableau['id'].'</td>';
       echo '<td>'.$tableau['firstname'].'</td>';
       echo '<td>'.$tableau['lastname'].'</td>';
       echo '<td>'.$tableau['email'].'</td>';
       echo '<td>'.$tableau['phone'].'</td>';
       echo '<td>'."<input type=\"submit\" value=\"Editer\" class=\"btn btn-primary\" onclick=\"(window.location='../students/create.php')\">"."  "."<input type=\"submit\"  class=\"btn btn-primary\"value=\"Supprimer\" >".'</td>';
echo '</tr>';
   }
?>
 </table>
 </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
