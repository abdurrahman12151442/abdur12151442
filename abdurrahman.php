<html>
<head></head>
<title>Table</title>
<body>
<tr>
<b><font color="blue"><center/>ABDARRAHMAN</font></b></td></tr>
<tr>

<table border='1' cellpadding="0" cellspacing="0" style='colappse:0;' align='center' width='605   height="400"    '>
<tr>
    <td height="34" colspan="4" bgcolor="aqua">
<center>
      	<font face="Arial">
<font color="blue" colspan=3></div>
          </font>		
</font>
    	</center>	
	<center>
	<font face="Arial">
<font color="blue">
	<div align="center"></div>
        	</font></font>
	<table width="602" border="0" align="left" cellpadding="0" cellspacing="0">
        	<tr>
          <td width="51">
<font face="Arial">
<font color="black"><b>No</b></font></font></td>
          <td width="249">
<font face="Arial">
<font color="black"><b>Judul</b></font></font></td>
          <td width="173"><font face="Arial">
<font color="black"><b>downloads</b></font></font></td>
          <td width="129"><font face="Arial">
<font color="black"><b>grosses</b></font></font></td>
        </tr>
      </table>
    </center>
  	</td>
  </tr>
<?php
	for ($i=1; $i<=5; $i++)
	{
	if ($i%2==1)
		{
		$warna="silver";
		echo"
		<tr bgcolor='$warna'>
		<td height=34><center>$i</td>
		<td height=34 colspan=3>&nbsp
		Fast Five  
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		&nbsp
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		1,234,567
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		&nbsp &nbsp &nbsp $123,456,789
		</td>
		</tr>";
		$i++;
		}
		else{
		$warna="white";
		}
		echo "
		<tr bgcolor='white'>
		<td height=34 width=43><center>$i
		</td>
		<td height=34 width=210> &nbspThe Hangover II 
		</td>
		<td height=34 width=180><center>1,234,567</td>	
		<td height=34><center> $123,456,789
		</td>
		</tr>";
}
?>
<tr>
<td height=25 colspan="4" bgcolor="orange"><b><font color="black"><center/>BisaPHP.ayo</font></b></td></tr>
<tr>
 </tr>
</table>
</body>
</html>

