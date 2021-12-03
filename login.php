<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="apotekstyle.css">
	<link rel="stylesheet" type="text/css" href="stylelist.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"href="style.css"></link>
</head>
<header>

</header>


<body>
 <center>
  <?php
    include_once 'user_function.php';
  $log=filter_input(INPUT_POST,'log');
  if($log){
      $username=filter_input(INPUT_POST,'user');
      $password=filter_input(INPUT_POST,'pass');
      $result = login($username,$password);
      if($result != null && $result['username'] = $username){
          $_SESSION['my_user'] = true;
          $_SESSION['session_user']=$result['name'];
          header("location:user.html");
      }

  } 
  ?>
    <form action=""method="post">
        <label for="fname">Username:</label><br>
        <input type="text" id="fname" name="user" ><br>
        <label for="lname">Pass:</label><br>
        <input type="password" id="lname" name="pass" ><br><br>
        <input type="submit" value="login" name="log">
      </form>  
      <br>
      <br>
      <?php
  
  
  
  ?>
  </center>

</body>
</html>