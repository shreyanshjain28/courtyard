<?php

    session_start() ; 

?>

<?php

 /* if (isset($_SESSION['user']))
    {}
    
    else
    {
        header("location:index.php");    
    }
    
*/
?> 

    <!DOCTYPE html>
    <html>
    <head>
        <title>Review Form</title>
        <link rel="stylesheet" href="profile.css">
    </head>
    <body>
        
    <?php include './common/header.php';?>

                <main>

                <div class = "main_body">
                        <div clss = "iframe_profile" >
                                <iframe  src="./assets/profile3.jpg" title="profile">
                                </iframe>
                        </div>

                        <div>

                            <form action="" method="POST">  
                                    <div class="container">   
                                        
                                        <div class="heading">
                                            <h1 align="center"> PERSONAL DETAILS</h1>        
                                        </div>

                                        <div>
                                            <label for = "name">Name</label>
                                            <input type="text" id= "name" placeholder="ALEX">
                                        </div>

                                        <div>
                                            <label for = "city">City</label>
                                            <input type="city" id= "city" placeholder="BRAMPTON">
                                            
                                        </div>                                            
                                        <div>
                                            <label for="email">EMAIL: </label>   
                                            <input type="email" id="email" placeholder="ALEX@gmail.com" name="email" required >  
                                        </div>

                                        <div>
                                            <label for= "reservations"> "Reservations" </label>
                                            <input for="reservations" id="resevations" placeholder="5" disabled>
                                        </div>

                                        <div>
                                            <Label for="review-done"> Review status </label>
                                            <input for="review-status" id ="review-done" placeholder="ALREADY DONE" Disabled> 
                                        </div>

                                        
                                        
                                        <div>
                                            <label for ="ss1">Security Question</label>
                                            <select class="select" id="ss1">
                                                <option value="1">what is your pet name or create one</option> 
                                            </select>  
                                            
                                            <input type="text" id="ss" placeholder="Bob" name="sq" required autocomplete="off" maxlength="15"> 
                                        </div>
                                        
                                        <button class="button"  id="btn">Update Information</button> 
                                    
                                    
                                    </div>
                             </form>
                    
                        <div>  
                    <div>

                </main>
        </body>
    </html>
