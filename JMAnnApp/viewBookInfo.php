<html>
<body style="background-color:skyblue;">
<nav style="float:right;">
<form action="viewFrame.php" method="post" target="viewFrame">
<label for="searchBy">Search Book By</label>
<select name="searchBy" required>
    <option value="title">Title</option>
    <option value="author">Author</option>
</select>
<input type="search" name="bookSearch" required>
<input type="submit" value="Enter" >
</form>
</nav>
<button onclick="window.location='superDashboard.php'" style="float:left;">Home</button>
<div>
<iframe src="iframeCanvas.php" name="viewFrame" width="100%" height="100%"></iframe>
</body>
</html>