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
    <div id="organizer-adjustment" class="bg-white relative z-20 flex flex-col justify-center h-screen w-full">
        <div id="outer-border" class="w-full h-screen bg-red-100 flex flex-col justify-center items-center">
            <div class="form__center flex flex-col items-start justify-center h-4/5 w-4/5">
                <form method="POST" class="w-full flex flex-col gap-7 justify-center items-center">
                    <!-- Which card -->
                    <div class="which__card__container w-4/6 text-center flex mr-3">
                        <span style="font-family: Poppins, sans-serif;" class="border-b-2 cursor-pointer w-full font-medium -ml-4 text-sm sm:text-sm sm:w-4/6 md:text-sm md:w-4/6 md:-ml-2 lg:w-3/6 lg:-ml-1 lg:text-sm pt-1" required>SELECT CARD:</span>
                        <select required name="creditCardChange" id="creditCardSelect" class="bg-transparent border-b-2 cursor-pointer hover:border-b-8 w-full outline-none pb-2" select>
                            <option value>-- --</option>
                            <?php if(is_array($data['cards'])): ?>
                                <?php foreach($data['cards'] as $row):?>
                                    <option value="<?=$row->creditCard?>"><?=$row->creditCard?> Card</option>          
                                <?php endforeach;?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div id="email" class="w-4/6 text-center flex mr-3">
                        <span style="font-family: Poppins, sans-serif;" class="border-b-2 cursor-pointer w-full font-medium -ml-4 text-sm sm:text-sm sm:w-full md:text-sm md:w-5/6 md:-ml-2 lg:w-3/6 lg:-ml-1 lg:text-sm pt-1" required>CONFIRM EMAIL:</span>
                        <input name="email2" type="text" class="pl-8 bg-transparent border-b-2 cursor-pointer w-full outline-none pb-2" required>
                    </div>
                    <!-- Deposit or Withdraw  -->
                    <div class="deposit__withdraw__container w-4/6 text-center flex mr-3">
                        <span style="font-family: Poppins, sans-serif; width: 110%;" class="border-b-2 cursor-pointer text-sm font-medium -ml-4 sm:text-sm sm:w-full md:text-sm md:w-5/6 md:-ml-2 lg:w-3/6 lg:-ml-1 lg:text-sm pt-1" required>TRANSACTION TYPE:</span>
                        <select required name="depositOrWithdraw" class="bg-transparent border-b-2 cursor-pointer hover:border-b-8 w-full outline-none pb-2" select>
                            <option value>-- --</option>
                            <option class="text-xs" value="withdraw">Withdraw</option>
                            <option class="text-xs" value="deposit">Deposit</option>
                        </select>
                    </div>
                    
                    <!-- How much -->
                    <div id="amountChange" class="w-4/6 text-center flex mr-3">
                        <span style="font-family: Poppins, sans-serif;" class="-ml-4 border-b-2 cursor-pointer w-full font-medium sm:ml-2 sm:pr-20 text-sm sm:text-sm sm:w-4/6 md:text-sm md:w-2/6 md:-ml-2 lg:w-3/6 lg:pr-14 lg:text-sm">AMOUNT: </span>
                        <input required name="amountChange" type="text" class="pl-8 bg-transparent border-b-2 cursor-pointer hover:border-b-8 w-full outline-none">
                    </div>
                    <!-- Submit -->
                    <div id="button-container-login" class="w-4/5 text-center -mt-4">
                        <button id="update" class="w-32 h-10 rounded-3xl bg-red-500 text-white hover:opacity-70 transition duration-200 ease-in cursor-pointer">Confirm</button>
                    </div>     
                </form>
            </div>
        </div>
    </div>
</div>

<!-- End of accountheader -->
<?php
    include_once "../app/components/accountHeaderEnd.php";
?>

<!-- </body> -->
