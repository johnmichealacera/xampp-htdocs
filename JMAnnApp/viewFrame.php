<html>
<body style="background-color: burlywood;">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "socialmedia";
$selection = $_POST['searchBy'];
$bookInfo = $_POST['bookSearch'];

$conn = new mysqli($servername, $username, $password, $dbName);
if($conn->connect_error){
    die("Connection failed ".$conn->connect_error);
}
else{
    if($selection=="title"){
    $sql = "select title, author_id, folder, upload_image, publish, plot from books where title = '$bookInfo'";
    $result = $conn->query($sql);
        if($result->num_rows>0){
            ?>
            <ul>
            <?php
            while($row=$result->fetch_assoc()){
                ?>
                <img src="<?php echo $row['folder'].$row['upload_image']; ?>" alt="Book Image" width="300" height="300">
                <li><?php echo $row['title'];?></li>
                <li><?php echo $row['publish'];?></li>
                <li><?php echo $row['plot']; ?></li>
                <li><?php echo $row['folder'].$row['upload_image']; ?></li>
                <?php
            }
            ?>
            </ul>
            <?php
        }
        else{
            echo "No books matched. ";
        }
    }
}

$conn->close();
?>
</body>
<html>