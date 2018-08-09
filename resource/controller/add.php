<?php
	
	namespace cliqsFrameWork\add;
	
	include_once('../../bootstrap/pageinit.php');
	//include_once('../../config/config.php');
	include_once('../class/users.php');
	
	use cliqsFrameWork\ic\yall as me;
	use cliqsFrameWork\ic\connect as connect;
	use cliqsFrameWork\ic\performance as ivalid;
	
	
	function redirect($url){

				$url=filter_var($url,FILTER_SANITIZE_URL);

				header("location:$url");
	}

	$me			=	new me();
	$connect	=	new connect();
	$check  	=	new ivalid();
	
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "from: Cyber Protection Corps Nigeria";

	
		$ad=(int)filter_var(strip_tags(trim($_POST['addid'])),FILTER_VALIDATE_INT);

		if($ad==1){

			//'fname':fname,'lname':lname,'tel':tel,'sex':sex,'adrank':adrank,'addid':1

			$fname=$check->sanitize($_POST['fname']);
			$pass=$check->sanitize($_POST['pass']);
			$email=$check->sanitize(filter_var($_POST['email'],FILTER_SANITIZE_EMAIL));
			$sex=$check->sanitize($_POST['sex']);
			$bk=0;
			
			$me->addadmin($fname,$pass,$email,$sex);

		}else if($ad==2){

			$costitle=ucwords($check->sanitize($_POST['costitle']));
			$coscode=strtoupper($check->sanitize($_POST['coscode']));
			$cosunit=$check->sanitize($_POST['cosunit']);
			
			$me->addcourse($costitle,$coscode,$cosunit);

		}else if($ad==3){

			//'assign_cos_id':data,'assign_lec_id':selected_lec,'addid':3
			
			$assign_lec_id=htmlentities($_POST['assign_lec_id']);
			$course=$_POST['assign_cos_id'];
			
			$me->map_course_lecturer($assign_lec_id,$course);

		}else if($ad==4){
			
			//'description':description,'privacy':privacy,'dpt':dpt
			
			
			
		}else if($ad==5){
			
			//'addid':5,'newsthread':newsthread,'pcomment':pcomment

						
		}else if ($ad==6) {
			
			//'addid':6,'state':state

			

		}else if ($ad==7) {

			//'addid':7,'state':state,'lga':lga

			
			
		}else if ($ad==8) {

			
		}else if ($ad==9) {
			
			//'addid':9,'areaname':areaname,'state':state,'lga':lga,'addr':addr,'cont':contact,'type':type

		}else if ($ad==10) {

			
			
		}else if ($ad==11) {	

			
		}else if ($ad==12) {
			
			
		}else if ($ad==13) {

			
		}else if ($ad==14) {
			
		
		}else if ($ad==15) {

			
		}else if ($ad==16) {
			

		}else if ($ad==17) {
			
			
		}else if ($ad==18) {
			
			
		}else if ($ad==19) {
			
			

		}else if ($ad==20) {
			
			//'fname':fname,'type':type,'comment':comment
			
			foreach ($_POST['inherit'] as $value) {
				$me->inherit_cos_from($value);
			}

		}else if ($ad == 21) {
				
			$fname=$check->sanitize($_POST['fname']);
			$sex=$check->sanitize($_POST['sex']);
			$bk=0;
			
			$me->addstud($fname,$sex);


		}else if ($ad==22) {
			

		}else if ($ad==23) {
			

		}else if ($ad==24) {
			

		}else if ($ad==25) {
			

		}


?>