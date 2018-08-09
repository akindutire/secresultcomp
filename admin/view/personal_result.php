<?php 

	$me->verifylogin("hod",1); 

	$link=$connect->iconnect();

	$matric = mysqli_real_escape_string($link,$_GET['matric']);

?>
<head>
	
	<title>
		
		Result Calculator****

	</title>

		 <meta name="viewport" content="width=device-width, initial-scale=1"> 


</head>

<body>
	
	
			<?php //include_once('../images/layout/head.php'); ?>

			<?php //include_once('../images/layout/menu.php'); ?>
	
	
	<div class="w3-container" style="position: relative; margin-top: 5%;">


		
		<nav class="w3-sidenav w3-animate-left w3-left" style="position: relative; z-index: 0; width: 0.0%;">

			
				
				<?php //$me->loadmenu(1); 

				echo "<a class='w3-hover-blue' href='index.php?q=otherresult&matric=$matric' target='_new'>Other Result</a>";
				?>
				
				
			
		</nav>
		
		

		<div class="w3-right w3-border-left" id="scoresheet" style="width: 70%; position: relative; z-index: 0; margin-left: 0%; margin-right: 30%;">
			
			<div class="w3-modal" id="modal1">
					<div class="w3-modal-content w3-animate-zoom">
						
						<a class="w3-btn w3-right w3-red" onclick="document.getElementById('modal1').style.display='none'">X</a>

						<div class="w3-container">
						
								<p id="feedback" class='w3-center w3-padding-8'></p>

								<cc>
									<h2 class="w3-blue w3-center">Past Results</h2>
									<form method="post" action="index.php?q=otherresult" style="padding:5%;">

					
										<input type="hidden" name="matric_no" value=<?php echo $matric; ?> >

										<label>Level</label>
										<select class="w3-input" name="lv">
						
											<?php $me->load_level(); ?>

										</select>

										<br>

										<label>Semester</label>
										<select class="w3-input" name="sem">
											
											<?php $me->load_semester(); ?>

										</select>
										<br>

										<button class="w3-btn w3-indigo w3-center" type="submit" id="" >Go</button>
									</form>	
	
								</cc>

								<br>

							</p>
						
						</div>

					</div>
						
		</div>
				
				<?php 

				$level = $_SESSION['lv_id'];
				$semester = $_SESSION['sem_id'];
				$dpt_id = $me->cur_dpt();

				$csql=mysqli_query($link,"SELECT lv,sem,dpt FROM level,semester,dpt WHERE level.id='$level' AND semester.id='$semester' AND dpt.id='$dpt_id'");

				list($lv,$sem,$dpt)=mysqli_fetch_row($csql);

				$me->cur_student($matric);
				
				echo "<ul class='w3-ul'>
					<li>$lv,$sem</li>
				</ul>";
				
				echo "<br><br><oo>";

				$me->student_personal_result($matric);

				
				echo "</oo>";

				 

				?>
				
				<p class="w3-center"><a  class="w3-btn w3-blue" onclick="window.print()">Print Result</a> <a  class="w3-btn w3-blue" onclick="document.getElementById('modal1').style.display='block'">View Past Result</a></p>
		</div>

		

	</div>

	<?php //include_once('../images/layout/footer.php'); ?>
</body>