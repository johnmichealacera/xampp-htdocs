<html>
<body style="background-color:skyblue;">
<nav style="float:right;">
<form action="viewFrame.php" method="post">
<label for="searchBy">Search Book By</label>
<select name="searchBy" required>
    <option value="title">Title</option>
    <option value="author">Author</option>
</select>
<input type="search" name="bookSearch">
<input type="submit" value="Enter">
</form>
</nav>
<div>
<iframe src="viewFrame.php" width="100%" height="100%"></iframe>
</body>
</html>