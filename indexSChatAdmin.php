	<?php  

	session_start();
	$_SESSION['username'] = "Students";

	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chat Room</title>

	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->

	<script
	src="https://code.jquery.com/jquery-3.3.1.js"
	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	crossorigin="anonymous"></script>

</head>
<body>




	<div>
		<div id = "wrapper">
			<div class = "chat_wrapper">
				<div id=chat>
					
				</div>
				<form method="POST" id="messageFrm">
					<br><br>
					<textarea name="message" cols="100" rows="2" class="textarea" class="form-control"></textarea>
					
				</form>
			</div>
			
		</div>

	</div>



	<script>

		LoadChat();

		setInterval(function(){
			LoadChat();
		},100);

		function LoadChat(){

			$.post('handlers/messagesAdmin.php?action=getMessages', function(response){

				var scrollpos = $('#chat').scrollTop();
				var scrollpos = parseInt(scrollpos) + 620;
				var scrollHeight = $('#chat').prop('scrollHeight');

				$('#chat').html(response);

				if( scrollpos < scrollHeight){

				}else{
					$('#chat').scrollTop( $('#chat').prop('scrollHeight'));
				}

				

			});
		}


		$('.textarea').keyup(function(e){
			if( e.which == 13){
				$('form').submit();
			}
		});

		$('form').submit(function(){
			var message = $('.textarea').val();

			$.post('handlers/messagesAdmin.php?action=sendMessage&message='+message, function(response){
				//alert(response);

				if(response==1){
					LoadChat();
					document.getElementById('messageFrm').reset();
			}

		});
			
			return false;
		})
	</script>

</body>
</html>


