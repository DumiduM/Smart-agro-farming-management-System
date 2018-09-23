<?php 
session_start();
include('../configChat.php');

switch($_REQUEST['action']){

	case "sendMessage":
			  //global $db;

	session_start();


	$query = $db->prepare("INSERT INTO messages SET user='admin', message=?");	
	$run = $query->execute([$_REQUEST['message']]); 
			//echo "test";

	if( $run )
	{
		echo 1;
		exit;
	}

	break;

	case "getMessages":
			//echo "working";



	$query = $db->prepare("SELECT * FROM messages where user=? or user = ?");	
		//$query = $db->prepare("SELECT id,message,date FROM messages");

	$run = $query->execute([$_SESSION['login_user']],[$_SESSION['login_user']]+"_admin");

	$rs = $query->fetchAll(PDO::FETCH_OBJ);

		//$dateShow = '';



		//echo var_dump($rs); 
	$chat = '';
	foreach ($rs as $message) 
	{
		if ($message->user == $_SESSION['login_user']){
			$chat .= '<div class="user-message" style="text-align: left;

														
    													background-color: #f1f1f1;
    													border-radius: 20px;
														width: auto;
    													padding: 10px;
    													margin: 10px 0;"> <strong>'.$message->user.' :- </strong> '.$message->message.'<span style="font-size: 60%;" >        '.date('m.d h:i a', strtotime($message->date)).'</span></div>';
		}
		else if ($message->user == 'admin'){
			$chat .= '<div class="admin-message" style="text-align: right; 
														color:white; 
														width: conten;
    													background-color: #68c421;
    													border-radius: 20px;
    													padding: 10px;
    													margin: 10px 0;"> <strong>'.$message->user.' :- </strong> '.$message->message.'<span style="font-size: 60%;" >        '.date('m.d h:i a', strtotime($message->date)).'</span></div>';
		}
	}
		//echo $dateShow;
	echo $chat;

	break;
}
?>

