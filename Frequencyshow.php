



<!DOCTYPE html>
<html>
<head>
	<title>Counter</title>
	<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
</style>
</head>
<body>
<table width="40%" align="center">
	<tr>
		<td>
		<h2>Character Frequency Count</h2>
		</td>
	</tr>
	<tr style="color:grey">
		<td>Number of Characters
		</td>
	</tr>
	
	<tr>
		<td>

		      <?php
				$str1=$_POST['v1'];
	
				$str2=count_chars($str1,1);
				//echo "-";
				asort($str2);
				foreach($str2 as $x1=>$x2)
				{
					
					echo chr($x1)."  =>  ".$x2;
					
					echo "<br>";
	    
		
				}
	
			?>   
		</td>
	<tr>
		<td>
			<button align="center"><a href="index.php"></br>Input Another String</button>
		</td>
	</tr>
	</tr>
	<tr style="color:grey">
		<td>
		Number of words
		</td>
	</tr>
	</tr>	
		
			
			<td>
					
					<?php
					echo "<br>";
					echo "<br>";
					$str1=$_POST['v1'];
					
					
					$str3=array_count_values(str_word_count($str1,1));
					asort($str3);
					foreach($str3 as $x1=>$x2)
				{
					
					echo $x1."  =>  ".$x2;
					echo "<br>";
		
				}
				
				
				
					?>
			
			</td>
			
		<tr>

			<td>
			
			<button align="center"><a href="index.php"></br>Input Another String</button>
			</td>
		
		</tr>




</table>


</body>
</html>

