<?php
	$name = $_POST['name'];
	$email=$_POST['email'];
	$age = $_POST['age'];
	$favourite = $_POST['favourite'];
	$recommend = $_POST['radio'];
	$liked=$_POST['liked'];
	$improvements = $_POST['comments'];

	$conn = new mysqli('localhost','root','','demo_project');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);

	}
	else{


		$quary = $conn->prepare("select * from login_info where email = ?");
		$quary->bind_param("s",$email);
		$quary->execute();
		$result = $quary->get_result();
		$cou= $result->num_rows ;

		
		
		if($result->num_rows >0 )
		{

				$quary = $conn->prepare("select * from review where email = ?");
				$quary->bind_param("s",$email);
				$quary->execute();
				$result = $quary->get_result();
				$cou= $result->num_rows ;

				if ($cou == 0){

					$stmt = $conn->prepare("insert into review( name, email, age, favourite, recommend, liked , improvements) values(?, ?, ?, ?, ?, ?,?)");
					$stmt->bind_param("ssissss", $name, $email, $age, $favourite, $recommend, $liked ,$improvements);
					$execval = $stmt->execute();
					
					echo  '<script>
					window.location.href = "home.php";
					alert("FORM SUBMMITTED SUCCESSFULL . PLEASE EXIT !!!")
					
					</script>';           
				
					$stmt->close();
					$conn->close();


				} 

				else {
				
					echo  '<script>
					window.location.href = "home.php";
					alert("YOU HAVE ALREADY FILLED THIS FORM !! YOU CAN NOT SUBMIT AGAIN")
					
					</script>';
				}

		}
		
		else{
			echo  '<script>
					window.location.href = "home.php";
					alert("EMAIL ADDRESS DID NOT FOUND!! PLEASE ENTER A VALID EMAIL.")
					
					</script>';
			
		}
	}
?>