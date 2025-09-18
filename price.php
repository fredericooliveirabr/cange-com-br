<!DOCTYPE html>
<html lang="pt-br">

<?php
include "head.php"; 
?>

<body>
    <div class="main-content">
         <?php
         include "nav.php";
         ?>

        <!-- Main content -->
        <main>
            <?php
            include "intro_home.php";
            ?>

            

            <!-- Shape -->
            <div class="text-light-primary mt-n1 mt-sm-0">
                <svg preserveAspectRatio="none" viewBox="0 0 2000 150" xmlns="http://www.w3.org/2000/svg">
                    <polygon fill="currentColor" points="0 0 2000 0 2000 150"></polygon>
                </svg>                 
            </div>
            
            <!-- Features -->
            <?php
            include "features_home.php";
            ?>

            <!-- Shape -->
            <div class="text-light-primary">
                <svg preserveAspectRatio="none" viewBox="0 0 2000 150" xmlns="http://www.w3.org/2000/svg">
                  <polygon fill="currentColor" points="2000 0 2000 150 0 150"></polygon>
                </svg>
            </div>

           <?php
           include "integrations_home.php";
           ?>

            <!-- Shape -->
            <div class="text-light-primary mt-n1 mt-sm-0">
                <svg preserveAspectRatio="none" viewBox="0 0 2000 150" xmlns="http://www.w3.org/2000/svg">
                    <polygon fill="currentColor" points="0 0 2000 0 2000 150"></polygon>
                </svg>                 
            </div>
    
            <!-- Testimonials -->
            <?php
            include "testemonials.php";
            ?>

            <!-- Shape -->
            <div class="text-purple">
                <svg preserveAspectRatio="none" viewBox="0 0 2000 150" xmlns="http://www.w3.org/2000/svg">
                  <polygon fill="currentColor" points="2000 0 2000 150 0 150"></polygon>
                </svg>
            </div>
        </main>

       <!-- Footer -->

       <?php
       include "footer.php";
       ?>

       <!-- /Footer -->



    </div>
    
    <!-- Scripts -->

    <script src="./js/jquery/jquery-3.5.1.min.js"></script>
    <script src="./js/popper/popper.min.js"></script>
    <script src="./js/bootstrap/bootstrap.min.js"></script>
    <script src="./js/aos/aos.js"></script>
    <script src="./js/wave-effect/waves.min.js"></script>

    <script src="./js/parallax/simpleParallax.min.js"></script>
    <script src="./js/swiper/swiper.min.js"></script>
    <script src="./js/swiper/swiper.init.js"></script>
    <script src="./js/shuffle/shuffle.min.js"></script>
    <script src="./js/countup/countUp.js"></script>


    <script src="./js/theme.js"></script>


</body>

</html>