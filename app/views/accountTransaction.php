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
            <!-- Which card -->
            <div class="which__card__container">
                <select required name="creditCard" id="creditCardSelect" class="bg-transparent border-b-2 cursor-pointer hover:border-b-8 w-full outline-none pb-2" select>
                    <option value>-- --</option>
                    <?php if(is_array($data['cards'])): ?>
                        <?php foreach($data['cards'] as $row):?>
                            <option value="<?=$row->creditCard?>"><?=$row->creditCard?> Card</option>
                        <?php endforeach;?>
                    <?php endif; ?>
                </select>
            </div>
            
            <!-- Deposit or Withdraw  -->
            <!-- Submit -->
        </div>
    </div>
</div>

<!-- End of accountheader -->
<?php
    include_once "../app/components/accountHeaderEnd.php";
?>

<!-- </body> -->
