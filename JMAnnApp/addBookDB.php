<html>
<body style="background-color:skyblue;">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "socialmedia";
$bookTitle = $_POST['bookTitle'];
$authorID = $_POST['authorID'];
$bookPublish = $_POST['bookPublish'];
$bookPlot = $_POST['bookPlot'];

$conn = new mysqli($servername, $username, $password, $dbName);

if($conn->connect_error){
    die("Connection failed ".$conn->connect_error);
}
else{
    $sql="Insert into books(title,author_id,publish,plot) values ('$bookTitle','$authorID','$bookPublish','$bookPlot')";
    if($conn->query($sql)===TRUE){
        ?>
        <script>
            alert("Books added successfully");
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