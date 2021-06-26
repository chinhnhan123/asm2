<?php 
    include('database.php');

    if(isset($_POST['submit']) ) {
        $id = '1';
        $Name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $birthday = $_POST['birthday'];
        $address = $_POST['address'];
      
        
        $sql = "INSERT INTO profile (iduser, name, email, phone, birthday , address) VALUES ($id, $Name', '$email', '$phone', '$birthday', '$address' )";
    
        $result = mysqli_query($conn, $sql);

        header('location: profile.php');
    }

?>