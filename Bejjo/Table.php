//file Table2 dan Table3 tidak ikut
<html>
<head>

<script language='JavaScript'>
var txt="    FORM DATA SISWA     ";
var speed=300;
var refresh=null;
function action() { document.title=txt;
txt=txt.substring(1,txt.length)+txt.charAt(0);
refresh=setTimeout("action()",speed);}action();
</script>

</head>

 <h1>
<center>
<script>
farbbibliothek = new Array(); 
farbbibliothek[0] = new Array("#FF0000","#FF1100","#FF2200","#FF3300","#FF4400","#FF5500","#FF6600","#FF7700","#FF8800","#FF9900","#FFaa00","#FFbb00","#FFcc00","#FFdd00","#FFee00","#FFff00","#FFee00","#FFdd00","#FFcc00","#FFbb00","#FFaa00","#FF9900","#FF8800","#FF7700","#FF6600","#FF5500","#FF4400","#FF3300","#FF2200","#FF1100"); 
farbbibliothek[1] = new Array("#00FF00","#000000","#00FF00","#00FF00"); 
farbbibliothek[2] = new Array("#00FF00","#FF0000","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00"); 
farbbibliothek[3] = new Array("#FF0000","#FF4000","#FF8000","#FFC000","#FFFF00","#C0FF00","#80FF00","#40FF00","#00FF00","#00FF40","#00FF80","#00FFC0","#00FFFF","#00C0FF","#0080FF","#0040FF","#0000FF","#4000FF","#8000FF","#C000FF","#FF00FF","#FF00C0","#FF0080","#FF0040"); 
farbbibliothek[4] = new Array("#FF0000","#EE0000","#DD0000","#CC0000","#BB0000","#AA0000","#990000","#880000","#770000","#660000","#550000","#440000","#330000","#220000","#110000","#000000","#110000","#220000","#330000","#440000","#550000","#660000","#770000","#880000","#990000","#AA0000","#BB0000","#CC0000","#DD0000","#EE0000"); 
farbbibliothek[5] = new Array("#000000","#000000","#000000","#FFFFFF","#FFFFFF","#FFFFFF"); 
farbbibliothek[6] = new Array("#0000FF","#FFFF00"); 
farben = farbbibliothek[4];
function farbschrift() 
{ 
for(var i=0 ; i<Buchstabe.length; i++) 
{ 
document.all["a"+i].style.color=farben[i]; 
} 
farbverlauf(); 
} 
function string2array(text) 
{ 
Buchstabe = new Array(); 
while(farben.length<text.length) 
{ 
farben = farben.concat(farben); 
} 
k=0; 
while(k<=text.length) 
{ 
Buchstabe[k] = text.charAt(k); 
k++; 
} 
} 
function divserzeugen() 
{ 
for(var i=0 ; i<Buchstabe.length; i++) 
{ 
document.write("<span id='a"+i+"' class='a"+i+"'>"+Buchstabe[i] + "</span>"); 
} 
farbschrift(); 
} 
var a=1; 
function farbverlauf() 
{ 
for(var i=0 ; i<farben.length; i++) 
{ 
farben[i-1]=farben[i]; 
} 
farben[farben.length-1]=farben[-1]; 
setTimeout("farbschrift()",30); 
} 
// 
var farbsatz=1; 
function farbtauscher() 
{ 
farben = farbbibliothek[farbsatz]; 
while(farben.length<text.length) 
{ 
farben = farben.concat(farben); 
} 
farbsatz=Math.floor(Math.random()*(farbbibliothek.length-0.0001)); 
} 
setInterval("farbtauscher()",5000); 
text= "Hacked By"; //h 
string2array(text);
divserzeugen(); 
//document.write(text); 
</SCRIPT></center>
</h1>

 <body bgcolor=black>
 
   <?php

     $nis     = "Bejjo";
     $nama    = "Eqq";
     $kelas   = "Bejjo";
     $tanggal = "Eqq";
     $tempat  = "~~~~~";
     $num1    = 40;
     $num2    = 3;
     $num0    = 40*3;
     $hasil1    = $num1+$num2;
     $hasil2    = $num1-$num2;    
     $hasil3    = $num1*$num2;
     $hasil4    = $num2/$num1;
     $hasil5    = $num1%$num2;
echo "<center><table bgcolor=white border=0>
 
 <tr>
 <td>10010010&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
 <td>:</td>
 <td><marquee>$nis</marquee></td>
 </tr>
 <tr> 
 <td>10100101&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
 <td>:</td>
 <td><marquee>$nama</marquee></td>
 </tr>
 <tr>
 <td>10010001&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
 <td>:</td>
 <td><marquee>$kelas</marquee></td>
 </tr>
 <tr>
 <td>11011101&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
 <td>:</td>
 <td><marquee>$tempat/$tanggal</marquee></td>
 </tr>
</table>";



?>

<audio controls autoplay>
  <source src="wuxuanlan.mp3" type="audio/mp3">
</audio>
</br>
<table border=0>
<tr>
<td colspan=3>
<a href=table2.php><font color=#5b2ec5><marquee direction=right>Next</marquee></font></a>  
</td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
</table>
</body>
</html>

   
      