<html>
<body style="background-color:skyblue; padding: 70px;">
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
<nav style="float:left;">
<button onclick="window.location='superDashboard.php'">Home</button>
<button onclick="window.location='index.php'">Logout</button>
</nav>
<iframe src="iframeCanvas.php" name="viewFrame" width="100%" height="100%"></iframe>
</body>
</html>