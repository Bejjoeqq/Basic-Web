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







<table border="5" width="100%" height="100%" cellpadding="5" bgcolor="black">
<tr>
<td width="30%" align="center" valign="center">
<img src=""  align="middle" border="0" width="300" height="400" /><br />
</td>
<td width="70%" align="center">
<font color="#00BFFF" size="3"><code>
<div id="example1">
</div>
<p id="example2">
:: <blink>Kotonoha Katsura-san</blink> :: <br /><br />


===========================================<br />
Waktu berjalann tiada henti  <br>
mengiringii rembulan dan mentarii<br>
yang terbitt nan tenggelamm setiap hari<br>
mengiringi usiamuu yang terus bertambahh dari hari ke hari<br>
hingga saatt ini.<br>
Selamat ulang tahun.<br>

Melangkahh di usia baru, adalahh suatu gentar bagimu<br>
Saat sebuahh ritual dirayakann<br>
dengan nyalaa lilin-lilin<br>
yang berceritaa tentang kebahagiaan<br>
Panjang Umurr dan Bahagiaa dalam hidupmu<br>

Semoga hari harimmu kedepan lebih bahagiaa dan penuh harapan<br>
Meski ada sedikitt rintangan anggaplahh itu hanya suatu cobaann untuk semakin menguatkann imanmu<br>
Sekali lagi Happyy Birthday...<br>
Semoga segala kebaikann menyertaimu "I wish you all the best..."<br>
===========================================<br />


</p>
</object><object data="http://flash-mp3-player.net/medias/player_mp3.swf" width="0" height="0" type="application/x-shockwave-flash"><param value="#ffffff" name="bgcolor" /><center>
</object><object data="http://flash-mp3-player.net/medias/player_mp3.swf" width="0" height="0" type="application/x-shockwave-flash"><param value="#ffffff" name="bgcolor" /><param value="mp3=http://liaavaillere.esy.es/Hatsune%20Miku%20-%20Our%20Let%20it%20Be.mp3
&loop=1&autoplay=1&volume=125" name="FlashVars" /></object>
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
</code></font>

</td>





</tr>
</table>
<table width="100%" border="5" bgcolor="pink">
<tr><td align="center">





</td></tr>
</table>
