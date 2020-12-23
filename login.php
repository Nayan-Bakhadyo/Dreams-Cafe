<?php
$username=$_POST['username'];
$password=$_POST['password'];


if(($username=='admin') && ($password=='dreams%admin%login')){
    session_start();
    // Set session variables
    $_SESSION["log"] ='admin';
if(isset($_POST['remember'])){
    //COOKIES for username
    setcookie ("username",$_POST["username"],time()+7*24*3600, "/","", 0);
    //COOKIES for password
    setcookie ("password",$_POST["password"],time()+7*24*3600, "/","", 0);
 }
    header('Location: admin/index.php');
}
else if(($username=='waiter') && ($password=='dreams_waiter_login')){
    session_start();
    $_SESSION["log"] ='waiter';
    if(isset($_POST['remember'])){
        //COOKIES for username
        setcookie ("username",$_POST["username"],time()+7*24*3600, "/","", 0);
        //COOKIES for password
        setcookie ("password",$_POST["password"],time()+7*24*3600, "/","", 0);
     }
        header('Location: waiter/index.php');
    }
else if(($username=='kitchen') && ($password=='dreams_kitchen_login')){
    session_start();
    $_SESSION["log"] ='kitchen';
    if(isset($_POST['remember'])){
        //COOKIES for username
        setcookie ("username",$_POST["username"],time()+7*24*3600, "/","", 0);
        //COOKIES for password
        setcookie ("password",$_POST["password"],time()+7*24*3600, "/","", 0);
     }
        header('Location: kitchen/kitchen.php');
    
}else{
    session_start();
    $_SESSION["log"] =0;
echo "<script>alert('ERROR: Your username and password combination is incorrect!!');
window.history.back();
</script>";
    
}

?>