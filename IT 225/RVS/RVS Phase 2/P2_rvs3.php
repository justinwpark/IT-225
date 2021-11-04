<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RSV</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  #sortable1, #sortable2 {
    border: 1px solid #eee;
    width: 142px;
    min-height: 875px;
    list-style-type: none;
    margin: 0;
    padding: 5px 0 0 0;
    float: left;
    margin-right: 10px;
  }
  #sortable1 li, #sortable2 li {
    margin: 0 5px 5px 5px;
    padding: 5px;
    font-size: 1.2em;
    width: 120px;
  }
  </style>
  <!--this is the js that is used to make the following lists sortable-->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
   $( function() {
     $( "#sortable1, #sortable2" ).sortable({
       connectWith: ".connectedSortable"
     }).disableSelection();
   } );
  </script>
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
    $sql = "INSERT INTO TERMINAL (ACU_USERNAME, T1, T2, T3, T4, T5, T6, T7, T8, T9, T10, T11, T12, T13, T14, T15, T16, T17, T18)
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
<br>
User Name: <?php echo $_POST["ACU_USERNAME"]; ?><br>
<p>Instrumental Values</p>
<br>
<!--this is my sortable lists with the first being blank to recieve the second lists values-->
	<ul id="sortable1" class="connectedSortable">
	</ul>

	<ul id="sortable2" class="connectedSortable">
 		<li class="ui-state-default" id="C">Cheerfulness</li>
 	 	<li class="ui-state-default" id="A">Ambition</li>
  		<li class="ui-state-default" id="L">Love</li>
 		<li class="ui-state-default" id="H">Cleanliness</li>
 		<li class="ui-state-default" id="IH">Self-Control</li>
 		<li class="ui-state-default" id="E">Capability</li>
 		<li class="ui-state-default" id="F">Courage</li>
  		<li class="ui-state-default" id="P">Politeness</li>
  		<li class="ui-state-default" id="SR">Honesty</li>
		<li class="ui-state-default" id="W">Imagination</li>
		<li class="ui-state-default" id="S">Independence</li>
 		<li class="ui-state-default" id="FS">Intellect</li>
  		<li class="ui-state-default" id="NS">Broad-Mindedness</li>
  		<li class="ui-state-default" id="SA">Logic</li>
  		<li class="ui-state-default" id="WB">Obediance</li>
  		<li class="ui-state-default" id="WP">Helpfulness</li>
  		<li class="ui-state-default" id="CL">Responsibility</li>
  		<li class="ui-state-default" id="EL">Forgiveness</li>
	</ul>
<!--this is my form that is used to pass the information to the next page using the post array-->
<div class="Form">
  <form id="myForm" action="P2_rvs4.php" method="POST"> 
	<button type="button" onclick='myFunction()' value="Submit">Submit</button>
 		<input type="hidden" id="li1" name="li1">
 		<input type="hidden" id="li2" name="li2">
 		<input type="hidden" id="li3" name="li3">
		<input type="hidden" id="li4" name="li4">
		<input type="hidden" id="li5" name="li5">
		<input type="hidden" id="li6" name="li6">
		<input type="hidden" id="li7" name="li7">
		<input type="hidden" id="li8" name="li8">
		<input type="hidden" id="li9" name="li9">
		<input type="hidden" id="li10" name="li10">
		<input type="hidden" id="li11" name="li11">
		<input type="hidden" id="li12" name="li12">
		<input type="hidden" id="li13" name="li13">
		<input type="hidden" id="li14" name="li14">
		<input type="hidden" id="li15" name="li15">
		<input type="hidden" id="li16" name="li16">
		<input type="hidden" id="li17" name="li17">
		<input type="hidden" id="li18" name="li18">
		<input type="hidden" id="ACU_USERNAME" name="ACU_USERNAME" value='<?php echo $_POST["ACU_USERNAME"]; ?>'>
		<input type="hidden" id="email" name="email" value='<?php echo $_POST["email"]; ?>'>
		<input type="hidden" id="t1" name="t1" value='<?php echo $_POST["li1"]; ?>'>
		<input type="hidden" id="t2" name="t2" value='<?php echo $_POST["li2"]; ?>'>
		<input type="hidden" id="t3" name="t3" value='<?php echo $_POST["li3"]; ?>'>
		<input type="hidden" id="t4" name="t4" value='<?php echo $_POST["li4"]; ?>'>
		<input type="hidden" id="t5" name="t5" value='<?php echo $_POST["li5"]; ?>'>
		<input type="hidden" id="t6" name="t6" value='<?php echo $_POST["li6"]; ?>'>
		<input type="hidden" id="t7" name="t7" value='<?php echo $_POST["li7"]; ?>'>
		<input type="hidden" id="t8" name="t8" value='<?php echo $_POST["li8"]; ?>'>
		<input type="hidden" id="t9" name="t9" value='<?php echo $_POST["li9"]; ?>'>
		<input type="hidden" id="t10" name="t10" value='<?php echo $_POST["li10"]; ?>'>
		<input type="hidden" id="t11" name="t11" value='<?php echo $_POST["li11"]; ?>'>
		<input type="hidden" id="t12" name="t12" value='<?php echo $_POST["li12"]; ?>'>
		<input type="hidden" id="t13" name="t13" value='<?php echo $_POST["li13"]; ?>'>
		<input type="hidden" id="t14" name="t14" value='<?php echo $_POST["li14"]; ?>'>
		<input type="hidden" id="t15" name="t15" value='<?php echo $_POST["li15"]; ?>'>
		<input type="hidden" id="t16" name="t16" value='<?php echo $_POST["li16"]; ?>'>
		<input type="hidden" id="t17" name="t17" value='<?php echo $_POST["li17"]; ?>'>
		<input type="hidden" id="t18" name="t18" value='<?php echo $_POST["li18"]; ?>'>
		</form>
