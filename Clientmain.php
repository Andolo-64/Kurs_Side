<!--
©A,O Høgestøl 2023
-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <link rel="stylesheet" href="Client.css">
<div class = "container">
    
<h1>Client<h1>

    <button id="generateBtn" onclick="genBtn()"> button </button>
   <p id = "butenResultat"> <p>
    <?php
include("ClientCode.php");
?>                            
</div>
<script src="Client.js" ></script>
</body>
</html>

