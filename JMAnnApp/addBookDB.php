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
    $upload_image = $_FILES["uploadImage"]["name"];
    $folder = "C:/xampp/htdocs/JMAnnApp/images/";
    $sql="Insert into books(title,author_id,publish,plot,upload_image,folder) values ('$bookTitle','$authorID','$bookPublish','$bookPlot','$upload_image','$folder')";
    if($conn->query($sql)===TRUE){
    move_uploaded_file($_FILES["uploadImage"]["tmp_name"], "$folder".$_FILES["uploadImage"]["name"]);
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