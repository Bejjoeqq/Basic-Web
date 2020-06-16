<?php
echo"
<form>
<input type=number min=1 max=100 name=a>
<input type=submit>
</form>";
$b=$_POST['a'];
function aa($b)
{
//$b=array("aa","bb","cc","dd","ee","ff","gg","hh","jj");
//for($a=0;$a<=8;$a++)
//{
//echo "$b[$a]</br>";
//}

if($b%2==0)
{
echo"Genap";
}
else
{
echo"Ganjil";
}
}
aa($b);
?>