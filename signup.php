<?php
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $security_question = $_POST['sq'];

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

            if($result->num_rows ==0){

                if ($password === $password2){
            

                    $query = $conn->prepare("insert into login_info(email, password, security_question) values(?, ?, ?)");
                    $query->bind_param("sss",$email,$password, $security_question);
                    $result = $query->execute();

                    echo '<script>
                            window.location.href ="index.php";
                            alert("Account created . Please login !!!");
                        </script>' ;
                        

                    $query->close();
                    $conn->close();

                }
                
                

                else{

                    echo '<script>
                                window.location.href ="signuppage.php";
                                alert("Password did not matched !!! TRY AGAIN ");
                                
                        </script>';
                    } 

            }

            else{
            
            echo '<script>
            window.location.href ="index.php";
            alert("ACCOUNT ALREADY EXIST !! TRY WITH DIFFERENT EMAIL ID");
            
            </script>';


            }
    }


            
                
    
?>