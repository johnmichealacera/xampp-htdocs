<html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "socialmedia";
$uname = $_POST["username"];
$pword = $_POST["pword"];

$conn = new mysqli($servername, $username, $password, $dbName);

if($conn->connect_error){
    die("Connection failed ").$conn->connect_error;
}
else{
    $sql = "SELECT id, reg_date, super from accounts where username='$uname' and password='$pword'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $idNum=$row["id"];
            $reg_date=$row["reg_date"];
            $super=$row["super"];
            if($super=="yes"){
                ?>
                <script>
                alert("You are a super user");
                window.location="superProfile.php";
                </script>
            <?php
            }
            else{
                echo "Not super";
            }
    }
}
    else{
        ?>
        <script>
        alert("Incorrect credentials");
        window.location="index.php";
        </script>
        <?php
    }
}
$conn->close();
?>
<h1>Your Profile</h1>
<h1><?php echo $idNum?></h1>
<h1><?php echo $reg_date?></h1>
</html>