<html>
<head>
	<style>
		.yellow{
			background-color:yellow;
			font-weight:bold;
		}
		td{
			width:40px;
			height:40px;
			text-align:center;
		}
	</style>
</head>
<body>

	<table border=1>

		<tr>

			<td class='yellow'>&nbsp</td>

			<?php
				for($i=1;$i<=10;$i++){
					echo "<td class='yellow'>";
					echo $i;
					echo "</td>";
						
				}
			?>

		</tr>
		<?php

			for($z=1;$z<=10;$z++)
			{
				echo "<tr>";
					
					echo "<td class='yellow'>";
							echo $z;
					echo "</td>";
					
					for($j=1;$j<=10;$j++){
						echo "<td>";
							echo $j*$z;
						echo "</td>";
					}
					
				echo "</tr>";
			}
		?>

	</table>
</body>
</html>