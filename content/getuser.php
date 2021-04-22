<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = ($_GET['q']);
$server="localhost";
$serverUsername="root";
$serverPassword="";
$dbName="profiler";
//create connection statement
$conn=new mysqli($server,$serverUsername,$serverPassword,$dbName);
$sql="SELECT * FROM profiler WHERE  username = '".$q."'";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)) {
    $_SESSION['fullname']=$row['fullname'];
    $_SESSION['username']=$row['username'];
    $_SESSION['phoneNumber']=$row['phoneNumber'];
    $_SESSION['email']=$row['email'];
    $_SESSION['upload']=$row['image'];
    $_SESSION['department']=$row['department'];
    $_SESSION['date']=$row['date'];
    $_SESSION['gender']=$row['gender'];
    $_SESSION['country']=$row['country'];
    $_SESSION['password']=$row['password'];
    
    
    
}

?>
    <html>
    <img src="<?php echo $_SESSION['upload'] ?>" alt="" style="   height: 300px; width:350px; transform: translate( 1px, 1px); opacity: 1; margin-left:10px;">
    </html>
<?php
mysqli_close($conn);
?>
</body>
</html>
