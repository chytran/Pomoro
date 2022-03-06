lines (16 sloc)  349 Bytes
   
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
<div id="right" class=" w-full sm:w-4/6 md:w-full xl:w-full h-screen  z-10">
    <div id="organizer-adjustment" class="bg-white relative z-20 flex flex-col justify-center h-screen w-full">
        <div id="outer-border" class="w-full h-screen bg-red-100 flex flex-col justify-center items-center">
            <div id="title-container" class="w-full h-16 flex justify-center items-center">
                <h1 style="font-family: poppins, sans-serif;" class="text-lg font-bold">Transfers</h1>
            </div>
            <form method="POST" id="content-container" class="h-100% w-full flex flex-col justify-center items-center">
                <div class="p-4 w-64 h-44 mt-5 rounded-xl flex flex-col justify-center items-start bg-red-600">
                    <h1 style="font-family: poppins, sans-serif;" class="text-white font-semi-bold text-lg">From Account</h1>
                    <select required name="creditCardOne" id="creditCardSelectOne" class="bg-transparent border-b-2 cursor-pointer hover:border-b-8 w-full outline-none pb-2" select>
                            <option value>-- --</option>
                            <?php if(is_array($data['cards'])): ?>
                                <?php foreach($data['cards'] as $row):?>
                                    <option value="<?=$row->creditCard?>"><?=$row->creditCard?> Card</option>          
                                <?php endforeach;?>
                            <?php endif; ?>
                    </select>
                </div>
                <div class="p-4 w-64 h-44 mt-5 rounded-xl flex flex-col justify-center items-start bg-red-600">
                    <h1 style="font-family: poppins, sans-serif;" class="text-white font-semi-bold text-lg">To Account</h1>
                    <select required name="creditCardTwo" id="creditCardSelectTwo" class="bg-transparent border-b-2 cursor-pointer hover:border-b-8 w-full outline-none pb-2" select>
                            <option value>-- --</option>
                            <?php if(is_array($data['cards'])): ?>
                                <?php foreach($data['cards'] as $row):?>
                                    <option value="<?=$row->creditCard?>"><?=$row->creditCard?> Card</option>          
                                <?php endforeach;?>
                            <?php endif; ?>
                    </select>
                </div>
                <div class="p-4 w-64 h-44 mt-5 rounded-xl flex flex-col justify-center items-start bg-red-600">
                    <h1 style="font-family: poppins, sans-serif;" class="text-white font-semi-bold text-lg">Amount</h1>
                    <div style="font-family: poppins, sans-serif;" class="text-white pt-2 text-md " id="amount"></div>
                    <div id="amountChange" class="w-4/6 text-center flex mr-3">
                        <span style="font-family: Poppins, sans-serif;" class="-ml-4 border-b-2 cursor-pointer w-full font-medium sm:ml-2 sm:pr-20 text-sm sm:text-sm sm:w-4/6 md:text-sm md:w-2/6 md:-ml-2 lg:w-3/6 lg:pr-14 lg:text-sm">AMOUNT: </span>
                        <input required name="amountChange1" type="text" class="pl-8 bg-transparent border-b-2 cursor-pointer hover:border-b-8 w-full outline-none"> 
                </div>
                <div id="button-container-login" class="w-4/5 text-center -mt-4">
                        <button id="update" class="w-32 h-10 rounded-3xl bg-red-500 text-white hover:opacity-70 transition duration-200 ease-in cursor-pointer">Confirm</button>
                    </div>   
            </form> 
        </div>
    </div>
</div>  

<!-- End of accountheader -->
<?php
    include_once "../app/components/accountHeaderEnd.php";
?>

<!-- </body> -->

          