//"-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd
var tWidth='510px';                  // width (in pixels)
var tHeight='25px';                  // height (in pixels)
var tcolour='';               // background colour:
var moStop=true;                     // pause on mouseover (true or false)
var fontfamily = '0 1px 2px rgba(0, 0, 0, .6)'; // font for content
var tSpeed=1;                        // scroll speed (1 = slow, 5 = fast)

// enter your ticker content here (use \/ and \' in place of / and ' respectively)
var content='We are for you keep going!';

var cps=-tSpeed; var aw, mq; var fsz = parseInt(tHeight) - 4; 
function startticker()
{
if (document.getElementById) 
    {
        var tick = '<div style="position:relative;width:'+tWidth+';height:'+tHeight+';overflow:hidden;background-color:'+tcolour+'"'; 
        if (moStop) 
        tick += ' onmouseover="cps=0" onmouseout="cps=-tSpeed"'; 
        tick +='><div id="mq" style="position:absolute;right:0px;top:0px;color:#F0677C;font-family:'+fontfamily+';font-size:'+fsz+'px;white-space:nowrap;"><\/div><\/div>'; 
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