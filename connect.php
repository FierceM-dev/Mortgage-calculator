<?php
	

	$name = $_POST['name'];
	$rate = $_POST['rate'];
	$maxloan = $_POST['maxloan'];
	$minpay = $_POST['minpay'];
	$term = $_POST['term'];




	$mysql = mysqli_connect('localhost', 'root', '', 'banks');
	$mysql->query("INSERT INTO `bank` (`name`, `rate`, `max loan`, `min payment`, `term`) VALUES('$name', '$rate', '$maxloan', '$minpay', '$term')"); 

	$mysql->close();
	header('Location: /');

?>


<!-- <?php 
		$mysql = mysqli_connect('localhost', 'root', '', 'banks');
		$categories = mysqli_query($mysql, "SELECT * FROM `bank`");
		while ($cat = mysqli_fetch_assoc($categories) )
		{
		    echo $cat['Max loan'], "-", $cat['Rate'], "___";
		    // echo "___";
		}
?> -->