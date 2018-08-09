<?php $me->verifylogin("hod",1); 


?>
<head>
	
	<title>
		
		Result Calculator****

	</title>

		 <meta name="viewport" content="width=device-width, initial-scale=1"> 


</head>

<body>
	
	
			<?php include_once('../images/layout/head.php'); ?>

			<?php include_once('../images/layout/menu.php'); ?>
	
	
	<div class="w3-container" style="position: relative; margin: 0;">


		
		<nav class="w3-sidenav w3-animate-left w3-left" style="position: relative; z-index: 0; width: 24.5%;">

			
				
				<?php $me->loadmenu(1); ?>
				
				<hr>

				
			
		</nav>
		
		

		<div class="w3-right w3-border-left" id="scoresheet" style="width: 75%; position: relative; z-index: 0;">
			
			<div class="w3-modal" id="modal1">
					<div class="w3-modal-content w3-animate-zoom">
						
						<a class="w3-btn w3-right w3-red" onclick="document.getElementById('modal1').style.display='none'">X</a>
						<hr><br>

						<h2 class="w3-blue w3-padding-small w3-center">Student To Be Migrated</h2>

						<div class="w3-container">
						
								<p id="feedback" class='w3-center w3-padding-8'></p>

								<cc>
									<img src="../images/content/spinner.gif">
								</cc>
								<br>
								<p class='w3-center'><button class="w3-blue w3-btn" id="wrap_student_into_batch">Wrap Selected Into Batch</button></p>
								<br>

							</p>
						
						</div>

					</div>
						
		</div>
				
				<?php 

					$me->cur_profile();
				
				?>

				<p class="w3-padding-small w3-red">N:B

				<ul class="w3-ul w3-small">

					<li>Next Level/Class Must Be Emptied Before Migration</li>
					<li>Migration Mode, Recommed Migration by Batch(Passed Only) At SSS Level to Classify Student Into ART, SCIENCE OR COMMERCIAL</li>
					<li>Recommend Migrate ALL at 1st and 2nd Term</li>
					<li>Recommend Migrate Passed Student Only at 3rd Term</li>
				
				</ul>

				</p>
			
				<h2 class="w3-center w3-indigo" style="width: 100%; margin: 0px;">Choose Level : Migrate To</h2><br>
				
				<form method="post" action=<?php echo $config['control']['update']; ?> class="w3-form" style="padding:5%;">

					<input type="hidden" name="upid" value="15">

					<label>Level/Class</label>
					<select class="w3-input" name="lv">
						
						<?php $me->load_level(); ?>

					</select>

					<br>

					<label>Term</label>
					<select class="w3-input" name="sem">
						
						<?php $me->load_semester(); ?>

					</select>
					<br>

					<label>Migration Mode &nbsp; <!--<span class="w3-badge w3-small w3-red w3-round" id="count_state_migrate">Migrating 54 Student</span> -->  </label>
					<select class="w3-input" name="mode" id="mig_mode">
						<?php

							if ($_SESSION['sem_id'] == 1) {
								echo "<option value='1'>Migrate All</option>";
						
							}else{
								
								echo "
								<option value='1'>Migrate All</option>
								<option value='2'>Migrate Passed Student Only</option>
								<option value='3'>Migrate By Batch</option>";

							}
								

						?>
						
					</select>
					<br>

					<ll></ll>

					<br>
					<button class="w3-btn w3-indigo w3-center" type="submit" id="" >Migrate</button>
				</form>	
	

		</div>

		

	</div>

	<?php include_once('../images/layout/footer.php'); ?>
</body>


