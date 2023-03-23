<?php

    session_start();

?>

<?php

    if (isset($_SESSION['user']))
    {
        header("location:home.php"); 
    
    }

    else{}

?>
    
            <!DOCTYPE html>   
            <html>   

            <head>  
                <meta charset ="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">  
                <title> Login Page </title>  
                <link rel="stylesheet" href="style_index.css">
            </head>    
            <body>
            
            
            
        
            <form action="login_process.php" method="POST">  
                <div class="container">   
                    
                    <div class="logo_image"> 
                    <img src="./assets/courtyard_main_logo.jpg" alt="logo" widht="100%" height="300">
                    </div>

                    <div class="heading">
                    <h1>Login</h1>
                    </div>

                    
                    <div>
                    <label for="email">Username : </label>   
                    <input type="email" id="email" placeholder="Enter Username" name="email" required >  
                    </div>
                    
                    <div>
                    <label for="password">Password : </label>   
                    <input type="password" id="password" placeholder="Enter Password" name="password" required autocomplete="off"  title="passwors should be 6 to 12 digit long and can have alphabets ,numbers . only "> 
                    </div>
                    
                    <button type="submit" id="btn">Login</button> 
                    <button type="button" onclick="document.location=\'signuppage.php\'">SIGN UP</button>

                    <button type="reset" class="cancelbtn"> Cancel</button>
                

                    <a class="link" href="forgotpassword.php"> Forgot Password? </a>   
                </div>
                
          
            </form>     
        </body>     
        </html> 

    