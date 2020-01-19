<?php 
session_start();
if(isset($_POST["user"])){
	
	include("connect.php");

    $user = $_POST["user"];
    $pass = $_POST["pass"];

    $sql="SELECT * FROM login WHERE email='".$user."' and password='".$pass."'";
    $result = $conn->query($sql);

	if ($result->num_rows > 0) {
    	while($row = $result->fetch_assoc()) {
			$_SESSION["email"] = $row["email"];
            $_SESSION["password"] = $row["password"];
			
			if($_SESSION["email"]==$user && $_SESSION["password"]==$pass){ 
                header("location:form-cart.php");
            } else {
				header("location:form-login.php");
			}
		}
	} else {
		header("location:form-login.php");
    }
}                 
?>