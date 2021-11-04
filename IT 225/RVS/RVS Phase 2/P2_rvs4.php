<!doctype html>
<html lang="en">
<head>
<h1>Survey Completed</h1>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!--this take the input from the previous page and and inserts this into the RVS DB.-->
<?php
$servername = "localhost";
$username = "jwp15b";
$password = "IT225pswd!";
$dbname = "RVS";

  $ACU_USERNAME=$_POST['ACU_USERNAME'];
  $li1=$_POST['li1'];
  $li2=$_POST['li2'];
  $li3=$_POST['li3'];
  $li4=$_POST['li4'];
  $li5=$_POST['li5'];
  $li6=$_POST['li6'];
  $li7=$_POST['li7'];
  $li8=$_POST['li8'];
  $li9=$_POST['li9'];
  $li10=$_POST['li10'];
  $li11=$_POST['li11'];
  $li12=$_POST['li12'];
  $li13=$_POST['li13'];
  $li14=$_POST['li14'];
  $li15=$_POST['li15'];
  $li16=$_POST['li16'];
  $li17=$_POST['li17'];
  $li18=$_POST['li18'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO INSTRUMENTAL (ACU_USERNAME, I1, I2, I3, I4, I5, I6, I7, I8, I9, I10, I11, I12, I13, I14, I15, I16, I17, I18)
    VALUES ('$ACU_USERNAME', '$li1', '$li2', '$li3', '$li4', '$li5', '$li6', '$li7', '$li8', '$li9', '$li10', '$li11', '$li12', '$li13', '$li14', '$li15', '$li6', '$li17', '$li18')";
    // use exec() because no results are returned
    $conn->exec($sql);
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>

Contact Info: <?php echo $_POST["email"]; ?><br>
<p>Your Terminal Results</p>
<?php echo $_POST["t1"]; ?><br>
<?php echo $_POST["t2"]; ?><br>
<?php echo $_POST["t3"]; ?><br>
<?php echo $_POST["t4"]; ?><br>
<?php echo $_POST["t5"]; ?><br>
<?php echo $_POST["t6"]; ?><br>
<?php echo $_POST["t7"]; ?><br>
<?php echo $_POST["t8"]; ?><br>
<?php echo $_POST["t9"]; ?><br>
<?php echo $_POST["t10"]; ?><br>
<?php echo $_POST["t11"]; ?><br>
<?php echo $_POST["t12"]; ?><br>
<?php echo $_POST["t13"]; ?><br>
<?php echo $_POST["t14"]; ?><br>
<?php echo $_POST["t15"]; ?><br>
<?php echo $_POST["t16"]; ?><br>
<?php echo $_POST["t17"]; ?><br>
<?php echo $_POST["t18"]; ?><br>

<p>Your Instrumental Results<p>
<?php echo $_POST["li1"]; ?><br>
<?php echo $_POST["li2"]; ?><br>
<?php echo $_POST["li3"]; ?><br>
<?php echo $_POST["li4"]; ?><br>
<?php echo $_POST["li5"]; ?><br>
<?php echo $_POST["li6"]; ?><br>
<?php echo $_POST["li7"]; ?><br>
<?php echo $_POST["li8"]; ?><br>
<?php echo $_POST["li9"]; ?><br>
<?php echo $_POST["li10"]; ?><br>
<?php echo $_POST["li11"]; ?><br>
<?php echo $_POST["li12"]; ?><br>
<?php echo $_POST["li13"]; ?><br>
<?php echo $_POST["li14"]; ?><br>
<?php echo $_POST["li15"]; ?><br>
<?php echo $_POST["li16"]; ?><br>
<?php echo $_POST["li17"]; ?><br>
<?php echo $_POST["li18"]; ?><br>
<br>
<p>Thank You for your time.</p>
<p>You should recieve an email with your results</p>
<?php
// the message
$msg = "Thank You For Completing the Survey";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("(echo $ACU_USERNAME)@acu.edu","RVS Survey Results",$msg);
?>
</body>
</html>