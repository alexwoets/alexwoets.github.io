<DOCTYPE html>
  <html>
    <head>
    </head>
    <body>
      <?php
      
		if (!isset($_GET['op'])||!isset($_GET['x'])||!isset($_GET['y'])){
			echo "<h1>Incorrect or incomplete data</h1>";
			exit();
		}
		
		$x = $_GET['x'];
		$y = $_GET['y'];
		
		switch($_GET['op']){
			case 'sum':
				$result = $x + $y;
				echo "<h1>$x + $y = $result</h1>";
				break;
				
			case 'sub':
				$result = $x - $y;
				echo "<h1>$x - $y = $result</h1>";
				break;
				
			case 'multi':
				$result = $x * $y;
				echo "<h1>$x * $y = $result</h1>";
				break;
				
			case 'div':
				if ($y == 0){
					echo "<h1>Cannot divide by zero!</h1>";
				}
				$result = $x / $y;
				echo "<h1>$x / $y = $result</h1>";
				break;
		}

       ?>
    </body>
  </html>
