<html>
<head>

<script language='JavaScript'>
var txt="    SEXY GIRL     ";
var speed=300;
var refresh=null;
function action() { document.title=txt;
txt=txt.substring(1,txt.length)+txt.charAt(0);
refresh=setTimeout("action()",speed);}action();
</script>

</head>

<script type="text/javascript"> 
TypingText = function(element, interval, cursor, finishedCallback) {
if((typeof document.getElementById == "undefined") || (typeof element.innerHTML == "undefined")) {
this.running = true;	// Never run.
return;
}
this.element = element;
this.finishedCallback = (finishedCallback ? finishedCallback : function() { return; });
this.interval = (typeof interval == "undefined" ? 20 : interval);
this.origText = this.element.innerHTML;
this.unparsedOrigText = this.origText;
this.cursor = (cursor ? cursor : "");
this.currentText = "";
this.currentChar = 0;
this.element.typingText = this;
if(this.element.id == "") this.element.id = "typingtext" + TypingText.currentIndex++;
TypingText.all.push(this);
this.running = false;
this.inTag = false;
this.tagBuffer = "";
this.inHTMLEntity = false;
this.HTMLEntityBuffer = "";
}
TypingText.all = new Array();
TypingText.currentIndex = 0;
TypingText.runAll = function() {
for(var i = 0; i < TypingText.all.length; i++) TypingText.all[i].run();
}
TypingText.prototype.run = function() {
if(this.running) return;
if(typeof this.origText == "undefined") {
setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);	// We haven't finished loading yet.  Have patience.
return;
}
if(this.currentText == "") this.element.innerHTML = "";
//  this.origText = this.origText.replace(/<([^<])*>/, "");     // Strip HTML from text.
if(this.currentChar < this.origText.length) {
if(this.origText.charAt(this.currentChar) == "<" && !this.inTag) {
this.tagBuffer = "<";
this.inTag = true;
this.currentChar++;
this.run();
return;
} else if(this.origText.charAt(this.currentChar) == ">" && this.inTag) {
this.tagBuffer += ">";
this.inTag = false;
this.currentText += this.tagBuffer;
this.currentChar++;
this.run();
return;
} else if(this.inTag) {
this.tagBuffer += this.origText.charAt(this.currentChar);
this.currentChar++;
this.run();
return;
} else if(this.origText.charAt(this.currentChar) == "&" && !this.inHTMLEntity) {
this.HTMLEntityBuffer = "&";
this.inHTMLEntity = true;
this.currentChar++;
this.run();
return;
} else if(this.origText.charAt(this.currentChar) == ";" && this.inHTMLEntity) {
this.HTMLEntityBuffer += ";";
this.inHTMLEntity = false;
this.currentText += this.HTMLEntityBuffer;
this.currentChar++;
this.run();
return;
} else if(this.inHTMLEntity) {
this.HTMLEntityBuffer += this.origText.charAt(this.currentChar);
this.currentChar++;
this.run();
return;
} else {
this.currentText += this.origText.charAt(this.currentChar);
}
this.element.innerHTML = this.currentText;
this.element.innerHTML += (this.currentChar < this.origText.length - 1 ? (typeof this.cursor == "function" ? this.cursor(this.currentText) : this.cursor) : "");
this.currentChar++;
setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);
} else {
this.currentText = "";
this.currentChar = 0;
this.running = false;
this.finishedCallback();
}
}
</script> 
<body bgcolor=black>
<center>
<h2><font color=pink><marquee direction=right>Welcome</marquee></font></h2>
<div id="example1">
</div>
<p id="example2"><font color=pink>
_____?Sexy?S________________________</br>
____y?Sexy?Sex______________________</br>
___?Sexy?Sexy?S_____________________</br>
___?Sexy?Sexy?S_____________________</br>
__?Sexy?Sexy?Se_____________________</br>
_?Sexy?Sexy?Se______________________</br>
_?Sexy?Sexy?Se______________________</br>
_?Sexy?Sexy?Sexy?___________________</br>
?Sexy?Sexy?Sexy?Sexy________________</br>
?Sexy?Sexy?Sexy?Sexy?Se_____________</br>
?Sexy?Sexy?Sexy?Sexy?Sex____________</br>
_?Sexy?__?Sexy?Sexy?Sex_____________</br>
___?Sex____?Sexy?Sexy?______________</br>
___?Sex_____?Sexy?Sexy______________</br>
___?Sex_____?Sexy?Sexy______________</br>
____?Sex____?Sexy?Sexy______________</br>
_____?Se____?Sexy?Sex_______________</br>
______?Se__?Sexy?Sexy_______________</br>
_______?Sexy?Sexy?Sex_______________</br>
________?Sexy?<a href=table.php><font color=pink>Next</font></a>?Sex______________</br>
_______?SexySexy?Sexy?Se____________</br>
_______?Sexy?Sexy?Sexy?Sexy?________</br>
_______?Sexy?Sexy?Sexy?Sexy?Sexy____</br>
_______?Sexy?Sexy?Sexy?Sexy?Sexy?R__</br>
________?Sexy?Sexy____?Sexy?Sexy?Se_</br>
_________?Sexy?Se_______?Sexy?Sexy?_</br>
_________?Sexy?Se_____?Sexy?Sexy?___</br>
_________?Sexy?R____?Sexy?Sexy______</br>
_________?Sexy?R_?Sexy?Sexy_________</br>
________?Sexy?Sexy?Sexy_____________</br>
________?Sexy?Sexy?R________________</br>
________?Sexy?Sexy__________________</br>
_______?Sexy?Se_____________________</br>
_______?Sexy?_______________________</br>
______?Sexy?________________________</br>
______?Sexy?________________________</br>
______?Sexy?________________________</br>
______?Sexy_________________________</br>
______?Sexy_________________________</br>
_______?Sex_________________________</br>
_______?Sex_________________________</br>
______?Sexy?________________________</br>
______?Sexyyy_______________________</br>


</font></p>
<script type="text/javascript"> 
//Define first typing example:
new TypingText(document.getElementById("example1"));
//Define second typing example (use "slashing" cursor at the end):
new TypingText(document.getElementById("example2"), 50, function(i){
var ar = new Array("_"," ","_","_"); return " " + ar[i.length %
ar.length]; });
//Type out examples:
TypingText.runAll();
</script></div>

<a href=table.php><font color=pink><marquee>Back</marquee></font></a>
</body>
</html>