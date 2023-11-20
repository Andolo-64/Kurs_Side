<?php 
//©A,O Høgestøl 2023
 
    $Trac = 0;
   
    
    $imageClientGif = 'ClientImg.gif';
    $BildeText1 = "Client";

    $Oppg1 = $_POST["Oppg1"] ?? "";
    $Oppg2 = $_POST["Oppg2"] ?? "";
    $Oppg3 = $_POST["Oppg3"] ?? "";
    $Oppg4 = $_POST["Oppg4"] ?? "";
    $KorMangeRett = 0;

    


    function RettSver()
    {
        global $KorMangeRett;
        $KorMangeRett += 1;
        echo "Du svarte rett";
    }

    if($_SERVER['REQUEST_METHOD'] === 'Sent')
    {
        print"OK";
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST')
     {
        global $Trac;
        switch($Trac){
            case 0:
            echo"PHP";
            $Trac++;
            break;
            case 1:
            echo"Anime";
            echo "Today is " . date("d/m/y") . "<br>";
            $Trac++;
            break;
            case 3:
            echo"Gaming"; 
             $Trac= 0;
             break;
        }
    }

    if (isset($_GET['functionToCall']) && function_exists($_GET['functionToCall'])) {
        call_user_func($_GET['functionToCall']);
      }
      
      function yourFunction()
      {
        echo"Hello";
      }

     
