<?php
	$error_message = "";
	$investment = "";
	$interest_rate = "";
	$years = "";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <div id="content">
    <?php if (!empty($error_message)) { ?>
		<p class="error"><?php echo $error_message; ?></p>
	<?php } // end if ?>

	<h1>Future Value Calculator</h1>	
	<form action="display_results.php" method="get">
		<div id="data">
			<label>Investment Amount:</label>
			<input type="text" name="investment"
				value="<?php echo $investment; ?>"/><br />

			<label>Yearly Interest Rate:</label>
			<input type="text" name="interest_rate"
				value="<?php echo $interest_rate; ?>"/><br />

			<label>Investment:</label>
			<input type="text" name="investment"
				value="<?php echo $investment; ?>"/><br />

			<label>Number of Years:</label>
			<input type="text" name="years"
				value="<?php echo $years; ?>"/><br />
		</div> <!-- End data -->
		
		<div id="buttons">
			<label>&nbsp;</label>
			<input type="submit" value="Calculate"/><br />
		</div>
	</form>
	</div> <!-- End content -->
</body>
</html>