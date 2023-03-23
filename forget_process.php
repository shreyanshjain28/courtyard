<?php

        $ss = $_POST['sq'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2=$_POST['password2'];
        
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

                
                
                if($result->num_rows >0 ) {
                    
                    if($password == $password2)
                    {
                    
                        $data = $result->fetch_assoc();
                        if ($data['email'] == $email and $data['security_question'] == $ss){
                            
                            $stmt = $conn->prepare("update login_info set password = ? where email = ?");
                            $stmt->bind_param("ss", $password ,$email);
                            $execval = $stmt->execute();
                            
                            echo  '<script>
                                window.location.href = "index.php";
                                alert("PASSWORD UPDATED SUCCESSFULLY . PLEASE LOGIN !!!")
                            
                            </script>';           

                            $stmt->close();
                            $conn->close();
                        }
                        
                        else{
                            
                            echo  '<script>
                                window.location.href = "forgotpassword.php";
                                alert("Login failed. Invalid email id or security question !! IF YOU DON NOT HAVE AN ACCOUNT PLEASE CREATE")

                            </script>';
                                            
                        }
                
                    }    
                    else{

                        echo  '<script>
                            window.location.href = "forgotpassword.php";
                            alert("PASSWORD DID NOT MATCHED")

                        </script>';                        
                    }
                }    
                
                else{

                    echo  '<script>
                            window.location.href = "index.php";
                            alert("Login failed. Invalid email id !! IF YOU DON NOT HAVE AN ACCOUNT PLEASE CREATE")
                            </script>';
                }

        }
            
?>


