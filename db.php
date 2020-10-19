<?php 
    $connet = mysqli_connect('localhost','root','','manage');
    if($connet){
        mysqli_query($connet, "SET NAMES 'UTF8'");
        echo"Kết nối thành công";
    }else{
        echo"Kết nối thất bại";
    }


?>