<?php 
//©A,O Høgestøl 2023
          
    $imageClientGif = 'ClientImg.gif';
    $BildeText1 = "Vordan ein Client kominiserer";
    $prosentRett = 0;

    $Oppg1 = $_POST["Oppg1"] ?? "";
    $Oppg2 = $_POST["Oppg2"] ?? "";
    $Oppg3 = $_POST["Oppg3"] ?? "";
    $Oppg4 = $_POST["Oppg4"] ?? "";
    $Oppg5 = $_POST["Oppg5"] ?? "";
    $KorMangeRett = 0;
      function RettSvar()
    {
        global $KorMangeRett;
        $KorMangeRett += 1;
    }

    function Svart()
    {
        tilbakemelding();
        global $prosentRett;
        global $KorMangeRett;
        $prosentRett = $KorMangeRett * 100 / 5;
        echo "$prosentRett"."% ";
        echo "$KorMangeRett"."/"."5";
      
    } 
function tilbakemelding()
{
    global $KorMangeRett;
    switch($KorMangeRett)
    {
       case 0:
           echo "du har ikkje nok rett ";
           break;
       case 1:
           echo "du har ikkje nok rett ";
           break;
       case 2:
           echo "du har ikkje nok rett ";
           break;
       case 3:
           echo "du har ikkje nok rett ";
           break;
        case 4:
            echo "du har nok rett ";
            break;
       case 5:
           echo "Du fekk alle rett ☺ ";
           break;
    }
}
    
     
