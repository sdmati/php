<?php
  $a=5;
  $b=5;
  if ($a>300) {$a=300;};
  if ($b>300) {$b=300;};
  
  echo"<TABLE border=1>
      <TR><TD bgcolor=lightblue>x</TD>";
	  
  for($x=1;$x<=$a;$x++)
  {
   echo"<TD bgcolor=yellow>$x</TD>";
  }
  echo"</TR>";
  
  for($y=1;$y<=$b;$y++)
  {
   echo"<TR><TD bgcolor=lightgray>$y</TD>";
   for($x=1;$x<=$a;$x++)
   {
	$w=$x*$y;   
	echo"<TD>$w</TD>\n";
   }	   
   echo"</TR>";
  }	  
  
  echo"</TABLE>";
?>