<?php
	
	namespace cliqsFrameWork\login;
	
	include_once('../../bootstrap/pageinit.php');
	include_once('../class/users.php');
	
	use cliqsFrameWork\ic\yall as me;
	use cliqsFrameWork\ic\connect as connectme;
	use cliqsFrameWork\ic\performance as ivalid;
	
	function redirect($url){

				$url=filter_var($url,FILTER_SANITIZE_URL);

				header("location:$url");
	}


	$me			=	new me();
	$connect	=	new connectme();
	$check  	=	new ivalid();
	
	$loginid=(int)filter_var(strip_tags(trim($_POST['loginid'])),FILTER_VALIDATE_INT);
	
	
		
	
		if($loginid==1){
			
			$lv=$check->sanitize($_POST['lv']);
			$sem=$check->sanitize($_POST['sem']);
			
			
			$me->login_portal_acc_rank($lv,$sem);
		
		}else if ($loginid==2) {
			
			$link = $connect->iconnect();

			$matric = $check->sanitize($_POST['matric']);
			$sql = mysqli_query($link,"SELECT lv_id,sem_id FROM stud WHERE matric_no='$matric'");
			list($level,$semester)=mysqli_fetch_row($sql);

			$_SESSION['lv_id'] = $level;
			$_SESSION['sem_id'] = $semester;
			if (mysqli_num_rows($sql)) {
				
				redirect("../../client/index.php?q=personal_result&lv_id=$level&sem_id=$semester&matric=$matric");

			}else{
			
				echo "	Invalid Registration No.";
			
			}
			
		}else if ($loginid==3) {
			# code...
		}else if ($loginid==4) {
			# code...
		}else if ($loginid==5) {
			# code...
		}else if ($loginid==6) {
			# code...
		}else if ($loginid==7) {
			# code...
		}else if ($loginid==8) {
			# code...
		}else if ($loginid==9) {
			# code...
		}else if ($loginid==10) {
			# code...
		}else if ($loginid==11) {
			# code...
		}else if ($loginid==12) {
			# code...
		}

	exit();
?>