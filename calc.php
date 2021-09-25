<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculator</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class = "wrapper">
		<div class="title">Choose a bank</div>
		<select name="check"  id = "select" onchange="selectChange(this)">
			<?php 
				$mysql = mysqli_connect('localhost', 'root', '', 'banks');
				$categories = mysqli_query($mysql, "SELECT * FROM `bank`");
				while ($cat = mysqli_fetch_assoc($categories) )
				{
						echo '<option value = "', $cat['rate'], '" id = "option" class = "bank">', $cat['name'], ' - ', $cat['rate'], '% </option>';
				}
			?>
		</select>
	
	<div class="title">Initional loan</div>
	<div class="input">
		<input type="number" value="0" id="total-cost" class="inp" readonly="">
	</div>
	<div class="input">
		<input type="range" min="0" max="100000" value="0" step="1000" id="total-cost-range" class="input-range">
	</div>

	<div class="title">Down payment</div>
	<div class="input">
		<input type="number" value="0" id="an-initial-fee"  class="inp" readonly="">
	</div>
	<div class="input">
		<input type="range" min="0" max="100000" step="1000" value="0" id="an-initial-fee-range" class="input-range">
	</div>


	<div>
		<div>
			<div class="title">Mountly payment:</div>
				<div class="title" id="mountly-pay">0<span> UAN</span></div>
			
		</div>
	</div>
</div>
	<script src="js/main.js"></script>
</body>
</html>
