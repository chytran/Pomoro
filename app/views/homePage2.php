<?php
    require_once '../app/components/htmlSetup.php';
?>
<?php
    require_once '../app/components/musicPriority.php';
?>
<?php
    require_once '../app/components/header1.php';
?>
    <!--==================== MAIN  ====================-->
    <main class="overflow-x-hidden">
        <!-- Account -->
        <div id="account" class="h-screen relative m-auto w-screen bg-gradient-to-bl from-red-100 to-red-400">
            <img id="credit-img" src="<?=ASSETS?>pomoro/img/credit.png" alt="credit-hand" class="invisible lg:visible lg:right-0 xl:right-44 absolute bottom-0">
            <!-- Left -->
            <div id="text-container" class="absolute left-36 top-1/4 h-10 w-2/4 sm:w-1/4 sm:left-44">
                <h1 id="header-account" class="text-white text-3xl md:text-7xl" style="font-family: Poppins, sans-serif;">The most supported & protected banking system</h1>
                <p id="description-account" class="text-white opacity-80 text-lg mt-10">Check your current status and amount through your account</p>
                <a id="link" class="transition duration-200 ease-in hover:opacity-90 flex flex-row justify-center content-center cursor-pointer bg-white text-black w-48 h-10 mt-10 pl-2 font-semibold rounded-r-3xl" style="font-family:Poppins, sans-serif;">
                    <h1 class=" mt-2">Check Account</h1>
                    <i class='bx bx-right-arrow-alt ml-4 mt-3'></i>
                </a>
                
            </div> 
        </div>
        <div id="advertisement" class="h-full w-full bg-black">

        </div>
    </main>

    <!--==================== FOOTER  ====================-->
    <footer id="footer">
        <div id="social-media"></div>
        <div id="description-footer"></div>
    </footer>

    <!--==================== HEADER  ====================-->
    <script src="<?=ASSETS ?>/pomoro/javascript/main.js"></script>
<?php
    include_once '../app/components/footer.php';
?>