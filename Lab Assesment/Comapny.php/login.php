
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>XCompany</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="container">
    <div class="topnav header">
      <div class="brand"><span class="logo"></span><span class="x">X</span>Company</div>
      <div class="links">
       
          <a href="index.php">Home</a> |
          <a href="login.php">Login</a> |
          <a href="register.php">Registration</a> |
          <a href="logout.php">Logout</a>
      
      </div>
    </div>

    <div class="card" style="max-width:520px;margin:16px auto;">
      <div class="caption">LOGIN</div>
      <form method="post" action="login.php">
        <div class="form-row">
          <label>User Name :</label>
          <input type="text" name="username" required/>
        </div>
        <div class="form-row">
          <label>Password :</label>
          <input type="password" name="password" required/>
        </div>
        <div class="form-row">
          <label></label>
          <input type="checkbox" name="remember" id="remember"><label for="remember" style="width:auto;margin-left:8px;">Remember Me</label>
        </div>
        <div class="form-row">
          <label></label>
          <input type="submit" value="Submit" />
          &nbsp;&nbsp;<a href="forgot_password.php">Forgot Password?</a>
       
    
  </div>
</body>
</html>