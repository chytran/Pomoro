<?php
    require_once '../app/components/htmlSetup.php';
?>
<?php
    require_once '../app/components/header1.php';
?>
<!-- </header>  -->

<main class="overflow-x-hidden">
        <!-- Account -->
        <div id="featuredproduct" class="h-screen relative m-auto w-screen bg-gradient-to-t from-red-100 to-red-400">
            <img id="featuredproduct" src="<?=ASSETS?>pomoro/img/product<?=random_int(1,12);?>.png" alt="today's featured product" class="invisible lg:visible lg:right-0 xl:right-44 absolute bottom-0">
            <!-- Left -->
            <div id="text-container" class="absolute left-36 top-1/4 h-10 w-2/4 sm:w-1/4 sm:left-44">
                <h1 id="header-product" class="text-white text-3xl md:text-7xl" style="font-family: Poppins, sans-serif;">Shop securely with Pomoro Commerce</h1>
                <a id="link" class="transition duration-200 ease-in hover:opacity-90 flex flex-row justify-center content-center cursor-pointer bg-white text-black w-48 h-10 mt-10 pl-2 font-semibold rounded-r-3xl" style="font-family:Poppins, sans-serif;">
                    <h1 class=" mt-2">Shop Now</h1>
                    <i class='bx bx-right-arrow-alt ml-4 mt-3'></i>
                </a>
            </div> 
        </div>
        <div id="advertisement" class="h-full w-full bg-black">

        </div>
    </main>

