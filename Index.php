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
    <link rel="stylesheet" href="ClientStyling.css">
<div class = "container">

    <h1>Client<h1>
    
    <div id = textBox1>
            <h2>Hva skal du lære om<h2>
            <h4>Client sine oppgaver<h4>
            <h4>Client server modellen<h4>  
            <h4>Hvordan en client kommuniserer<h4>
        </div>

    <div class = "grid-container">
       
        <div id = textBox1>
            <h2>Client sine oppgaver<h2>
            <h4>
                Client sine oppgaver er og kommunisere med en server.                 
                Clienten har som oppgave og spørre om services og resurser.
            <h4>
        </div>

        <div id = textBox1>
            <h2>Client server modellen<h2>
            <h4>
                Client server modellen er den vanligeste måten pcer kommuniserer på. 
                Det fungerer slik at du har en client og en server med distinkte oppgaver
            <h4>   
        </div>

        <div id = textBox1>
            
            <h2> <?php echo "$BildeText1";?><h2>
            <h4>En Client kommuniserer ved å sende pacets til en server. Det er to pacet Protocoler som er vanlig og bruke, tcp og udp<h4>
              <?php echo '<img id = GifImg src="' . $imageClientGif . '" alt="ClientGif">';?> 
        </div>

    </div>

    <div id = textBox1>
        <h2>Film<h2> 
       
        <iframe 
        id = "video" width="560" height="315"
         src="https://www.youtube.com/embed/jhJjUgu8W2Q?si=mRBk46hNpk7AIiYQ" 
         title="YouTube video player" 
         frameborder="0" 
         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
         allowfullscreen>
        </iframe>
     </div>

        <div id = textBox1>
                <h2>Oppgaver<h2>
                <h3>
                    Når du har svart på alle oppgavene må du tryke send og bla ned til bunnen for og se resultate.
                    Du må få minst 80% for og bestå.
                <h3>
        </div>

    <form action="index.php" method="POST">
            <div id = textBox1>
                <h2>Oppgave 1<h2>
                <h4>Kan en klient snakke med en klient<h4>
                <input type="radio" name="Oppg1" value="1" > JA
                <input type="radio" name="Oppg1" value="2"> Nei
            </div>
            <div id = textBox1>
                <h3>Oppgave 2<h3>
                <h4>hva er navna til di vanligaste packet Protocolene clienten kan sende<h4>   
                <input type="radio" name="Oppg2" value="1" > tcg php
                <input type="radio" name="Oppg2" value="2"> ini nat
                <input type="radio" name="Oppg2" value="3"> tcp udp
            </div>
            <div id = textBox1>
                <h2>Oppgave 3<h2>
                <h4>hva heter det når du har en client og en server med distinkte oppgaver<h4>  
                <h4> <input type="radio" name="Oppg3" value="1" > nettverk pacet modellen<h4>
                <h4> <input type="radio" name="Oppg3" value="2"> Client Server modellen<h4>
                <h4> <input type="radio" name="Oppg3" value="3"> udp tcp modellen<h4>
            </div>
            <div id = textBox1>
                <h2>Oppgave 4<h2>
                <h4>Hvilken pacet Protocol bruker en nettside<h4>
                <input type="Text" name="Oppg4">
            </div>
            <div id = textBox1>
                <h2>Oppgave 5<h2>
                <h4>Hvilken pacet Protocol bruker valorant<h4>
                <input type="Text" name="Oppg5">
            </div>
            <div >
                <input type="submit" name="PHPBtn" >
            </div>
            <?php 

             if($Oppg1 == "2") {RettSvar();}
             
             if($Oppg2 == "3") {RettSvar();}

             if($Oppg3 == "2") {RettSvar();}

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
</body>
</html>

