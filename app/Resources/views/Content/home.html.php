<?php
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Example</title>
    <link rel="stylesheet" type="text/css" href="/static/css/global.css" />
</head>
<body>
<div class="center">
      <form action="product.html.php" method="POST">
          <label for="fname">First name:</label><br>
          <input type="text" id="fname" name="fname" placeholder="First Name" ><br><br>
          <label for="lname">Last name:</label><br>
          <input type="text" id="lname" name="lname" placeholder="Last Name" ><br><br>
          <label for="birthday">Date of Birth:</label><br>
          <input type="date" id="birth" name="birth" placeholder="Date of Birth"><br><br>
          <label>Gender:</label><br>
          <input type="radio" id="male" name="gender" value="male">
          <label for="male">Male</label>
          <input type="radio" id="female" name="gender" value="female">
          <label for="female">Female</label>
          <input type="radio" id="other" name="gender" value="other">
          <label for="other">Other</label><br><br>
          <label for="phone">Contact Number:</label><br>
          <input type="value" id="phone" name="phone" placeholder="Contact Number"><br><br> 
          <label for="fname">Username:</label><br>
          <input type="text" id="uname" name="uname" placeholder="Username"><br><br>      
          <label for="mail">Email:</label><br>
          <input type="email" id="mail" name="mail" placeholder="Email"><br><br>
          <label for="pwd">Password:</label><br>
          <input type="Password" id="pwd" placeholder="Password"><br><br>
          <div id= "showErrorpwd"> </div>
          <label for="cpwd">Repeat Password:</label><br>
          <input type="Password" id="rpwd" placeholder="Repeat Password" ><br><br>
          <div id= "showErrorrpwd"> </div>
        <br>
        <input type="checkbox" name="agree" checked>
        <label for="agree"> I agree</label><br><br>
        <p>By creating an account you agree to our <a href="default.html.php"><u>Terms & Conditions</u></a>.</p>
        <br>
         <button type = "submit">Sign Up</button>  
    </form>
  </div>
</body>
</html>