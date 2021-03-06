<?PHP 
//logintest.php
if(isset($_POST['login'])) $login = $_POST['login'];
	else $login = "(not entered)";

echo <<<_END
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Please Login</h1>
      <!--sends to indexVerified if login = true.  Need to fix this! 
      -->
      <form method="post" action="projectIndex.html">
        <p><input type="text" name="login" value="" placeholder="Username or Email"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me" checked="checked">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>

    <div class="login-help">
    	<!--this should send to another page instead of indexVerified to a troubleshooting page
    	-->
      <p>Forgot your password? <a href="indexVerified.html">Click here to reset it</a>.</p>
    </div>
  </section>

  <section class="about">
    <p class="about-links">
      <a href="indexVerified.html"_parent">Create An Account</a>
      
    </p>
    <p class="about-author">
      &copy; 2015&ndash;2015 <a href="http://www.belmont.edu" target="_blank">Robert Rochford</a> -
     <br>
  </section>
</body>
</html>
_END;
?>