<!--a place holder for testing purposes-->
<p id="demo1"></p>
<p id="demo2"></p>
<p id="demo3"></p>
<p id="demo4"></p>
<p id="demo5"></p>
<p id="demo6"></p>
<p id="demo7"></p>
<p id="demo8"></p>
<p id="demo9"></p>
<p id="demo10"></p>
<p id="demo11"></p>
<p id="demo12"></p>
<p id="demo13"></p>
<p id="demo14"></p>
<p id="demo15"></p>
<p id="demo16"></p>
<p id="demo17"></p>
<p id="demo18"></p>

<script>
function myFunction() {
	//this function sets up an array, x, with all of the objects with the class name of ui-state-default in order as they were sorted, then assigns then assigns them to my placeholder, and finally the form with the mentioned Id is given the value from my place holder
	var x = document.getElementsByClassName("ui-state-default");
	document.getElementById("demo1").innerHTML = x[0].innerHTML;
	    document.getElementById("li1").value = document.getElementById("demo1").innerHTML;
	var x = document.getElementsByClassName("ui-state-default");
	document.getElementById("demo2").innerHTML = x[1].innerHTML;
	    document.getElementById("li2").value = document.getElementById("demo2").innerHTML;
	var x = document.getElementsByClassName("ui-state-default");
	document.getElementById("demo3").innerHTML = x[2].innerHTML;
	    document.getElementById("li3").value = document.getElementById("demo3").innerHTML;
	var x = document.getElementsByClassName("ui-state-default");
	document.getElementById("demo4").innerHTML = x[3].innerHTML;
	    document.getElementById("li4").value = document.getElementById("demo4").innerHTML;
	var x = document.getElementsByClassName("ui-state-default");
	document.getElementById("demo5").innerHTML = x[4].innerHTML;
	    document.getElementById("li5").value = document.getElementById("demo5").innerHTML;
	var x = document.getElementsByClassName("ui-state-default");
	document.getElementById("demo6").innerHTML = x[5].innerHTML;
	    document.getElementById("li6").value = document.getElementById("demo6").innerHTML;
	var x = document.getElementsByClassName("ui-state-default");
	document.getElementById("demo7").innerHTML = x[6].innerHTML;
	    document.getElementById("li7").value = document.getElementById("demo7").innerHTML;
	var x = document.getElementsByClassName("ui-state-default");
	document.getElementById("demo8").innerHTML = x[7].innerHTML;
	    document.getElementById("li8").value = document.getElementById("demo8").innerHTML;
	var x = document.getElementsByClassName("ui-state-default");
	document.getElementById("demo9").innerHTML = x[8].innerHTML;
	    document.getElementById("li9").value = document.getElementById("demo9").innerHTML;
	var x = document.getElementsByClassName("ui-state-default");
	document.getElementById("demo10").innerHTML = x[9].innerHTML;
	    document.getElementById("li10").value = document.getElementById("demo10").innerHTML;
	var x = document.getElementsByClassName("ui-state-default");
	document.getElementById("demo11").innerHTML = x[10].innerHTML;
	    document.getElementById("li11").value = document.getElementById("demo11").innerHTML;
	var x = document.getElementsByClassName("ui-state-default");
	document.getElementById("demo12").innerHTML = x[11].innerHTML;
	    document.getElementById("li12").value = document.getElementById("demo12").innerHTML;
	var x = document.getElementsByClassName("ui-state-default");
	document.getElementById("demo13").innerHTML = x[12].innerHTML;
	    document.getElementById("li13").value = document.getElementById("demo13").innerHTML;
	var x = document.getElementsByClassName("ui-state-default");
	document.getElementById("demo14").innerHTML = x[13].innerHTML;
	    document.getElementById("li14").value = document.getElementById("demo14").innerHTML;
	var x = document.getElementsByClassName("ui-state-default");
	document.getElementById("demo15").innerHTML = x[14].innerHTML;
	    document.getElementById("li15").value = document.getElementById("demo15").innerHTML;
	var x = document.getElementsByClassName("ui-state-default");
	document.getElementById("demo16").innerHTML = x[15].innerHTML;
	    document.getElementById("li16").value = document.getElementById("demo16").innerHTML;
	var x = document.getElementsByClassName("ui-state-default");
	document.getElementById("demo17").innerHTML = x[16].innerHTML;
	    document.getElementById("li17").value = document.getElementById("demo17").innerHTML;
	var x = document.getElementsByClassName("ui-state-default");
	document.getElementById("demo18").innerHTML = x[17].innerHTML;
	    document.getElementById("li18").value = document.getElementById("demo18").innerHTML;
	    document.getElementById("myForm").submit();
}
</script>

</body>
</html>