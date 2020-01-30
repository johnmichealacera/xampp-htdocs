<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>My First Social Media</title>
    <script type="text/javascript" src="function.js"></script>
</head>
<body>
<div id="couple">
<img src="images/couple.jpg" alt="couple picture"/>
</div>
<nav id="login">
<form>
<ul>
    <li><input type="text" name="username" placeholder="Username" required></li>
    <li><input type="password" name="password" placeholder="Password" required></li>
    <li><input type="submit" value="login" id="btnLogin"></li>
</ul>
</form>
</nav>
<div id="signup">
<form id="create" name="myForm" onsubmit="return confirmPass()" action="createAccount.php" method="post">
<h1>Create Account</h1>
Create Username: <input type="text" name="createUser" required><br><br><br>
Create Password: <input type="password" name="createPass" required><br><br><br>
Verify Password: <input type="password" name="verifyPass" required><br><br><br>
<input type="submit" value="Create Account" id="btnCreate">
</form>
</div>
</body>
</html>