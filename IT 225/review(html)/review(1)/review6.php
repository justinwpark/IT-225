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
    about <?php echo $_POST["variable12"]; ?><br>
    <p id="name"></p>
    <br>
    <form name=rForm action="done.html">
    <input type="hidden" name="previous" value=var1>
    <br>1. This team member was helpful and courteous, comfortable to work with</br>
    <textarea name= area1 rows="4" cols="30" char="20"></textarea>
    <br>2. This team member was present and focused at all meetings, met deadlines, and contributed his/her fair share of the work</br>
    <textarea name= area2 rows="4" cols="30" char="25"></textarea>
    <br>3. The quality of this team member's work was professional</br>
    <textarea name=area3 rows="4" cols="30" char="20"></textarea>
    <br>4. I would want this team member to to be on my team again because of this expertise (Give about 5 points for each area where the team member really excelled)...</br>
    <textarea name=area4 rows="4" cols="30" char="35"></textarea>
    <input type=submit value='next Student (or Finish) Button'>
  

    <SCRIPT type = "text/JavaScript">
var aName = ["variable6","variable7","variable8","variable9","variable10","variable11","variable12"];
var count=0;
var GET_DATA = new Array();
var strGet = window.location.search;
if (strGet) {
    strGet = strGet.substr(1);
    var strDataPairs = strGet.split("&");
    for (var i = 0; i < strDataPairs.length; i++) {
        var strPair = strDataPairs[i].split("=");
        var strName = strPair[0];
        var strValue = strPair[1];
        GET_DATA[strName] = strValue;}
}

document.getElementById("name").innerHTML = GET_DATA[aName[count]];

</SCRIPT>
</body>
</html>