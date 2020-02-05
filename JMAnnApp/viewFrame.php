<html>
<head>
<link rel="stylesheet" href="bookView.css">
</head>
<body style="background-color: burlywood;">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "socialmedia";

if($_POST['bookSearch']!=""){
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
            while($row=$result->fetch_assoc()){
                ?>
                <div id="leftSection">
                <img src="images\<?php echo $row['upload_image']; ?>" alt="Book Image" width="300" height="300">
                </div>
                <div id ="rightSection">
                <h2><?php echo $row['title'];?></h2>
                <h4>Published Year: <?php echo $row['publish'];?></h4>
                <p>Book Summary<br><br><?php echo $row['plot']; ?></p>
                </div>
                <?php
            }
        }
        else{
            echo "No books matched. ";
        }
    }
}

$conn->close();
}
?>
</body>
<html>