<html>
	<head>
	</head>
	<body>
		<?php
			$f=fopen("f1.txt",'r');
			$s=filesize("f1.txt");
			$data=fread($f,$s);
			$a=explode(" ",$data);
			rsort($a);
			
			$c=implode(",",$a);
			$sum=0;
			foreach($a as $element)
			{
				$sum= $sum+$element;
			}
			echo $sum;
			
			$d=fopen("f2.txt",'w');
			fwrite($d,$c);
			fclose($d);
		?>
	</body>
</html>