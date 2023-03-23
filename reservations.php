<?php

	session_start();
    
?>

<?php

   /* if (isset($_SESSION['user']))
    {}

    else{
        
        header("location:index.php"); 
    }
 */
?>
        

    <!DOCTYPE html>
    <html>
    <head>
        <title>Review Form</title>
        <link rel="stylesheet" href="review.css">
    </head>
    <body>
        
           
                    
        <?php include './common/header.php';?>

        <form  action="review_process.php" method="POST">
            <div class="container">
                
                <div class="heading">
                    
                    <h1 style="font-family:Luminari"> <b> RESERVE A TABLE  </b></h1>
                    
                </div>
                
                <div>
                <label>Full Name</label>
                
                <input type="text" name="name" placeholder="Enter your name" class="box" maxlength="30" required>
                </div>

                <div>
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter your Email"   class="box" maxlength="30" required>
                </div>


                <div>
                <label>Age</label>
                <input type="number" name="age" placeholder="Enter number of people" class="box" min="1"  pattern="[0-9]{2}" title="You can not enter a smbol  or a negative number" required>
                </div>
                

                <div>
                <label>number of people</label>
                <input type="number" name="age" placeholder="Enter your age" class="box" min="1" max="10" title="A table is for maximun 10 people" required>
                </div>

                <div>
                <label>Contact Number</label>
                <input type="number" name="age" placeholder="Enter your age" class="box"  title="A table is for maximun 10 people" required>
                </div>
                

                <div>
                <label>Enter timings</label>
                <input type="time"  name="time" requied>
                </div>


                <div>
                </div>
    

                <button class="button" type="submit">Submit</button>		
                <button class="button" type="reset">Reset</button>
                <button class="button" type="submit">PAY NOW</button>
            </div>
        </form>
    </body>
</html>
