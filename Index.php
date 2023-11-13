<!--
©A,O Høgestøl 2023
-->
<?php
include("ClientCode.php");
?>
<!DOCTYPE html>
<html>
<head>
        <link rel="icon" href="ClietIkon1.png" >
<title>Client</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <link rel="stylesheet" href="Client.css">
<div class = "container">

    <h1>Client<h1>
    
    <div class = "grid-container">
        <div id = textBox1>
            <h2>Kva skal du lere om<h2>
            <h4>Client Sine Oppgaver<h4>
            <h4>Client Server Modelen<h4>  
        </div>

        <div id = textBox1>
            <h2>Client Sine Oppgaver<h2>
            <h4>Client<h4>
        </div>

        <div id = textBox1>
            <h2>Client Server Modelen<h2>
            <h4>Client<h4>   
        </div>

        <div id = textBox1>
            <p id = GifImg >  <?php echo '<img src="' . $imageClientGif . '" alt="ClientGif">';?> <p>
            <h4> <?php echo "$BildeText1";?><h4>
        </div>

    </div>
</div>

   <!-- 
    <button id="generateBtn" onclick="genBtn()"> button </button>
   <p id = "butenResultat"> <p>
   <button id="SBtn" onclick="ServerBtn()"> PHP </button>
<form method="post">
    --php Buten-- 
    <input type="submit" name="PHPBtn" value="GamingPHP">
</form>
-->
 


</div>
<script src="Client.js" ></script>
</body>
</html>

