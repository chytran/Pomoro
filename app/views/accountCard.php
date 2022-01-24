<?php
    require_once '../app/components/htmlSetup.php';
?>
<?php
    require_once '../app/components/header.php';
?>
<!-- <header>  -->

<!-- Left side header of account -->
<?php
    require_once '../app/components/accountHeader.php';
?>



<!-- Right side of account -->
<div id="right" class="w-full sm:w-4/6 md:w-full xl:w-full h-screen  z-10">
    <div id="organizer-adjustment" class="bg-white relative z-20 flex flex-col justify-center h-screen w-full">
        <div id="outer-border" class="w-full h-screen bg-red-100 flex flex-col justify-center items-center">
            <div id="title-container" class="w-full h-16 mt-36 flex justify-center items-center">
                <h1 style="font-family: poppins, sans-serif;" class="text-lg font-bold">Cards</h1>
            </div>
            <div id="content-container" class="h-full w-full flex flex-col justify-center items-center">
                
                    <?php if(is_array($data['posts'])): ?>
                        <?php foreach($data['posts'] as $row):?>
                            <div class="p-4 w-64 h-44 mt-5 rounded-xl flex flex-col justify-center items-start bg-red-600">
                                <h1 style="font-family: poppins, sans-serif;" class="text-white font-semi-bold text-lg"><?=$row->creditCard?> Card</h1>
                                <div style="font-family: poppins, sans-serif;" class="text-white pt-2 text-md " id="amount">$<?=$row->amount?></div>
                                <div class="text-white bg-red-400 hover:bg-red-800 transition duration-200 ease-in cursor-pointer w-full h-9 rounded-xl mt-4 flex justify-center items-center" id="view-account"><a href="#" class="text-sm">View Account</a></div>
                            </div>
                        <?php endforeach;?>
                    <?php endif; ?>
                <div class="p-4 w-64 h-44 mt-5 rounded-xl flex flex-col justify-center items-start bg-red-600">
                    <h1 style="font-family: poppins, sans-serif;" class="text-white font-semi-bold text-lg">Main Account</h1>
                    <div style="font-family: poppins, sans-serif;" class="text-white pt-2 text-md " id="amount">$11000.00</div>
                    <div class="text-white bg-red-400 hover:bg-red-800 transition duration-200 ease-in cursor-pointer w-full h-9 rounded-xl mt-4 flex justify-center items-center" id="view-account"><a href="#" class="text-sm">View Account</a></div>
                </div>
                <div class="p-4 w-64 h-44 mt-5 rounded-xl flex flex-col justify-center items-start bg-red-600">
                    <h1 style="font-family: poppins, sans-serif;" class="text-white font-semi-bold text-lg">Account</h1>
                    <div style="font-family: poppins, sans-serif;" class="text-white pt-2 text-md " id="amount">$11000.00</div>
                    <div class="text-white bg-red-400 hover:bg-red-800 transition duration-200 ease-in cursor-pointer w-full h-9 rounded-xl mt-4 flex justify-center items-center" id="view-account"><a href="#" class="text-sm">View Account</a></div>
                </div>
                <div class="p-4 w-64 h-44 mt-5 rounded-xl flex flex-col justify-center items-start bg-red-600">
                    <h1 style="font-family: poppins, sans-serif;" class="text-white font-semi-bold text-lg">Account</h1>
                    <div style="font-family: poppins, sans-serif;" class="text-white pt-2 text-md " id="amount">$11000.00</div>
                    <div class="text-white bg-red-400 hover:bg-red-800 transition duration-200 ease-in cursor-pointer w-full h-9 rounded-xl mt-4 flex justify-center items-center" id="view-account"><a href="#" class="text-sm">View Account</a></div>
                </div>
            </div>
        </div>
    </div>
</div>  

<!-- End of accountheader -->
<?php
    include_once "../app/components/accountHeaderEnd.php";
?>
