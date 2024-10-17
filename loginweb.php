<?php
$conn=mysqli_connect("localhost","root","","phpmyadmin");
if($conn){
    echo "connected";
}
else{
    echo "not connected";
}
$loginmobile=$_POST['loginmobile'];
$loginpassword=$_POST['loginpassword'];
$data = "INSERT INTO loginweb VALUES('','$loginmobile','$loginpassword')";
$check = mysqli_query($conn,$data);
if($check){
    echo "data sended";
}
else{
    echo "data not sended";
}



?>