<html>
<head>
  <title>Book-O-Rama Search Results</title>
</head>
<body>
<h1>Book-O-Rama Search Results</h1>
<?php
$servername = "localhost";
$username = "jwp15b";
$password = "IT225pswd!";
$dbname = "books";

try {
    $conn = new PDO("mysql:host=$localhost;$dbname=$books",$username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // create short variable names
  $searchtype=$_POST['searchtype'];
  $searchterm=$_POST['searchterm'];

  $searchterm= trim($searchterm);

  if (!$searchtype || !$searchterm)
  {
     echo 'You have not entered search details.  Please go back and try again.';
     exit;
  }
  
  if (!get_magic_quotes_gpc())
  {
    $searchtype = addslashes($searchtype);
    $searchterm = addslashes($searchterm);
  }

  // perform query
  $query = "select * from books where ".$searchtype." like '%".$searchterm."%'";

  $result = $db->query($query);
  // check that result was ok
  if (DB::isError($result)) 
  { 
    echo $db->getMessage();
    exit;
  }

  // get number of returned rows
  $num_results = $result->numRows();

  // display each returned row
  for ($i=0; $i <$num_results; $i++)
  {
     $row = $result->fetchRow(DB_FETCHMODE_ASSOC);
     echo '<p><strong>'.($i+1).'. Title: ';
     echo htmlspecialchars(stripslashes($row['title']));
     echo '</strong><br />Author: ';
     echo stripslashes($row['author']);
     echo '<br />ISBN: ';
     echo stripslashes($row['isbn']);
     echo '<br />Price: ';
     echo stripslashes($row['price']);
     echo '</p>';
  }
}
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>
</body>
</html>
