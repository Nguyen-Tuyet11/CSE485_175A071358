<?php
$error='';

if(isset($_POST['submit'])){
    if(empty($_POST['Username'])|| empty($_POST['Password'])){
        $error="Username or Password is Invalid";
    }
    else{
        $user=$_POST['Username'];
        $pass=$_POST['Password'];
        //Kết nối vs thiết bị sử dụng user và pass
        $conn=mysqli_connect("localhost","root","");
        // select database
        $db=mysqli_select_db($conn,"test");
        $query="SELECT*FROM userpass WHERE pass='$pass'AND user='$user' AND user_level=1 ";
        //sql query infomation of registed user and finds user match
        $query=mysqli_query($conn,$query);
        $rows=mysqli_num_rows($query);
        if($rows==1){
            $hashed_passcode=password_hash($pass,PASSWORD_DEFAULT);
            $sql="UPDATE userpass SET pass=$hashed_passcode WHERE user=$user AND pass=$pass  ";
            $query=mysqli_query($conn,$sql);
         
            header("Location:../Home/Home.php");
           
        }
        else{
            $error="Username or Passwors is Invalid";
        }
        // Đóng chuối kết nối
        mysqli_close($conn);

    }
}
?>

