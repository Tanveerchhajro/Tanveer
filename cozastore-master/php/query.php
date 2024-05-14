<?php
session_start();
// session_unset();
include('dbcon.php');
if(isset($_POST['register'])){
    $userName = $_POST['fullname'];
    $userPassword = $_POST['password'];
    $userEmail = $_POST['email'];
    $query= $pdo->prepare("insert into user(username,userpassword,useremail)VALUES(:un,:up,:ue)");
    $query->bindParam("un",$userName);
    $query->bindParam("ue",$userEmail);
    $query->bindParam("up",$userPassword);
    $query->execute();
echo "<script>alert('User added successfully')
location.assign('register.php')
</script>";
}
// login
if(isset($_POST['Login'])){
    $userPassword = $_POST['password'];
    $userEmail = $_POST['email'];
    $query = $pdo->prepare('select * from user where useremail=:ue && userpassword = :up');
    $query->bindParam("ue",$userEmail);
    $query->bindParam("up",$userPassword);
    $query->execute();
    $userData = $query->fetch(PDO::FETCH_ASSOC);
    // print_r($userData);
    if($userData){
    $_SESSION['userName']=$userData['username'];
    $_SESSION['userEmail']=$userData['useremail'];    
    $_SESSION['userPassword']=$userData['userpassword'];    
    $_SESSION['userRole']=$userData['role']; 
    if($_SESSION['userRole']=="user"){
        echo "<script>alert('logged in successfully');
        location.assign('customer.php')
        </script>";
    }   else{
        echo "<script>alert('logged in successfully');
        location.assign('../Dashboard/index.php')
        </script>";
    }

    }

}
?>