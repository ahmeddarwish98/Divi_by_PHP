<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$S = $_REQUEST["start"];
$E = $_REQUEST["end"];
$C = $_REQUEST["div"];
$Count = 0 ;
$Total = 0 ;

 
if(  $S == "" | $E == "" | $C == "" )
{
    echo("<table border=2 width=200 align=center>");
	
	echo("<tr>");
	echo("<td>"); echo("<h2 align=center >"); echo("Please Enter Data"); echo("</td>"); 
	echo("</tr>");
	
	echo("</table>");
}

else if($C == 0)
{
	echo("<table border=2 width=200 align=center>");
	
    echo("<tr>");
	echo("<td>"); echo("<h2 align=center >"); echo("Invaild Data"); echo("</td>");
	echo("</tr>");
	
	echo("</table>");
}

else if($S <= $E) 
{

     for($X = $S; $X <= $E; $X++)
      {
	     if($X % $C == 0 )
	       {
			echo("<table border=2 width=200 align=center>");
			
			echo("<tr>");
	        echo("<td>"); echo("<p align=center >");  echo( $X . "<br/>" ); echo("</td>"); 
	        echo("</tr>");
			
			echo("</table>");
	        $Count ++ ;
			$Total += $X ;
			}
        
      }
   			echo("<table border=2 width=200 align=center>");
			
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");  echo( "Count Is ");  echo("</td>"); 
		    echo("<td>");  echo("<p align=center >");  echo( $Count  );     echo("</td>");
	        echo("</tr>"); 
	
			echo("<tr>");
	        echo("<td>"); echo("<p align=center >");   echo( "Total Is " );  echo("</td>"); 
			echo("<td>"); echo("<p align=center >");   echo( $Total  );      echo("</td>");
	        echo("</tr>");
			
			echo("</table>");
}

else 
{
	
	for($X = $S; $X >= $E; $X--) 
      {
	     if($X % $C == 0 )
	       {
	        echo("<table border=2 width=200 align=center>");
			
	        echo("<tr>");
	        echo("<td>");  echo("<p align=center >");   echo( $X . "<br/>" ); echo("</td>");  
	        echo("</tr>");
			
			echo("</table>");
			$Count ++ ;
			$Total += $X ;
			}
	          
      }
 			echo("<table border=2 width=200 align=center>"); 
			
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");  echo( "Count Is ");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");  echo( $Count  );     echo("</td>");
	        echo("</tr>"); 
			
		    echo("<tr>");
	        echo("<td>");  echo("<p align=center >");  echo( "Total Is ");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");  echo( $Total  );     echo("</td>");
	        echo("</tr>");
			
			echo("</table>");
}

	
?>
</body>
</html>