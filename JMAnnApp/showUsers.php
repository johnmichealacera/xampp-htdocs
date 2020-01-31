<html>
<body style="background-color:pink;">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "socialmedia";

$conn = new mysqli($servername, $username, $password, $dbName);

if($conn->connect_error){
    die("Connection failed ".$conn->error);
}
else{
    $sql="SELECT username, reg_date from accounts";
    $result=$conn->query($sql);
    $count=1;
    if($result->num_rows > 0){
        ?>
        <div style="text-align:center;">
        <h1>List of all users</h1>
        <ul>
        <?php
        while($row=$result->fetch_assoc()){
            ?>
            <h4><li style="list-style-type:none;"><?php echo $count.": ".$row['username']." ".$row['reg_date']?></li></h4>
            <?php 
            $count++;
        }
        ?>
        </ul>
        </div>
        <?php
    }
}
?>
</body>
</html>