<?php
    session_start();
    
    $con=mysqli_connect('localhost','root');
    if($con){
        echo"connection successfully";

    }
    else{
        "no connection";
    }
    mysqli_select_db($con,'news');
    $name=$_POST['email'];
    $pass=$_POST['password'];
    $quer-"Select * from userdata where username -  '$name' && password-'$pass' ";
    $result=mysqli_query($con,$quer);
    $num=mysqli_num_rows($result);
    if($num==1){
        $_SESSION['username']=$name;
        header('Location:index.html');
    }
    else{
        header('Location:login.html');
    }
?>