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
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>HOME</title>
                
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

                
                <link rel = "stylesheet" href = "style.css">

                

            </head>
           
            <body>
            
          
                    
                        <?php include './common/header.php';?>
            
                <main> 


                <div class = "hero-img">
                    <div class = "hero-txt">
                        <h1>COURTYARD</h1>
                        <p>The best taste in town</p>
                    </div>
                </div> 



                <div class="about_section">
                    <p>Courtyard is a contemporary restaurant with a serene outdoor seating area, located in the heart of the city. Our menu offers a variety of dishes made from the freshest ingredients. Our friendly staff provides exceptional service to create a warm and inviting atmosphere. Come visit us for a memorable dining experience.</p>
                    <p>At Courtyard, we believe in providing exceptional service to our guests. Our staff is friendly, knowledgeable, and always ready to assist you in making your dining experience a memorable one</p>
                    <p>Whether you're looking for a quick lunch, a leisurely dinner, or a private event, Courtyard has everything you need to make your experience unforgettable. Come and visit us today and discover why we are one of the best restaurants in town.</p>
                </div>



                <section class= "hero">
                        <div class = "swiper hero-slider">
                            <div class= "swiper-wrapper">
                                
                                <div class = "swiper-slide slide">
                                    
                                       <img src="./assets/amb1 rest.jpg" alt="">
                        
                                </div>

                                <div class = "swiper-slide slide">
                                    
                                        <img  src="./assets/amb2.jpg" alt="">
                        
                                </div>

                                <div class = "swiper-slide slide">
                                    
                                        <img  src="./assets/amb5.jpg" alt="">
                        
                                </div>
                            </div>
                            
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </section>

                <div>
                    <button>CHECK OUT MENU</button> 
                </div>

                
                </main>
            
                <footer>
                    
                    <div class="row">
                        
                        <div class="col1">

                        
                        
                            <p>Address :-</p>
                            <p>22  College Street,<br>Toronto, ON</p>
                            <p class="email">courtyardacc17@gmail.com</p>
                            <p>+(1) 452-478-4889</p>
                            <p>@secret coder licenced 2023 | All Rights Reserved</p>
                            <br>
                            <p>opening hours</p>
                                <ul>
                                    <li>MONDAY - FRIDAY [ 4PM TO 10 PM ]</li>
                                    <li>SAT - SUN [ 4PM TO 12 PM ]</li>
                                </ul>

                            </br>
                            <h><b>FOLLOW US ~</b><h>

                            <div class="social">
                                <a href=""><img src="./assets/facebook.png"/ alt="facebook"></a></li>
                                <a href=""><img src="./assets/instagram.png"/ alt="insta"></a></li>
                                <a href=""><img src="./assets/youtube.png"/ alt="snapchat"></a></li>
                            </div>

                        </div>


                        <div class="col2">
                        
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d548.4470616973866!2d-79.38360775185362!3d43.66122081484305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34b4ff9f9cf9%3A0xe5df4ce046bf5d0c!2sTim%20Hortons!5e0!3m2!1sen!2sca!4v1679581915946!5m2!1sen!2sca" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        
                        </div>
                
                    </div>
                </footer>

                <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
                
                <script>
                    var swiper = new Swiper(".hero-slider", {
                        loop: true,
                        effect: "flip",
                        grabCursor: true,
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true,
                        },
                        navigation: {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev",
                        },
                        });         
                </script>
            </body>
            </html>
    
