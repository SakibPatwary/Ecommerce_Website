<!DOCTYPE html>
<html>
<head>
	<title>About us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
</style>
</head>
<body style="font-size:20px">
<?php 
include 'upperHeader.php';?>
<div class="container">
  <div class="row">
    <div class="col-12">
<a href="#" onclick="displayCD(0)">Fahim Ahmed Emon</a>
<div id='fahim'></div>
<a href="#" onclick="displayCD(1)">Aerafin, Sadat</a>
<div id='sadat'></div>
<a href="#" onclick="displayCD(2)">Sultana, Sharmin</a>
<div id='sharmin'></div>
<a href="#" onclick="displayCD(3)">Patwary, Sakib</a>
<div id='sakib'></div>
</div>
</div>
</div>

<script>
	function displayCD(i) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            myFunction(this, i);
        }
    };
    xmlhttp.open("GET", "test.xml", true);
    xmlhttp.send();
}

function myFunction(xml, i) {
    var xmlDoc = xml.responseXML;
    x = xmlDoc.getElementsByTagName("CD");
    if (i==0) {
    document.getElementById("fahim").innerHTML =
    "Performing Role: " +
    x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
    "<br>ID: " +
    x[i].getElementsByTagName("ID")[0].childNodes[0].nodeValue +
    "<br>Some Details: " + 
    x[i].getElementsByTagName("DET")[0].childNodes[0].nodeValue;
  }
  else if (i==1) {
  	document.getElementById("sadat").innerHTML =
    "Performing Role: " +
    x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
    "<br>ID: " +
    x[i].getElementsByTagName("ID")[0].childNodes[0].nodeValue +
    "<br>Some Details: " + 
    x[i].getElementsByTagName("DET")[0].childNodes[0].nodeValue;
 }
 else if (i==2) {
  	document.getElementById("sharmin").innerHTML =
    "Performing Role: " +
    x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
    "<br>ID: " +
    x[i].getElementsByTagName("ID")[0].childNodes[0].nodeValue +
    "<br>Some Details: " + 
    x[i].getElementsByTagName("DET")[0].childNodes[0].nodeValue;
 }
 else if (i==3) {
  	document.getElementById("sakib").innerHTML =
    "Performing Role: " +
    x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
    "<br>ID: " +
    x[i].getElementsByTagName("ID")[0].childNodes[0].nodeValue +
    "<br>Some Details: " + 
    x[i].getElementsByTagName("DET")[0].childNodes[0].nodeValue;
 }
}
</script>
</body>
</html>