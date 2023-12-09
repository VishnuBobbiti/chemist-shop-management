<!DOCTYPE html>
<title>Chemist Shop Management</title>
<?php
session_start();
?>

<head>
    <title>Login</title>
</head>
<body>

    
<?php
    $_SESSION["userid"] = "";
    header("Location:user_login.php");
?>
</body>
</html>