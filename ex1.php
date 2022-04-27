<!DOCTYPE html>
<html>
 
<head>
 <meta charset="UTF-8" />
 
 <title>Quiz Result</title>
</head>
 
<body> 

<?php
echo "<table border =\"1\" style='border-collapse: collapse'>";
$p_col=0;
	for ($row=0; $row <= 100; $row++) { 
		echo "<tr> \n";
		for ($col=0; $col <= 100; $col++) {
			if ($row==0) {
				$p = $col;
			}
			else {
				if ($col == 0) {
					$p = $row*1;
				}
				else {
					$p = ($col) * $row;
				}
			}
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>

</body>
 
</html>