<html>
<body style="background-color:pink;">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "socialmedia";
$authorName = $_POST["authorName"];
$background = $_POST["authorBackground"];

$conn = new mysqli($servername, $username, $password, $dbName);

if($conn->connect_error){
    die ("Connection failed ".$conn->error);
}
else{
    $sql = "INSERT into authors(name, background) values ('$authorName','$background')";
    if($conn->query($sql)===TRUE){
        ?>
        <script>
        alert("Author information entered to database.");
        </script>
        <?php
    }
    else{
        echo "Error ".$sql."<br>".$conn->error;
    }
}
$conn->close();
?>
</body>
</html>