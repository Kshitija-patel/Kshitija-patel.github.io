window.onload = pageReady;

function pageReady(){
    
    for(let i=1;i<=7;i++)
    {
        var x= document.getElementById("sp_day"+i);
        x.onclick=function (){
        var y=document.getElementById("span_day"+i);
        $("#sp_day"+i).css("float", (y.style.display == "inline-block") ? "left" : "right");
        y.style.display = (y.style.display == "inline-block") ? "none" : "inline-block";
    }
    }
}
