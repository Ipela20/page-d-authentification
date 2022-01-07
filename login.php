<?php
   $conn = mysqli_connect('localhost', 'gildas', 'talato', 'userform'); 
   if(isset($_POST['valider'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $check_email = "SELECT * FROM usertable WHERE email = '$email'";
    $check_password = "SELECT * FROM usertable WHERE password = '$password'";
    $res = mysqli_query($conn, $check_email);
    $rer = mysqli_query($conn, $check_password);
    if(mysqli_num_rows($res) > 0 && mysqli_num_rows($rer) > 0){
               echo "Bienvenue";
            }else{
                echo "connexion echoue";
            }
    }
?> 