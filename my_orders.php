<?php 

    session_start();

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


<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MY ORDERS</title>
        <link rel = "stylesheet" href = "my_orders.css">
        
    </head>

    <body>
        <?php include './common/header.php'?>


        <main>
            <div class = "container">

                <div class="order_section">
                        <div>
                            <h1>MY ORDERS</h1>
                            <p>See your order here </p>
                            <p>See your order here </p>
                            <p>See your order here </p>
                            <p>See your order here </p>
                            <p>See your order here </p>
                            <p>See your order here </p>
                          

                        </div>



                </div>
                <hr style="margin: 0px auto;">

                <div class="checkout_section">
                        <div>
                            <h1>CHECK OUT</h1>
                        </div>
                </div>
            </div>

        </main>
    </body>



</html>