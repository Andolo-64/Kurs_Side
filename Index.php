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
    <link rel="stylesheet" href="ClientStyl.css">
<div class = "container">

    <h1>Client<h1>
    
    <div id = textBox1>
            <h2>Kva skal du lere om<h2>
            <h4>Client Sine Oppgaver<h4>
            <h4>Client Server Modelen<h4>  
            <h4>Vordan ein Client kominiserer<h4>
        </div>

    <div class = "grid-container">
       
        <div id = textBox1>
            <h2>Client Sine Oppgaver<h2>
            <h4>
                Client sine oppgaver er og kominisere end ein server.                 
                Clienten har oppgaven og spøre om services og resurser.
                

            <h4>
        </div>

        <div id = textBox1>
            <h2>Client Server Modelen<h2>
            <h4>Client Server Modelen er den valigaste måten pcer kominiserer og foker med at du har ein client og ein server med distinkte oppgaver<h4>   
        </div>

        <div id = textBox1>
            
            <h2> <?php echo "$BildeText1";?><h2>
            <h4>ein Client kominiserer med og sende pacets til ein server. det er to pacets som er vanlig tcp og udp<h4>
              <?php echo '<img id = GifImg src="' . $imageClientGif . '" alt="ClientGif">';?> 
        </div>

    </div>

    <div id = textBox1>
        <h2>Film<h2> 
        <video id = "video" width="640" height="480" controls>  
            <source src="Client_Kurs.mp4" type="video/mp4">
        </video>
     </div>

        <div id = textBox1>
                <h2>Oppgåver<h2>
                    <h3>Nor du har svart på alle oppgavene må du tryke send og bla ned til bunen for og se resultate du må få minst 80% for og bestå<h3>
        </div>

    <form action="index.php" method="POST">
            <div id = textBox1>
                <h2>Oppgåve 1<h2>
                <h4>Kan ein klient snaka med ein klient<h4>
                <input type="radio" name="Oppg1" value="1" > JA
                <input type="radio" name="Oppg1" value="2"> Nei
            </div>
            <div id = textBox1>
                <h3>Oppgåve 2<h3>
                <h4>kva er navna til packetene clienten kan sende<h4>   
                <input type="radio" name="Oppg2" value="1" > tcg php
                <input type="radio" name="Oppg2" value="2"> ini nat 
                <input type="radio" name="Oppg2" value="3"> tcp udp
            </div>
            <div id = textBox1>
                <h2>Oppgåve 3<h2>
                <h4>Kva Skjer vis paceten ikkje komer fram til serveren<h4>  
                <input type="radio" name="Oppg3" value="1" > ???
                <input type="radio" name="Oppg3" value="2"> ???
            </div>
            <div id = textBox1>
                <h2>Oppgåve 4<h2>
                <h4>kva pacet bruke ein netside<h4>
                <input type="Text" name="Oppg4">
            </div>
            <div id = textBox1>
                <h2>Oppgåve 5<h2>
                <h4>kva pacet bruker valorant<h4>
                <input type="Text" name="Oppg5">
            </div>
            <div >
                <input type="submit" name="PHPBtn" >
            </div>
            <?php 

             if($Oppg1 == "2") {RettSvar();}
             
             if($Oppg2 == "3") {RettSvar();}

             if($Oppg3 == "1") {RettSvar();}

             if($Oppg4 == "tcp") {RettSvar();}  

             if($Oppg5 == "udp") {RettSvar();}

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

