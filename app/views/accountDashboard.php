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
        <div id="outer-border" class="w-full h-screen bg-red-100 flex flex-col justify-between items-start">
            <div id="content-container" class="p-4 pt-12 h-1/5 w-full grid grid-cols-2 md:grid-cols-4 gap-3 justify-center place-items-center border-b-rose-700">
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
            <div id="options-container" class="p-4 pt-24 h-screen w-full flex flex-row gap-4 justify-between place-items-center border-b-rose-700">
                <div id="left" class="w-full md:w-1/2 h-2/5 gap-4 pl-20 md:pl-0">
                    <a href="transaction" id="deposit-withdraw-container" class="rounded-3xl hover:opacity-80 transition duration-200 w-5/6 bg-red-700 h-5/6 flex items-center justify-center">
                        <h1 class="text-lg font-semibold text-white">Make a Deposit/Withdraw</h1>
                    </a>
                    <a href="fundTransfer" id="fund-transfer-container" class="mt-6 rounded-3xl hover:opacity-80 transition duration-200 w-5/6 bg-red-700 h-5/6 flex items-center justify-center">
                        <h1 class="text-lg font-semibold text-white">Make a Fund Transfer</h1>
                    </a>
                </div>
                
                <img id="credit-img" src="<?=ASSETS?>pomoro/img/credit.png" alt="credit-hand" class="invisible lg:visible lg:right-0 xl:right-16 absolute bottom-0 ">
            </div>
        </div>
    </div>
</div>

<!-- End of accountheader -->
<?php
    include_once "../app/components/accountHeaderEnd.php";
?>
<!-- </body> -->
