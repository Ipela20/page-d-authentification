<?php 
    // database connection
    // $con = mysqli_connect('localhost', 'database_user', 'database_password', 'database');

    $conn = mysqli_connect('localhost', 'gildas', 'talato', 'userform');

    // declaration et initialisation des variables
    session_start();
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $valider = $_POST['valider'];

    // insertion du code SQL
    $sql = "INSERT INTO usertable (id, name, email, phone, password) VALUES ('0', '$nom', '$email', '$phone', '$password')";

    // insertion dans la base de donnees
    $rs = mysqli_query($conn, $sql);

    if($rs){
        echo "Information enregistree";
    }
?>
