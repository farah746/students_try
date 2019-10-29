    <?php
    try {
        $bdd = new PDO('mysql:host=localhost:3307;dbname=dsi22_g1_2019;charset=utf8', 'root', '');
       } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
       }
    include'dbconnexion.php';
    $firstname=$_POST['firstname'] ;
    $lastname=$_POST['lastname'] ;
    $email=$_POST['email'] ;
    $phone=$_POST['phone'] ;
    ////////////////////////////
    $bdd->exec("INSERT INTO students(firstname,lastname,email,phone) VALUES ('$firstname','$lastname','$email','$phone')");
        header('Location:http://localhost/students/index.php');

    ?>

</body>
</html>