//©A,O Høgestøl 2023

var traker =0;

function genBtn()
{
    console.log("buten")
for (var test = 1; test >= traker;)
{
    console.log("lopp")
    traker++;
    var Scalebox = document.createElement("textbox");
    Scalebox.setAttribute("type", "textbox");
    Scalebox.setAttribute("readonly", "true");
        Scalebox.setAttribute("placeholder", "not valid");
        Scalebox.setAttribute("size", "20");
        Scalebox.setAttribute("rows", "6");
        Scalebox.classList.add("Boxclass");
    document.body.appendChild(Scalebox);
    
}

}


