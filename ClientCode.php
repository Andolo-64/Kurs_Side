<?php 
//©A,O Høgestøl 2023
 
    $Trac = 0;
    $Gamer = "Gaming";
    echo $Gamer;
    echo"Hello";

    if($_SERVER['REQUEST_METHOD'] === 'Sent')
    {
        print"OK";
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST')
     {
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

     
