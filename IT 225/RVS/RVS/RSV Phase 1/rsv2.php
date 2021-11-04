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
<!--this get the user input info from the first page and puts it onto the DOM-->
First Name: <?php echo $_POST["firstname"]; ?><br>
Last Name: <?php echo $_POST["lastname"]; ?><br>
User Name: <?php echo $_POST["username"]; ?><br>
Email: <?php echo $_POST["email"]; ?><br>
<!--this is my sortable lists with the first being blank to recieve the second lists values-->
	<ul id="sortable1" class="connectedSortable">
	</ul>

	<ul id="sortable2" class="connectedSortable">
 		<li class="ui-state-default" id="TF">True Friendship</li>
 	 	<li class="ui-state-default" id="ML">Mature Love</li>
  		<li class="ui-state-default" id="S-R">Self-Respect</li>
 		<li class="ui-state-default" id="H">Happiness</li>
 		<li class="ui-state-default" id="IH">Inner Harmony</li>
 		<li class="ui-state-default" id="E">Equality</li>
 		<li class="ui-state-default" id="F">Freedom</li>
  		<li class="ui-state-default" id="P">Pleasure</li>
  		<li class="ui-state-default" id="SR">Social Recogintion</li>
		<li class="ui-state-default" id="W">Wisdom</li>
		<li class="ui-state-default" id="S">Salvation</li>
 		<li class="ui-state-default" id="FS">Family Security</li>
  		<li class="ui-state-default" id="NS">National Security</li>
  		<li class="ui-state-default" id="SA">A Sense of Accomplishment</li>
  		<li class="ui-state-default" id="WB">A World of Beauty</li>
  		<li class="ui-state-default" id="WP">A World of Peace</li>
  		<li class="ui-state-default" id="CL">A Comfortable Life</li>
  		<li class="ui-state-default" id="EL">An Exciting Life</li>
	</ul>
<!--this is my form that is used to pass the information to the next page using the post array-->
<div class="Form">
  <form id="myForm" action="rsv3.php" method="POST"> 
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