<?php
    session_start();

    if (isset($_SESSION['user']))
    {
        header("location:home.php"); 
        exit;
    }
?>

<!DOCTYPE html>   
<html>   
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  

    <title> Forgot password</title>  
    <link rel="stylesheet" href="style_index.css">
</head>    
<body>    
    

    <?php include './common/header.php' ?>

    <form action="forget_process.php" method="POST">  
        <div class="container">   
            <div class="header">
                <h1 text-align="center"> FORGOT PASSWORD</h1>        
            </div>

            <div>
            <label> EMAIL: </label>   
            <input type="email" id="email" placeholder="Enter REGISTERED EMAIL ID" name="email" required autocomplete="off"  > 
            </div>

            <div>
                <label for ="ss1">Select a Security Question</label>
                <select class="select" name="ss1" id="ss1" required>
                    <option value="1" >what is you pet\'s name</option>  
                </select>  
                
                <input type="text" id="ss" placeholder="ENTER YOUR ANSWER HERE" name="sq" required autocomplete="off" maxlength="15"> 
            </div>

            <div>
                <label for="password">NEW PASSWORD</label>   
                <input type="password" id="password" placeholder="Enter NEW PASSWORD" name="password" required autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" />
            </div>

            <div>
                
                <label for="password2">CONFIRM PASSWORD</label>   
                <input type="password" id="password2" placeholder="CONFIRM PASSWORD" name="password2" required autocomplete="off"> 
                
            </div>
            
            <button type="submit" id="btn">Submit INFORMATION</button> 
            
            
        </div>   
    </form>     
</body>     
</html>