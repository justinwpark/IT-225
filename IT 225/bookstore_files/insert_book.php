<html>
<head>
  <title>Book-O-Rama Book Entry Results</title>
</head>
<body>
<h1>Book-O-Rama Book Entry Results</h1>
<?php
$servername = "localhost";
$username = "jwp15b";
$password = "IT225pswd!";
$dbname = "books";

  $isbn=$_POST['isbn'];
  $author=$_POST['author'];
  $title=$_POST['title'];
  $price=$_POST['price'];

  if (!$isbn || !$author || !$title || !$price)
  {
     echo 'You have not entered all the required details.<br />'
          .'Please go back and try again.';
     exit;  
  }
  if (!get_magic_quotes_gpc())
  {
    $isbn = addslashes($isbn);
    $author = addslashes($author);
    $title = addslashes($title);
    $price = doubleval($price);
  }

try {
    $conn = new PDO("mysql:host=$localhost;dbname=$books", $jwp15b, $IT225pswd!);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO books (isbn, author, title, price) 
    VALUES (:isbn, :author, :title, :price)");
    $stmt->bindParam(':isbn', $isbn);
    $stmt->bindParam(':author', $author);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam('price', $price);
    $stmt->execute();
    echo "New records created successfully";
    }


catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;

?>
</body>
</html>
