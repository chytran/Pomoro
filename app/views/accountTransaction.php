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
            <form method="POST" class="w-full flex flex-col gap-7 justify-center items-center">
                <!-- Which card -->
                <div class="which__card__container">
                    <select required name="creditCardChange" id="creditCardSelect" class="bg-transparent border-b-2 cursor-pointer hover:border-b-8 w-full outline-none pb-2" select>
                        <option value>-- --</option>
                        <?php if(is_array($data['cards'])): ?>
                            <?php foreach($data['cards'] as $row):?>
                                <option value="<?=$row->creditCard?>"><?=$row->creditCard?> Card</option>          
                            <?php endforeach;?>
                        <?php endif; ?>
                    </select>
                </div>
                <div id="email" class="w-4/5 text-center flex ">
                    <span style="font-family: Poppins, sans-serif;" class="border-b-2 cursor-pointer w-1/6 font-medium -ml-4 sm:text-xs sm:w-4/6 md:text-sm md:w-2/6 md:-ml-2 lg:w-1/6 lg:-ml-1 lg:text-xs pt-1" required>EMAIL</span>
                    <input name="email2" type="text" class="bg-transparent border-b-2 cursor-pointer w-full outline-none pb-2" required>
                </div>
                <!-- Deposit or Withdraw  -->
                <select required name="depOrWith" id="depOrWith">
                    <option value>-- --</option>
                    <option value="withdraw">Withdraw</option>
                    <option value="deposit">Deposit</option>
                </select>
                <!-- How much -->
                <div id="amountChange" class="w-4/5 text-center flex">
                    <span style="font-family: Poppins, sans-serif;" class="border-b-2 cursor-pointer w-1/6 font-medium sm:ml-2 sm:text-xs sm:w-4/6 md:text-sm md:w-3/6 md:-ml-2 lg:w-2/6 lg:-ml-3 lg:text-xs">Amount: </span>
                    <input required name="amountChange" type="text" class="bg-transparent border-b-2 cursor-pointer hover:border-b-8 w-full outline-none">
                </div>
                <!-- Submit -->
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
