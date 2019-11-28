//"-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd
var tWidth='350px';                  // width (in pixels)
var tHeight='25px';                  // height (in pixels)
var tcolour='';               // background colour:
var moStop=true;                     // pause on mouseover (true or false)
var fontfamily = 'Lucida Sans Unicode'; // font for content
var tSpeed=1;                        // scroll speed (1 = slow, 5 = fast)

// enter your ticker content here (use \/ and \' in place of / and ' respectively)
var content='1/f = 1/v + 1/u';

var cps=-tSpeed; var aw, mq; var fsz = parseInt(tHeight) - 4; 
function startticker()
{
if (document.getElementById) 
    {
        var tick = '<div style="position:relative;width:'+tWidth+';height:'+tHeight+';overflow:hidden;background-color:'+tcolour+'"'; 
        if (moStop) 
        tick += ' onmouseover="cps=0" onmouseout="cps=-tSpeed"'; 
        tick +='><div id="mq" style="position:absolute;right:0px;top:0px;color:#ffffff;font-family:'+fontfamily+';font-size:'+fsz+'px;white-space:nowrap;"><\/div><\/div>'; 
        document.getElementById('ticker').innerHTML = tick; mq = document.getElementById("mq"); mq.style.right=(10+parseInt(tWidth))+"px"; 
        mq.innerHTML='<span id="tx">'+content+'<\/span>'; aw = document.getElementById("tx").offsetWidth; lefttime=setInterval("scrollticker()",50);
    }
} 
function scrollticker()
{
    mq.style.right = (parseInt(mq.style.right)>(-10 - aw)) ?
    mq.style.right = parseInt(mq.style.right)+cps+"px": parseInt(tWidth)+10+"px";
} 
window.onload=startticker;