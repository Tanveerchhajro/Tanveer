<?php
include("components/header.php");
if(!$_SESSION['userEmail']){
    
echo "<script>
alert('login fisrt to see your account ')
location.assign('login.php')</script>";
}
?>
<h1>customer </h1>
<?php
include("components/footer.php");
?>
