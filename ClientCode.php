<?php 
//©A,O Høgestøl 2023
          
    $imageClientGif = 'ClientImg.gif';
    $BildeText1 = "Hvordan ein Client kommuniserer";
    $prosentRett = 0;

    $Oppg1 = $_POST["Oppg1"] ?? "";
    $Oppg2 = $_POST["Oppg2"] ?? "";
    $Oppg3 = $_POST["Oppg3"] ?? "";
    $Oppg4 = $_POST["Oppg4"] ?? "";
    $Oppg5 = $_POST["Oppg5"] ?? "";
    $KorMangeRett = 0;
    $KorMangeFines = 5;
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
        global $KorMangeFines;
        $prosentRett = $KorMangeRett * 100 / $KorMangeFines;
        echo "$prosentRett"."% ";
        echo "$KorMangeRett"."/"."$KorMangeFines";
      
    } 
function tilbakemelding()
{
    global $KorMangeRett;
    switch($KorMangeRett)
    {
        case 4:
            echo "du har nok rett, kurset er bestått ";
            break;
        case 5:
           echo "Du fekk alle rett ☺ , kurset er bestått ";
           break;
        default:  echo "Du har ikke nok rett, vennligst prøv igjen ";

    }
}
    
     
