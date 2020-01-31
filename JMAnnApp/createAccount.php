<html>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "socialmedia";
$createUser = $_POST["createUser"];
$createPass = $_POST["createPass"];

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
    die("Connection failed ".$conn->connect_error);
}
else{
    $sql="INSERT INTO ACCOUNTS (username, password) VALUES ('$createUser', '$createPass')";
    if($conn->query($sql)===TRUE){
    ?>
        <script>
        alert("New Account Created Successfully");
        window.location="index.php";
        </script>
        <?php
    }
    else{
        echo "Error ".$sql."<br>".$conn->error();
    }
}

$conn->close();
?>
</html>