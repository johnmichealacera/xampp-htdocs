<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>My First Book Site</title>
    <script type="text/javascript" src="function.js"></script>
</head>
<body>
<div id="couple">
<img src="images/couple.jpg" alt="couple picture"/>
</div>
<nav id="login">
<form action="login.php" method="post">
<ul>
    <li><input type="text" name="username" placeholder="Username" autofocus="autofocus" required></li>
    <li><input type="password" name="pword" placeholder="Password" required></li>
    <li><input type="submit" value="login" id="btnLogin"></li>
</ul>
</form>
</nav>
<div id="signup">
<form id="create" name="myForm" onsubmit="return confirmPass()" action="createAccount.php" method="post">
<h1>Create Account</h1>
<label for="createUser">Create Username: </label><input type="text" name="createUser" required><br><br><br>
<label for="createPass">Create Password: </label><input type="password" name="createPass" required><br><br><br>
<label for="verifyPass">Verify Password: <label><input type="password" name="verifyPass" required><br><br><br>
<input type="submit" value="Create Account" id="btnCreate">
</form>
</div>
</body>
</html>