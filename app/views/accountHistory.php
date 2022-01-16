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
    <div class="relative border-solid border-2 border-black"> 
        <span id="Date" style="padding-left: 0.50rem;" class="float-left">Date</span>
        <span id="Description" style="padding-left: 3.75rem;" class="float-left">Description</span>
        <span id="Balance" class="float-right pr-2">Balance</span>
        <span id="Amount" class="float-right pr-6">Amount</span>
        <div class="relative invisible">test</div>
    </div>  
    <div class="md:grid-col-1 relative pt-2 divide-y-2 divide-red-500">
        <div class="justify-center text-center pb-8"> 
            <span id="Date" class="float-left pl-2">1/4/2022</span>
            <span id="Description" style="padding-left: 1.95rem;" class="float-left">Spotify scheduled payment to CRD 49050</span>
            <span id="Balance" class="float-right pr-2 italic">$14,200</span>
            <span id="Amount" style="padding-right: 3.35rem;" class="float-right">$10</span>
        </div>
        <div class="justify-center text-center pb-8 pt-2">
            <span id="Date" class="float-left pl-2">1/2/2022</span>
            <span id="Description" style="padding-left: 1.95rem;" class="float-left">Disney+ scheduled payment to CRD 49050</span>
            <span id="Balance" class="float-right pr-2 italic">$14,210</span>
            <span id="Amount" style="padding-right: 3.35rem;" class="float-right">$15</span>  
        </div>
        <div class="justify-center text-center pb-8 pt-2">
            <span id="Date"  class="float-left pl-2">1/1/2022</span>
            <span id="Description" style="padding-left: 1.95rem;" class="float-left">CVS+ payment to CRD 49050</span>
            <span id="Balance" class="float-right pr-2 italic">$14,265</span>
            <span id="Amount" style="padding-right: 3.35rem;" class="float-right">$55</span>                  
        </div>
        <div class="justify-center text-center pb-8 pt-2">
            <span id="Date" class="float-left pl-2">12/1/2022</span>
            <span id="Description" style="padding-left: 1.40rem;" class="float-left">Nike payment to CRD 49050</span>
            <span id="Balance" class="float-right pr-2 italic">$14,490</span>
            <span id="Amount" style="padding-right: 3.35rem;" class="float-right">$225</span>  
        </div>
        <div class="justify-center text-center py-2">End of Transactions</div>
    </div>
</div>  

<!-- End of accountheader -->
<?php
    include_once "../app/components/accountHeaderEnd.php";
?>

<!-- </body> -->
