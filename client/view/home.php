<head>
	
	<title>
		
		Result Calculator****

	</title>

		 <meta name="viewport" content="width=device-width, initial-scale=1"> 

</head>

<body>
	
	<?php include_once('../images/layout/head.php'); ?>

	<hr style="color: navyblue;"></hr>

	<div class="w3-row">

		<div class="w3-container w3-half w3-center w3-white w3-card-4" style="height: auto; margin-left: 24%; margin-right: 24%; margin-top: 5%; margin-bottom: 10%; padding: 0px;">
		
		
		
			<h2 class="w3-center w3-indigo" style="width: 100%; margin: 0px;">Check Result</h2><br>
		
	 		<p id="feedback" class="w3-text-red"></p>

			<form class="w3-form" method="post" action=<?php echo $config['control']['splogin']; ?> style="padding:5%;">

				<input type="hidden" name="loginid" value=2>
				<label class="w3 label w3-left">Reg. No.</label><input class="w3-input" type="text" name="matric" required><br>
				
				

				
				<p><button class="w3-btn w3-indigo w3-center">Check Result</button></p>

			</form>

			
			
		</div>

		<a href="../admin/"><i class="fa fa-bars w3-right w3-large"></i></a>

		</div>

		

	</div>

	<?php include_once('../images/layout/footer.php'); ?>

</body>