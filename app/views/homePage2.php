<?php
    require_once '../app/components/htmlSetup.php';
?>

<?php
    require_once '../app/components/header1.php';
?>
    <!--==================== MAIN  ====================-->
    <main class="overflow-x-hidden">
        <!-- Account -->
        <div id="account" class="h-screen relative m-auto w-screen bg-gradient-to-bl from-red-100 to-red-400 flex flex-column items-center justify-center bg-black"> 
            <!-- <img id="credit-img" src="<?=ASSETS?>pomoro/img/credit.png" alt="credit-hand" class="invisible lg:visible lg:right-0 xl:right-44 absolute bottom-0"> -->
            
            <div id="text-container" class="w-4/5 h-4/5 flex flex-row items-center justify-center gap-5 p-12">
                <!-- Left -->
                <div id="ecommerce-home" class="w-3/5 h-3/5 bg-white shadow-lg flex items-center justify-center">
                    <a href="ecommercehome/0/1" class="text-xs sm:text-lg md:text-3xl lg:text-4xl text-red-600">Pomoro Shop</a>
                </div>
                <!-- Right -->
                <div id="bank-home" class="w-3/5 h-3/5 bg-white shadow-lg flex items-center justify-center">
                    <a href="home" class="text-xs sm:text-lg md:text-3xl lg:text-4xl text-red-600">Pomoro Bank</a>
                </div>
            </div> 
        </div> 
        <!-- <div id="advertisement" class="h-full w-full bg-black">

        </div> -->
    </main>

    <!--==================== FOOTER  ====================-->
    <footer id="footer">
        <div id="social-media"></div>
        <div id="description-footer"></div>
    </footer>

    <!--==================== HEADER  ====================-->
    <script src="<?=ASSETS ?>/pomoro/javascript/main.js"></script>
