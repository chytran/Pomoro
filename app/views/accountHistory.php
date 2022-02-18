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
<div id="right" class="w-full sm:w-full md:w-full h-screen bg-white z-10 pt-14">
    <div class="lg:relative border-solid border-2 border-black invisible lg:visible absolute"> 
        <span id="Date" style="padding-left: 0.50rem;" class="float-left">Date</span>
        <span id="Description" style="padding-left: 8.75rem;" class="float-left">Description</span>
        <span id="Balance" class="float-right pr-2">Balance</span>
        <span id="Amount" class="float-right pr-6">Amount</span>
        <div class="relative invisible">test</div>
    </div> 
        <div class="md:grid-col-1 lg:relative pt-2 divide-y-2 divide-red-500 invisible lg:visible absolute">
            <?php if(is_array($data['history'])): ?>
                <?php foreach($data['history'] as $row):?>   
                    <div class="justify-center text-center pb-8 pt-2 invisible lg:visible lg:relative absolute">
                        <span id="Date" class="float-left pl-2"><?=$row->history?></span>
                        <span id="Description" style="padding-left: 1.95rem;" class="float-left"><?=$row->message?></span>
                        <span id="Balance" class="float-right pr-2 italic"><?=$row->currentAmount?></span>
                        <span id="Amount" style="padding-right: 3.35rem;" class="float-right"><?=$row->changes?></span>  
                    </div>
                <?php endforeach;?>
            <?php endif; ?>
        <div class="justify-center text-center py-2">End of Transactions</div>
</div>
    <!--<div class="relative border-solid border-2 border-black md:invisible visible md:absolute"> 
        <span id="Date" style="padding-left: 0.50rem;" class="float-left">Date</span>
        <span id="Description" style="padding-left: 3.75rem;" class="float-left">Description</span>
        <span id="Balance" class="float-right pr-2">Balance</span>
        <span id="Amount" class="float-right pr-6">Amount</span>
        <div class="relative invisible">test</div>
    </div>  
    <div class="md:grid-col-1 relative pt-2 divide-y-2 divide-red-500 md:invisible visible md:absolute">
        <div class="justify-center text-center pb-8"> 
            <span id="Date" class="float-left pl-2">1/4/2022</span>
            <span id="Description" style="padding-left: 1.95rem;" class="float-left">Spotify</span>
            <span id="Balance" class="float-right pr-2 italic">$14,200</span>
            <span id="Amount" style="padding-right: 3.35rem;" class="float-right">$10</span>
        </div>
        <div class="justify-center text-center pb-8 pt-2 md:invisible visible relative md:absolute">
            <span id="Date" class="float-left pl-2">1/2/2022</span>
            <span id="Description" style="padding-left: 1.95rem;" class="float-left">Disney+</span>
            <span id="Balance" class="float-right pr-2 italic">$14,210</span>
            <span id="Amount" style="padding-right: 3.35rem;" class="float-right">$15</span>  
        </div>
        <div class="justify-center text-center pb-8 pt-2 md:invisible visible relative md:absolute">
            <span id="Date"  class="float-left pl-2">1/1/2022</span>
            <span id="Description" style="padding-left: 1.95rem;" class="float-left">CVS+</span>
            <span id="Balance" class="float-right pr-2 italic">$14,265</span>
            <span id="Amount" style="padding-right: 3.35rem;" class="float-right">$55</span>                  
        </div>
        <div class="justify-center text-center pb-8 pt-2 md:invisible visible relative md:absolute">
            <span id="Date" class="float-left pl-2">12/1/2022</span>
            <span id="Description" style="padding-left: 1.40rem;" class="float-left">Nike</span>
            <span id="Balance" class="float-right pr-2 italic">$14,490</span>
            <span id="Amount" style="padding-right: 3.35rem;" class="float-right">$225</span>  
        </div> --->
    </div>
    <div class="relative border-solid border-2 border-black lg:invisible visible lg:absolute"> 
        <span id="Date" style="padding-left: 0.30rem;" class="float-left">Posted</span>
        <div class="relative invisible">test</div>
    </div>  
    <div class="relative pt-1 divide-y-2 divide-red-500 lg:invisible visible lg:absolute">
        <div class="grid grid-cols-2"> 
            <div id="Description" style="" class="text-left font-semibold pl-2">Spotify</div>
            <div id="Amount" style="" class="text-right font-semibold pr-2">$10</div>
            <div id="Date" class="text-left pl-2 pt-2">1/4/2022</div>
            <div id="Balance" class="text-right italic pr-2 pt-2">$14,200</div>
        </div>
        <div class="grid grid-cols-2"> 
            <div id="Description" style="" class="text-left font-semibold pl-2">Disney+</div>
            <div id="Amount" style="" class="text-right font-semibold pr-2">$15</div>
            <div id="Date" class="text-left pl-2 pt-2">1/2/2022</div>
            <div id="Balance" class="text-right italic pr-2 pt-2">$14,210</div>
        </div>
        <div class="grid grid-cols-2"> 
            <div id="Description" style="" class="text-left font-semibold pl-2">CVS+</div>
            <div id="Amount" style="" class="text-right font-semibold pr-2">$55</div>
            <div id="Date" class="text-left pl-2 pt-2">1/1/2022</div>
            <div id="Balance" class="text-right italic pr-2 pt-2">$14,265</div>
        </div>
        <div class="grid grid-cols-2"> 
            <div id="Description" style="" class="text-left font-semibold pl-2">Nike</div>
            <div id="Amount" style="" class="text-right font-semibold pr-2">$225</div>
            <div id="Date" class="text-left pl-2 pt-2">12/1/2022</div>
            <div id="Balance" class="text-right italic pr-2 pt-2">$14,490</div>
        </div>
        <div class="justify-center text-center py-2">End of Transactions</div>
    </div>
</div>  

<!-- End of accountheader -->
<?php
    include_once "../app/components/accountHeaderEnd.php";
?>

<!-- </body> -->

<?php
    include_once '../app/components/footer.php';
?>