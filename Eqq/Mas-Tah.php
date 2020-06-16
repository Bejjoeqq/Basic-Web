<html>
<head>
<title>Tarif Angkot Di Medan</title>
<script>alert("Selamat datang di program Bejjo(Aldhiya Rozak)")</script>
<script type="text/javascript">
 function x()
 {
 var nt,hasil;
 nt=document.forms[0].nt.value;
 hasil=nt*1 
 document.forms[0].nr.value=hasil;
 if(hasil<=5)
 ket="KM Jarak yang ditempuh, Tarif = Rp.2000,-";
 else if (hasil<=10)
 ket="KM Jarak yang ditempuh, Tarif = Rp.3000,-";
 else if (hasil<=15)
 ket="KM Jarak yang ditempuh, Tarif = Rp.5000,-";
 else if (hasil<=30)
 ket="KM Jarak yang ditempuh, Tarif = Rp.7000,-";
 document.forms[0].nh.value=ket;
 }
 
</script>
</head>
<body>
 <form>
 <h1>Program Grade Nilai Sederhana dengan Javascript</h1>
 Nilai Teori
 <input type=number name=nt min=0 max=30>
 
 Nilai Huruf
 <input type="text" name=nh />
<input type="button" value="Hitung Rata-rata" onClick="x()" />
<input type="reset" value="Reset" />
 </form>
</body>
</html>

