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


