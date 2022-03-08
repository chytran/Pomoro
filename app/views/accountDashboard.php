<?php
    require_once '../app/components/htmlSetup.php';
?>
<?php
    require_once '../app/components/header1.php';
?>
<!-- <header>  -->

<!-- Left side header of account -->
<?php
    require_once '../app/components/accountHeader.php';
?>

<!-- Right side of account -->
<div id="right" class="w-full sm:w-4/6 md:w-full xl:w-full h-screen  z-10 bg-black">
    <div id="organizer-adjustment" class="bg-white relative z-20 flex flex-col justify-center h-screen w-full">
        <div id="outer-border" class="w-full h-screen bg-red-100 flex flex-col justify-start items-start">
            <div id="content-container" class="pt-10 h-1/5 w-full grid grid-cols-4 gap-4 justify-center place-items-center border-b-rose-700">
                
                    <?php if(is_array($data['dashboard'])): ?>
                        <?php foreach($data['dashboard'] as $row):?>
                            <div class="hover:opacity-80 transition duration-200 cursor-pointer p-4 w-64 h-44 mt-5 rounded-xl flex flex-col justify-center items-center bg-red-600">
                                <h1 style="font-family: poppins, sans-serif;" class="text-white font-semi-bold text-lg"><?=$row->creditCard?> Card</h1>
                                <div style="font-family: poppins, sans-serif;" class="text-white pt-2 text-md " id="amount">$<?=$row->amount?></div>
                                <div style="font-family: poppins, sans-serif;" class="text-white pt-2 text-md " id="amount">Card ID: <?=$row->id?></div>
                                <!-- <div class="text-white bg-red-400 hover:bg-red-800 transition duration-200 ease-in cursor-pointer w-full h-9 rounded-xl mt-4 flex justify-center items-center" id="view-account"><a href="#" class="text-sm">View Account</a></div> -->
                            </div>
                        <?php endforeach;?>
                    <?php endif; ?>
                
            </div>
        </div>
    </div>
</div>

<!-- End of accountheader -->
<?php
    include_once "../app/components/accountHeaderEnd.php";
?>
<!-- </body> -->
