<?php
 include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="get">
            <label >first name</label>
            <input type="text" name="fstname"><br>
            
            <label > last name</label>
            <input type="text" name="lstname"><br>
            
            <label >email</label>
            <input type="email" name="email"><br>
            
            <label >password</label>
            <input type="password" name="passw"><br>
            
            <label >pin</label>
            <input type="text" name="pin"><br>

            <input type="submit" name="sub">
    </form>
</body>
</html>

<?php
 $fn=$_GET["fstname"];
 $ln=$_GET["lstname"];
 $em=$_GET["email"];
 $ps=$_GET["passw"];
 $pn=$_GET["pin"];
 
 $query="insert into personaldetail values('$fn','$ln','$em','$ps','$pn')";
 $data=mysqli_query($con,$query);
 if($data){
    echo "data inserted into data base";
 }else{
    echo "failed";
 }

//   echo "$fn";
//   echo "$ln";
//   echo "$em";
//   echo "$ps";
//   echo "$pn";
?>