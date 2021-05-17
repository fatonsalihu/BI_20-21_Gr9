<?php
      session_start();
      include("BDCreate.php");

      if(isset($_POST['submit'])){
        $con = new mysqli('localhost', 'root', '', $dbname) or die("Connection failed: " . $conn->connect_error);
        
        $firstname = trim($_POST['firstname'], " ");
        $lastname = trim($_POST['lastname'], " ");
        $birthday = $_POST['birthday'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        $phoneNumber = $_POST['phoneNumber'];
        $email = trim($_POST['email'], " ");//METODA TRIM 3.2
        $password = $_POST['password'];
        $confirm = $_POST['passwordConfirm'];

        $sql = "INSERT INTO users( firstname, lastname,birthday,gender,country,phoneNumber,email,password)
        VALUES ($firstname,$lastname,$birthday,$gender,$country,$phoneNumber,$email,$password)";

        try{
          $register_rez= mysqli_query($con, $sql);
          if($register_rez){
            if(mysqli_affected_rows($con)>0){
              echo("Reg me sukses");

            }
            else{
              echo("Reg pa sukses");
            }
          }
        }
        catch(Exception $ex){

        }
}
     
      ?>