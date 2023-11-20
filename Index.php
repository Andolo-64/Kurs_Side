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

        <div class = "grid-container">
            <div id = textBox1>
                <h4>Client<h4> 

            </div>

            <div id = textBox1>
                <h2>Film<h2> 
                <video width="320" height="240" controls>  
                    <source src="Client_Kurs.mp4" type="video/mp4">
                </video>
            </div>
       
        </div>
           
                <div id = textBox1>
                <h2>Oppgåve 1<h2>
                <form action="index.php" method="post">
                    <input type="Text" name="Oppg1">
                    
                    
                   
                
            </div>
            <div id = textBox1>
                <h2>Oppgåve 2<h2>
                <input type="Text" name="Oppg2">
            </div>
            <div id = textBox1>
                <h2>Oppgåve 3<h2>
                <input type="Text" name="Oppg3">
            </div>
            <div id = textBox1>
                <h2>Oppgåve 4<h2>
                <input type="Text" name="Oppg4">
            </div>
            <input type="submit">
            <div id = #submit >
            <?php if($Oppg1 == "ja") {RettSver();}
             if ($KorMangeRett > 0) {echo $KorMangeRett;}
             
            ?>
            </div>
            </form>
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

