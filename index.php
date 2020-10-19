<?php 
    $conn = mysqli_connect("localhost","root",'','manage');

    $query = mysqli_query($conn,"select * from manage") or die ("Lỗi")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage</title>


</style> 
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="index.css">

</head>
<body>



    <h3>Manage</h3>
    
    <button class="btn-sbtn-success">New</button>
    
    
    <table clas = "table-qlianh" border="1" >
        <tr class = "tr-qlianh">
            <th >ID</th>
            <th >Thumbl</th>
            <th style="width:40%;">Title</th>
            <th >Status</th>
            <th >Action</th>
        </tr>
        <div class = "table-one">
        <?php
            $i =1;
             while ($rs = mysqli_fetch_array($query)) {
                 echo "<tr>";
                 echo "<td>".$i."</td>";
                 echo "<td>".$rs["Title"]."</td>";
                 echo "<td>".$rs["Description"]."</td>";
                 echo "<td>".$rs["image"]."</td>";
                 echo "<td><a href ='user/show/show.php'>Show</a> | <a href ='user/edit/edit.php'>Edit<a> | <a herf = 'user/delete.php'>Delete</a></td>";
                 echo "</tr>";
                 $i++;
             }
        ?>
       </div>
    </table>
</body>
</html>