<html>
<head>
        <link rel="stylesheet" href="ASN_7_jwp15b.css">
        <script src="ASN_7_jwp15b.js"></script>
        <title>Peer Review System</title>
        <meta name="description"
            content="Asn 7 Peer Review System 2"/>
        <meta name="keywords"
            content="Oct. 2, Asn 7, jwp15b, IT and IS, 6.5 hours" />
        <meta http-equiv="author"
            content="Justin Park" />
    </head>
<body>
<h1>Peer Review System</h1>
    <p>Response From jwp15b</p>
    <br>
    about <?php echo $_POST["variable7"]; ?><br>
    <p id="name"></p>
    <br>
    <form name=rForm method="POST" action="review2.php">
    <input type="hidden" name="previous" value=var1>
    <br>1. This team member was helpful and courteous, comfortable to work with</br>
    <textarea name= area1 rows="4" cols="30" char="20"></textarea>
    <br>2. This team member was present and focused at all meetings, met deadlines, and contributed his/her fair share of the work</br>
    <textarea name= area2 rows="4" cols="30" char="25"></textarea>
    <br>3. The quality of this team member's work was professional</br>
    <textarea name=area3 rows="4" cols="30" char="20"></textarea>
    <br>4. I would want this team member to to be on my team again because of this expertise (Give about 5 points for each area where the team member really excelled)...</br>
    <textarea name=area4 rows="4" cols="30" char="35"></textarea>
    <input type="hidden" name="variable7" value=<?php echo $_POST["variable7"]; ?>>
    <input type="hidden" name="variable8" value=<?php echo $_POST["variable8"]; ?>>
    <input type="hidden" name="variable9" value=<?php echo $_POST["variable9"]; ?>>
    <input type="hidden" name="variable10" value=<?php echo $_POST["variable10"]; ?>>
    <input type="hidden" name="variable11" value=<?php echo $_POST["variable11"]; ?>>
    <input type="hidden" name="variable12" value=<?php echo $_POST["variable12"]; ?>>
    <input type=submit value='next Student (or Finish) Button'>
  
<?php
$servername = "localhost";
$username = "jwp15b";
$password = "IT225pswd!";
$dbname = "PR";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $rater=jwp15b;
  $ratee=$_POST['variable6'];
  $area1='area1';
  $area2='area2';
  $area3='area3';
  $area4='area4';

if (!$rater || !$ratee || !$area1 || !$area2 || !$area3 || !$area4)

{
     echo 'You have not entered all the required details.<br />'
          .'Please go back and try again.';
     exit;  
  }
  if (!get_magic_quotes_gpc())
  {
    $rater = addslashes($rater);
    $ratee = addslashes($ratee);
    $area1 = addslashes($area1);
    $area2 = addslashes($area2);
    $area3 = addslashes($area3);
    $area4 = doubleval($area4);
  }

  // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO PR (rater, ratee, area1, area2, area3, area4) 
    VALUES (:rater, :ratee, :area1, :area2, :area3, :area4)");
    $stmt->bindParam(':rater', $rater);
    $stmt->bindParam(':ratee', $ratee);
    $stmt->bindParam(':area1', $area1);
    $stmt->bindParam('area2', $area2);
    $stmt->bindParam(':area3', $area3);
    $stmt->bindParam('area4', $area4);
    $stmt->execute();
    echo "New records created successfully";
    }

catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;

</body>
</html>