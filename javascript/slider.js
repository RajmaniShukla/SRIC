
var cimgno=0;
function moveslider()
    {
		var i;
        var im=document.getElementsByClassName("imslide");
        for(i = 0; i < im.length; i++){
			im[i].style.display = "none";
		}
        cimgno++;
        if(cimgno > im.length){cimgno=1}
			im[cimgno-1].style.display = "block";
        setTimeout(moveslider, 2000);
               
    }// JavaScript Document