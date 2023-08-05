<html>
	<head>
	</head>
	<body>
		<?php
			$a=array("DPB"=>array("Empid"=>4127,"Dept"=>"CE","FavColor"=>"pink"),
					 "SKR"=>array("Empid"=>4130,"Dept"=>"CE","FavColor"=>"Black"),
					 "JJS"=>array("Empid"=>4126,"Dept"=>"IT","FavColor"=>"Blue"),
					 "JRP"=>array("Empid"=>4123,"Dept"=>"CE","FavColor"=>"Black"));
			echo "<table border=3>";
			foreach($a as $row=>$value)
			{	
				echo "<tr><th>".$row."</th>";
				foreach($value as $k=>$v)
				{
					echo "<td>".$k."=>".$v."</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
			
		?>
	</body>
</html>