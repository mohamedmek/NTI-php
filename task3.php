<?php

$name = $email = $linkedin = $pass = $address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);

    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  
  if (empty($_POST["linkedin"])) {
    $linkedin = "";
  } else {
    $linkedin = test_input($_POST["linkedin"]);
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$linkedin)) {
      $linkedinErr = "Invalid URL";
    }
  }

  if (empty($_POST["pass"])) {
    $nameErr = "password is required";
  } else {
    $pass = test_input($_POST["pass"]);

    if (len($pass)<6) {
      $passErr = "pass error";
    }
  }

  if (empty($_POST["address"])) {
    $addressErr = "address is required";
  } else {
    $address = test_input($_POST["address"]);

    if (len($address)!=10) {
      $addressErr = "address error";
    }
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<html>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
LinkedIn URL: <input type="url" name="linkedin"><br>
password: <input type="password" name="pass"><br>
Address: <input type="text" name="address"><br>


<span class="error">* <?php echo $nameErr?></span>
<span class="error">* <?php echo $emailErr;?></span>
<span class="error">* <?php echo $linkedinErr;?></span>
<span class="error">* <?php echo $passErr?></span>
<span class="error">* <?php echo $addressErr?></span>


<input type="submit">
</form>

</body>
</html> 

<!-- mohamed mahmoud elsayed abdelkarim -->