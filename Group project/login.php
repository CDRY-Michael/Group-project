<html>
<head>
  <title>Login</title>
 <link rel="stylesheet" href="CSS\styleL.css">
</head>
<body>
  <img src="meiying-ng-OrwkD-iWgqg-unsplash.jpg" >
  <h1>Login</h1>
  <form action="db_retrieve.php" method="post" >
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" requried>
    <br><br>
    <input type="submit" value="Submit">
    Don't have an account? <a href="signup.php" id="signup-link">Create one now!</a>
  </form>
  
</body>
</body>
</html>