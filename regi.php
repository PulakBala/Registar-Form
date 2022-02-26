<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
        <label for="">Name :</label>
        <input type="text" name="name"> <br> <br>


        <label for="">Email :</label> 
        <input type="text" name="mail"> <br> <br>

        <label for="">Number :</label>
        <input type="text" name="contact"> <br> <br>

        <label for="">addres :</label>
        <input type="text" name="add"> <br> <br>

        <button type="submit" name="sub">Register</button> <br><br>
    </form>
</body>
</html>

<?php
 if(isset($_POST['sub'])){
     $name = $_POST['name'];
     echo $name; 
     echo "<br><br>";
     $gmail = $_POST['mail'];
     echo $gmail;
     echo "<br><br>";
     $contact = $_POST['contact'];
     echo $contact;
     echo "<br><br>";
     $address = $_POST['add'];
     echo $address;
 }
?>