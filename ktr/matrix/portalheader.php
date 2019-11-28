<html>
<head><title></title>
<script type="text/javascript" src="TypingText.js">
/****************************************************
* Typing Text script- By Twey @ Dynamic Drive Forums
* Visit Dynamic Drive for this script and more: http://www.dynamicdrive.com
* Please keep this notice intact
****************************************************/
</script>

</head>
<body>
<div id="example1">KCSE 2015 PERFORMANCE TREND</div>

<p id="example2"></p>

<script type="text/javascript">
//Define first typing example:
new TypingText(document.getElementById("example1"));

//Define second typing example (use "slashing" cursor at the end):
new TypingText(document.getElementById("example2"), 100, function(i){ var ar = new Array("\\", "|", "/", "-"); return " " + ar[i.length % ar.length]; });

//Type out examples:
TypingText.runAll();
</script>
</body>
</html>