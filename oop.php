<html>
	<head>
	</head>
	<body>
		<?php
			class Author
			{
				
				private $bookid;
				private $name;
				private $price;
				
				function __construct($b,$n,$p)
				{
					$this->bookid=$b;
					$this->name=$n;
					$this->price=$p;
				}
				function display()
				{
					foreach($this->bookid as $bid)
					{
						echo "Booik ID = ".$bid."<br>";
					}
					foreach($this->name as $n)
					{
						echo "Name = ".$n."<br>";
					}
					foreach($this->price as $p)
					{
						echo "price = ".$p."<br>";
					}
				}
				function sum()
				{	$s=0;
					foreach($this->price as $p)
					{
						$s+=$p;
					}
					echo "total price :".$s."<br>";
				}	
			}
			$e1=new Author(array(1,2),array('abc','xyz'),array(70,50));
			$e2=new Author(array(3),array('pqr'),array(50));
			$e1->sum();
			$e1->display();
			$e2->display();
		?>
	</body>
</html>