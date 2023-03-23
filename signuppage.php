<?php

    session_start();
?>

<?php

        if (isset($_SESSION['user']))
        {
            header("location:home.php"); 

        }


        else{ 
            
                echo '<!DOCTYPE html>   
                <html>   
                <head> 
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
                    <title> SIGN UP</title>
                    <link rel="stylesheet" href="style_index.css">  
                </head>    
                <body>        
                    

                    <form action="signup.php" method="POST">  
                        <div class="container">   
                            
                            <div class="header">
                                <h1 align="center"> CREATE ACCOUNT</h1>        
                            </div>
                                
                            <div>
                                <label for="email">Username : </label>   
                                <input type="email" id="email" placeholder="Enter Username" name="email" required >  
                            </div>
                            
                            <div>
                                <label for="password">Password : </label>   
                                <input type="password" id="password" placeholder="Enter Password" name="password" required autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">  
                            </div>

                            <div>
                                <label for="password2">Password : </label>   
                                <input type="password" id="password2" placeholder="Confirm Password" name="password2" required autocomplete="off"  title="passwors should be 6 to 12 digit long and can have alphabets ,numbers . only "> 
                            </div>

                            
                            
                            <div>
                                <label for ="ss1">Select a Security Question</label>
                                <select class="select" id="ss1">
                                    <option value="1">what is your pet name or create one</option> 
                                </select>  
                                
                                <input type="text" id="ss" placeholder="ENTER YOUR ANSWER HERE" name="sq" required autocomplete="off" maxlength="15"> 
                            </div>
                            
                            <button type="submit" id="btn">Submit INFORMATION</button> 
                            
                            
                        </div>   
                    </form>     
                </body>     
                </html>';  

        }
?>