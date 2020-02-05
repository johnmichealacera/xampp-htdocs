<html>
<head>
<link rel="stylesheet" href="bookView.css">
</head>
<body>
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
    $sql = "select books.title, books.author_id, books.upload_image, books.publish, books.plot, authors.name, authors.author_id from books, authors where books.author_id=authors.author_id and title = '$bookInfo'";
    $result = $conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                ?>
                <div id="leftSection">
                <img src="images\<?php echo $row['upload_image']; ?>" alt="Book Image" width="500" height="500">
                </div>
                <div id ="rightSection">
                <h2><?php echo $row['title'];?></h2>
                <h4>Published Year: <i><?php echo $row['publish'];?></i></h4><br>
                <p><b>Book Summary</b><br><br><?php echo $row['plot']; ?></p><br><br>
                <h2>Author: <a href=#><em><?php echo $row['name']; ?></em></a></h2>
                <input name="author_IDContainerBook" value="<?php echo $row['author_id']; ?>" style="display:none;">
                </div>
                <?php
            }
        }
        else{
            echo "No books matched. ";
        }
    }
    if($selection=="author"){
        $sql = "select name, background, author_id from authors where name='$bookInfo'";
        $result = $conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                ?>
                <a href=#><h2><?php echo $row['name']; ?></h2></a>
                <h5><?php echo $row['background']; ?></h5><br><br>
                <input name="author_IDContainerAuthor" value="<?php echo $row['author_id']; ?>" style="display:none;">
                <?php
            }
        }
        else{
            echo "No results found!";
        }
    }
}

$conn->close();
?>
</body>
<html>