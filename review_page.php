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
                    <h1 style="font-family:Luminari"> <b> CUSTOMER REVIEW </b></h1>
                    <h2>! Thank you for your time !</h2>
                </div>
                
                <div>
                <label>Name</label>
                
                <input type="text" name="name" placeholder="Enter your name" class="box" maxlength="30" required>
                </div>

                <div>
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter your Email"   class="box" maxlength="30" required>
                </div>


                <div>
                <label>Age</label>
                <input type="number" name="age" placeholder="Enter your age" class="box" min="1" pattern="[0-9]{2}" title="You can not enter a symbol  or a negative number" required>
                </div>
                
                <div>
                <label for="category">Your favourite cousine</label><br><br>
                </div>
                
                <div >
                
                <select class="select" name="favourite" id="category" required>
                    <option value="Panjabi">Panjabi</option>
                    <option value="Gujarati">Gujarati</option>
                    <option value="Thai">Thai</option>
                    <option value="South indian">south indian</option>
                    <option value="Other">Other</option>
                </select>
                </div>
                
                <br>
                
                <div>
                <label >Would you like to recommend us to others</label><br><br>
                <input class="radio" type="radio" name="radio" class="larger" value="yes" checked >Definitely<br>
                <input class="radio" type="radio" name="radio" class="larger" value="no" >No<br>
                <input class="radio" type="radio" name="radio" class="larger" value="maybe" > Maybe<br>
                </div>
                <br>
                <div>
                <label for="category">What fascinated you the most?</label><br><br>
                </div>

                <div >
                <select class="select" name="liked" id="category" required>
                    <option value="Interior">Interior</option>
                    <option value="Services">Services</option>
                    <option value="Food">Food</option>
                </select>
                </div>	
            
                <div>
                <label id="head2">Give your valuable feedback :-</label><br>
                </div>
            
                <div class="textarea">
                <textarea name="comments" maxlength="" wrap="hard" required placeholder="ENTER YOU COMMENTS HERE"></textarea>
                </div>

                <button type="submit">Submit</button>		
                <button type="reset">Reset</button>
            </div>
        </form>
    </body>
</html>
