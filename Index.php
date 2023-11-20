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
           
    
    <form action="index.php" method="POST">
            <div id = textBox1>
                <h2>Oppgåve 1<h2>
                <input type="Text" name="Oppg1">
            </div>
            <div id = textBox1>
                <h2>Oppgåve 2<h2>
                <input type="radio" name="Oppg2" value="Ja" checked> Ja
                <input type="radio" name="Oppg2" value="Nei"> Nei
            </div>
            <div id = textBox1>
                    <h2>Oppgåve 3<h2>
                    <input type="Text" name="Oppg3">
            </div>
            <div id = textBox1>
                <h2>Oppgåve 4<h2>
                <input type="Text" name="Oppg4">
            </div>
            <div id = textBox1>
                <h2>Oppgåve 5<h2>
                <input type="Text" name="Oppg5">
            </div>
            <div >
                <input type="submit" name="PHPBtn" >
            </div>
            <?php 

             if($Oppg1 == "ja") {RettSvar();}
             
             if($Oppg2 == "Nei") {RettSvar();}

             if($Oppg3 == "Nei") {RettSvar();}

             if($Oppg4 == "Nei") {RettSvar();}  

             if($_SERVER['REQUEST_METHOD'] === "POST")
             {
                Svart();
             }
            ?>
            </div>
    </form>
</div>
 
</div>
<script src="Client.js" ></script>
</body>
</html>

