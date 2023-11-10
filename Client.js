//©A,O Høgestøl 2023

var traker =0;

function genBtn()
{
    $.ajax({
        type: "POST",
        url: 'ClientCode.php',
        data:{action:'call_this'},
        success:function(html) {
          alert(html);
        }

   });

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


