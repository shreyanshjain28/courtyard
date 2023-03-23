<?php

        session_start();        
        $email = $_POST['email'];
        $password = $_POST['password'];

        $conn = new mysqli('localhost','root','','demo_project');
        if($conn->connect_error){
            echo "$conn->connect_error";
            die("Connection Failed : ". $conn->connect_error);
        } 
        
        else {
           
            $quary = $conn->prepare("select * from login_info where email = ?");
            $quary->bind_param("s",$email);
            $quary->execute();
            $result = $quary->get_result();
            $cou= $result->num_rows ;
            
            if($result->num_rows >0) {
                
                $data = $result->fetch_assoc();
                if ($data['password'] == $password){

                    $_SESSION['user'] = $email;
                    echo  '<script>
                    window.location.href="home.php";
                    </script>' ;
                    
                }
                
                else{

                    echo  '<script>
                    window.location.href = "index.php";
                    alert("Login failed. Invalid password!!")
                    </script>';
                
                }
            }
            else{
                echo  '<script>
                        window.location.href = "index.php";
                        alert("Login failed. Invalid emailid or password!! IF YOU DON NOT HAVE AN ACCOUNT PLEASE CREATE")
                        </script>';
                 
               }        
    }

        $quary->close();
        $conn->close();
?>