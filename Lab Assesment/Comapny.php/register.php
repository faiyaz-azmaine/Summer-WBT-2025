
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

    <div class="card" style="max-width:650px;margin:16px auto;">
      <div class="caption">REGISTRATION</div>
      <form method="post" action="register.php">
        <div class="form-row"><label>Name</label><input type="text" name="name" required/></div>
        <div class="form-row"><label>Email</label><input type="email" name="email" required/></div>
        <div class="form-row"><label>User Name</label><input type="text" name="username" required/></div>
        <div class="form-row"><label>Password</label><input type="password" name="password" required/></div>
        <div class="form-row"><label>Confirm Password</label><input type="password" name="confirm_password" required/></div>
        <div class="form-row">
          <label>Gender</label>
          <label style="width:auto;"><input type="radio" name="gender" value="Male" checked/> Male</label>
          <label style="width:auto;margin-left:14px;"><input type="radio" name="gender" value="Female"/> Female</label>
          <label style="width:auto;margin-left:14px;"><input type="radio" name="gender" value="Other"/> Other</label>
        </div>
        <div class="form-row"><label>Date Of Birth</label><input type="date" name="dob" required/></div>
        <div class="form-row">
          <label></label>
          <input type="submit" value="Submit"/> <input type="reset" value="Reset" class="btn"/>
        </div>
     
    </div>

    <div class="footer">copyright 2017</div>
  </div>
</body>
</html>