//©A,O Høgestøl 2023

var traker =0;

function genBtn()
{
  
    console.log("buten")
for (var test = 5; test >= traker;)
{
    console.log("lopp")
    traker++;
    var ebox = document.createElement("input");
    ebox.setAttribute("type", "text");
    document.getElementById('butenResultat').appendChild(ebox);
    console.log("lagd")
}
}

function ServerBtn()
{
    var xhr = new XMLHttpRequest();
    xhr.open('Sent', 'ClientCode.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    // You can include data in the send method if needed
    xhr.send();

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle the response from the PHP function
            console.log(xhr.responseText);
        }
    };
   

}
