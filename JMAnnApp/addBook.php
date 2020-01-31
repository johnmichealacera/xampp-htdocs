<html>
    <body style="background-color:skyblue;">
    <div style="text-align:center;">
        <form action="addBookDB.php" method="post">
        <h1>Provide Book Information</h1>
        <label for="bookTitle">Enter Complete Book Title/Name </label><input type="text" name="bookTitle" required><br><br>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbName = "socialmedia";

        $conn = new mysqli($servername, $username, $password, $dbName);

            if($conn->connect_error){
                die("Connection failed ".$conn->connect_error);
            }
            else{
                $sql = "Select author_id, name from authors";
                $result = $conn->query($sql);
                if($result->num_rows>0){
                    ?>
                    <label for="authorID ">Select Author</label><select name="authorID" required>
                        <?php
                    while($row=$result->fetch_assoc()){
                        ?>
                        <option value="<?php echo $row['author_id']?>"><?php echo $row['name']?></option>
                        <?php
                    }
                    ?>
                    </select><br><br>
                    <?php
                }
                else{
                    ?>
                    <h1> no records found </h1>
                    <?php
                }
            }
            $conn->close();
        ?>
        <label for="bookPublish">Enter Published Year </label><input type="text" name="bookPublish"><br><br>
        <textarea name="bookPlot" rows="7" cols="180" placeholder="Enter short book plot"></textarea><br><br>
        <input type="submit" value="Add Book">
        </form>
</div>
    </body>
</html>