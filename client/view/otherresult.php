<?php 


	$link=$connect->iconnect();

?>
<head>
	
	<title>
		
		Result Calculator****

	</title>

		 <meta name="viewport" content="width=device-width, initial-scale=1"> 

		 <style type="text/css">
		 	@import "../css/web/w3.css";
		 </style>
</head>

<body>
	
	
			<?php include_once('../images/layout/head.php'); ?>

			<?php //include_once('../images/layout/menu.php'); ?>
	<hr>
	
	<div class="w3-container" style="position: relative; margin-top: 5%;">


		
	<a href="lgt.php" class="w3-btn W3-right">Logout</a>
		
		

		<div class="w3-right w3-border-left" id="scoresheet" style="width: 70%; position: relative; z-index: 0; margin-left: 0%; margin-right: 30%;">
			
				<?php 

				$level=$check->sanitize($_POST['lv']);
				$semester=$check->sanitize($_POST['sem']);
				$matric_no=$check->sanitize($_POST['matric_no']);
				$dpt_id = $me->cur_dpt(2,$matric_no);

				
				$csql=mysqli_query($link,"SELECT lv,sem,dpt FROM level,semester,dpt WHERE level.id='$level' AND semester.id='$semester' AND dpt.id='$dpt_id'");

				list($lv,$sem,$dpt)=mysqli_fetch_row($csql);

				$record->cur_student($matric_no);
				
				echo "<ul class='w3-ul'>
					<li>$lv,$sem</li>
				</ul>";


				
				echo "<br><br><oo>";

				

				$me->get_past_result($level,$semester,$matric_no,2);

				
				echo "</oo>";

				 

				?>

				
		</div>

		

	</div>

	<?php include('../images/layout/footer.php'); ?>
</body>

			